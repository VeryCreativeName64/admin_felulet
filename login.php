<?php
session_start();
require_once("dbconnect.php");

// 🔹 SEGÉDFÜGGVÉNY: jelszó hashelése (ha később új jelszót hozol létre)
function hashPassword($plainPassword) {
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
    $sql = "SELECT * FROM bejelentkezes WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {

        $most = new DateTime();
        $letiltas_lejarata = $user['letiltas_lejarata'] ? new DateTime($user['letiltas_lejarata']) : null;
        $utolso_probalkozas = $user['utolso_probalkozas'] ? new DateTime($user['utolso_probalkozas']) : null;

        // 🔹 8 órás inaktivitás utáni automatikus reset
        if ($utolso_probalkozas) {
            $diff = $utolso_probalkozas->diff($most);

            // Ha 8 óránál több telt el, nullázzuk a próbálkozásokat
            if ($diff->h + ($diff->days * 24) >= 8) {
                $reset = "UPDATE bejelentkezes 
                          SET sikertelen_probalkozasok = 0 
                          WHERE email = :email";
                $stmt = $conn->prepare($reset);
                $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                $stmt->execute();

                // Memóriában is nullázni kell
                $user['sikertelen_probalkozasok'] = 0;
            }
        }

        // 🔹 Minden próbálkozásnál frissítjük az utolsó próbálkozás idejét
        $updateUtolso = "UPDATE bejelentkezes SET utolso_probalkozas = :most WHERE email = :email";
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

        // 🔹 Jelszó ellenőrzése
        if (password_verify($jelszo, $user['jelszo'])) {

            // Siker → nullázzuk a rossz próbálkozásokat
            $update = "UPDATE bejelentkezes 
                       SET sikertelen_probalkozasok = 0, letiltas_lejarata = NULL 
                       WHERE email = :email";
            $stmt = $conn->prepare($update);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();

            // Session indítás
            $_SESSION['user'] = $email;
            header("Location: menupont.php");
            exit;
        }

        // 🔹 Hibás jelszó
        else {
            $probalkozas = $user['sikertelen_probalkozasok'] + 1;

            // Ha eléri a 3-at → tiltás 30 percre
            if ($probalkozas >= 3) {
                $lejart = (new DateTime())->add(new DateInterval('PT30M'));
                $lejart_str = $lejart->format('Y-m-d H:i:s');

                $update = "UPDATE bejelentkezes 
                           SET sikertelen_probalkozasok = :probalkozas, 
                               letiltas_lejarata = :lejarat 
                           WHERE email = :email";
                $stmt = $conn->prepare($update);
                $stmt->bindParam(":probalkozas", $probalkozas, PDO::PARAM_INT);
                $stmt->bindParam(":lejarat", $lejart_str, PDO::PARAM_STR);
                $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                $stmt->execute();

                echo "<script>alert('3 sikertelen próbálkozás miatt a fiók 30 percre letiltva.');window.location='bejelentkezes.php';</script>";
                exit;
            }

            // Ha még nem érte el a 3-at
            else {
                $update = "UPDATE bejelentkezes 
                           SET sikertelen_probalkozasok = :probalkozas 
                           WHERE email = :email";
                $stmt = $conn->prepare($update);
                $stmt->bindParam(":probalkozas", $probalkozas, PDO::PARAM_INT);
                $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                $stmt->execute();

                $maradek = 3 - $probalkozas;
                echo "<script>alert('Hibás jelszó! Hátralévő próbálkozás: $maradek.');window.location='bejelentkezes.php';</script>";
                exit;
            }
        }
    }

    // 🔹 Ha nincs ilyen felhasználó
    else {
        echo "<script>alert('Nincs ilyen felhasználó!');window.location='bejelentkezes.php';</script>";
    }
}
?>
