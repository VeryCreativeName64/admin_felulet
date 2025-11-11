<?php
session_start();
require_once("dbconnect.php");

if (isset($_POST['submit'])) {
    $email = trim($_POST['user']);
    $jelszo = trim($_POST['pass']);

    if (empty($email) || empty($jelszo)) {
        echo "<script>alert('Kérlek, töltsd ki az összes mezőt!');window.location='bejelentkezes.php';</script>";
        exit;
    }

    // 🔹 Ellenőrizzük, hogy létezik-e a felhasználó
    $sql = "SELECT * FROM bejelentkezes WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        $most = new DateTime();
        $letiltas_lejarata = $user['letiltas_lejarata'] ? new DateTime($user['letiltas_lejarata']) : null;

        // 🔹 Ellenőrzés: fel van-e függesztve
        if ($letiltas_lejarata && $most < $letiltas_lejarata) {
            $maradek = $letiltas_lejarata->getTimestamp() - $most->getTimestamp();
            $percek = ceil($maradek / 60);
            echo "<script>alert('A fiók ideiglenesen le van tiltva. Próbáld újra $percek perc múlva.');window.location='bejelentkezes.php';</script>";
            exit;
        }

        // 🔹 Jelszó ellenőrzése
        if (password_verify($jelszo, $user['jelszo'])) {
            // Sikeres bejelentkezés → próbálkozások nullázása
            $update = "UPDATE bejelentkezes 
                       SET sikertelen_probalkozasok = 0, letiltas_lejarata = NULL 
                       WHERE email = :email";
            $stmt = $conn->prepare($update);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();

            $_SESSION['user'] = $email;
            header("Location: admin.php");
            exit;
        } else {
            // 🔹 Sikertelen bejelentkezés
            $probalkozas = $user['sikertelen_probalkozasok'] + 1;

            if ($probalkozas >= 3) {
                // 3. sikertelen próbálkozás után: 30 perc tiltás
                $lejart = (new DateTime())->add(new DateInterval('PT30M'));
                $lejart_str = $lejart->format('Y-m-d H:i:s');

                $update = "UPDATE bejelentkezes 
                           SET sikertelen_probalkozasok = :probalkozas, letiltas_lejarata = :lejarat 
                           WHERE email = :email";
                $stmt = $conn->prepare($update);
                $stmt->bindParam(":probalkozas", $probalkozas, PDO::PARAM_INT);
                $stmt->bindParam(":lejarat", $lejart_str, PDO::PARAM_STR);
                $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                $stmt->execute();

                echo "<script>alert('3 sikertelen próbálkozás után a fiók 30 percre letiltásra került.');window.location='bejelentkezes.php';</script>";
                exit;
            } else {
                // 🔹 Még maradt próbálkozás → csak frissítjük a számlálót
                $update = "UPDATE bejelentkezes 
                           SET sikertelen_probalkozasok = :probalkozas 
                           WHERE email = :email";
                $stmt = $conn->prepare($update);
                $stmt->bindParam(":probalkozas", $probalkozas, PDO::PARAM_INT);
                $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                $stmt->execute();

                $maradek = 3 - $probalkozas;
                echo "<script>alert('Hibás jelszó! Még $maradek próbálkozásod maradt.');window.location='bejelentkezes.php';</script>";
                exit;
            }
        }
    } else {
        echo "<script>alert('Nincs ilyen e-mail cím az adatbázisban!');window.location='bejelentkezes.php';</script>";
    }
}
?>
