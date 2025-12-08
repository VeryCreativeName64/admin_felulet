<?php
session_start();
require_once("dbconnect.php");

// 🔹 SEGÉDFÜGGVÉNY: jelszó hashelése
function hashPassword($plainPassword)
{
    return password_hash($plainPassword, PASSWORD_BCRYPT);
}

// 🔹 BEJELENTKEZÉSI FOLYAMAT
if (isset($_POST['submit'])) {
    $email = trim($_POST['user']);
    $jelszo = trim($_POST['pass']);

    if (empty($email) || empty($jelszo)) {
        echo "<script>alert('Kérlek, töltsd ki az összes mezőt!');window.location='bejelentkezes.php';</script>";
        exit;
    }

    // 🔹 Felhasználó lekérése
    $sql = "SELECT * FROM t_user WHERE user_email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {

        $most = new DateTime();
        $letiltas_lejarata = $user['user_active_date'] ? new DateTime($user['user_active_date']) : null;
        $utolso_probalkozas = $user['user_reg_date'] ? new DateTime($user['user_reg_date']) : null;

        // 🔹 8 órás inaktivitás utáni automatikus reset
        if ($utolso_probalkozas) {
            $diff = $utolso_probalkozas->diff($most);

            if ($diff->h + ($diff->days * 24) >= 8) {
                $reset = "UPDATE t_user 
                          SET user_male = 0 
                          WHERE user_email = :email";
                $stmt = $conn->prepare($reset);
                $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                $stmt->execute();

                $user['user_male'] = 0;
            }
        }

        // 🔹 Minden próbálkozásnál frissítjük az utolsó próbálkozás idejét
        $updateUtolso = "UPDATE t_user SET user_reg_date = :most WHERE user_email = :email";
        $stmt = $conn->prepare($updateUtolso);
        $mostStr = $most->format('Y-m-d H:i:s');
        $stmt->bindParam(":most", $mostStr, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        // 🔹 Ha tiltva van
        if ($letiltas_lejarata && $most < $letiltas_lejarata) {
            $maradek = $letiltas_lejarata->getTimestamp() - $most->getTimestamp();
            $percek = ceil($maradek / 60);
            echo "<script>alert('A fiók zárolva van. Próbáld újra $percek perc múlva.');window.location='bejelentkezes.php';</script>";
            exit;
        }

        // -------------------------------------------------------------------
        // 🔥 LAZY HASHING — HASH-ELT ÉS NEM HASH-ELT JELSZÓK ELLENŐRZÉSE
        // -------------------------------------------------------------------

        // A jelszóoszlop a csinfo_fix.sql szerint `user_password`
        $storedPass = $user['user_password'];
        $loginSuccess = false;

        // 1️⃣ HASH-elt jelszó → password_verify
        if (strlen($storedPass) > 20 && str_starts_with($storedPass, '$2y$')) {
            if (password_verify($jelszo, $storedPass)) {
                $loginSuccess = true;
            }
        }

        // 2️⃣ NEM hash-elt jelszó → sima összehasonlítás
        elseif ($jelszo === $storedPass) {
            $loginSuccess = true;

            // 🔥 Automatikus hash-elés + adatbázis frissítés
            $ujHash = password_hash($jelszo, PASSWORD_BCRYPT);

            $update = "UPDATE t_user SET user_password = :uj WHERE user_email = :email";
            $stmt = $conn->prepare($update);
            $stmt->execute([
                ':uj' => $ujHash,
                ':email' => $email
            ]);
        }

        // -------------------------------------------------------------------
        // 🔹 SIKERES BELÉPÉS
        // -------------------------------------------------------------------
        if ($loginSuccess) {
            // Próbálkozások nullázása (végrehajtjuk az UPDATE-t)
            $update = "UPDATE t_user 
                       SET user_male = 0, user_active_date = NULL 
                       WHERE user_email = :email";
            $stmt = $conn->prepare($update);
            $stmt->execute([':email' => $email]);

            // Felhasználó nevének lekérése (oszlop: user_name)
            $sqlNev = "SELECT user_name FROM t_user WHERE user_email = :email";
            $stmtn = $conn->prepare($sqlNev);
            $stmtn->execute([':email' => $email]);
            $userdata = $stmtn->fetch();

            // --- session beállítása ---
            $_SESSION['user'] = $email;
            $_SESSION['nev']  = $userdata['user_name']; // MOSTANTÓL A FEJLÉC IS TUDJA A NEVET!

            header("Location: menupont.php");
            exit;
        }

        // -------------------------------------------------------------------
        // 🔹 Hibás jelszó esetén
        // -------------------------------------------------------------------

        $probalkozas = $user['user_male'] + 1;

        if ($probalkozas >= 3) {
            $lejart = (new DateTime())->add(new DateInterval('PT30M'));
            $lejart_str = $lejart->format('Y-m-d H:i:s');

            $update = "UPDATE t_user 
                       SET user_male = :probalkozas, 
                           user_active_date = :lejarat 
                       WHERE user_email = :email";
            $stmt = $conn->prepare($update);
            $stmt->bindParam(":probalkozas", $probalkozas, PDO::PARAM_INT);
            $stmt->bindParam(":lejarat", $lejart_str, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();

            echo "<script>alert('3 sikertelen próbálkozás miatt a fiók 30 percre letiltva.');window.location='bejelentkezes.php';</script>";
            exit;
        }

        // 🔹 Még maradt próbálkozás
        else {
            $update = "UPDATE t_user 
                       SET user_male = :probalkozas 
                       WHERE user_email = :email";
            $stmt = $conn->prepare($update);
            $stmt->bindParam(":probalkozas", $probalkozas, PDO::PARAM_INT);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();

            $maradek = 3 - $probalkozas;
            echo "<script>alert('Hibás jelszó! Hátralévő próbálkozás: $maradek.');window.location='bejelentkezes.php';</script>";
            exit;
        }
    }

    // 🔹 Ha nincs ilyen felhasználó
    else {
        echo "<script>alert('Nincs ilyen felhasználó!');window.location='bejelentkezes.php';</script>";
    }
}
