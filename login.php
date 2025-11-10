<?php
// Session indítása 15 perces cookie-élettartammal
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 900, // 15 perc
        'path'     => '/',
        'domain'   => '',
        'secure'   => isset($_SERVER['HTTPS']),
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
    session_start();
}

include 'dbconnect.php';  // feltételezzük, hogy $conn a PDO kapcsolat

// Ha már be van jelentkezve, átirányítunk
if (isset($_SESSION['use'])) {
    header('Location: admin.php');
    exit;
}

// Bejelentkezés feldolgozása
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['user'] ?? '');
    $password = trim($_POST['pass'] ?? '');

    if ($username === '' || $password === '') {
        echo "<script>alert('Kérlek add meg az emailt és jelszót.'); window.location.href='index.php';</script>";
        exit;
    }

    // Felhasználó lekérdezése
    $stmt = $conn->prepare('SELECT id, jelszo, sikertelen_probalkozasok, letiltas_lejarata FROM bejelentkezes WHERE email = :email');
    $stmt->execute([':email' => $username]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        // nincs ilyen felhasználó
        echo "<script>alert('Hibás email vagy jelszó.'); window.location.href='index.php';</script>";
        exit;
    }

    // DEBUG log — fejlesztés alatt lehet bekapcsolni
    error_log("Login attempt for email={$username}, sikertelen_probalkozasok={$row['sikertelen_probalkozasok']}, letiltas_lejarata={$row['letiltas_lejarata']}");

    // Tiltás ellenőrzése
    if (!is_null($row['letiltas_lejarata']) && $row['letiltas_lejarata'] !== '') {
        try {
            $now      = new DateTime();
            $banUntil = new DateTime($row['letiltas_lejarata']);

            if ($banUntil > $now) {
                $remaining = $banUntil->diff($now);
                $perc      = $remaining->i + ($remaining->h * 60);
                echo "<script>alert('A fiók zárolva van még {$perc} percig.'); window.location.href='index.php';</script>";
                exit;
            } else {
                // Blokkolás lejárt — visszaállítjuk mezőket
                $clearBan = $conn->prepare("UPDATE bejelentkezes SET letiltas_lejarata = NULL, sikertelen_probalkozasok = 0 WHERE id = :id");
                $clearBan->execute([':id' => $row['id']]);
                $row['sikertelen_probalkozasok'] = 0;
                // folytatjuk
            }
        } catch (Exception $e) {
            // Ha hibás dátum formátum vagy más gond — logoljuk és folytatjuk
            error_log("Error parsing letiltas_lejarata for user id={$row['id']}: " . $e->getMessage());
        }
    }

    // Jelszó ellenőrzése
    $stored = $row['jelszo'];
    $passwordMatches = false;

    // Feltételezzük, hogy hash-elt jelszóval dolgozunk
    if (password_get_info($stored)['algo']) {
        $passwordMatches = password_verify($password, $stored);
    } elseif ($password === $stored) {
        // Régi, nem hash-elt jelszó — frissítjük
        $passwordMatches = true;
        $newHash = password_hash($password, PASSWORD_BCRYPT);
        $update  = $conn->prepare('UPDATE bejelentkezes SET jelszo = :jelszo WHERE id = :id');
        $update->execute([':jelszo' => $newHash, ':id' => $row['id']]);
    }

    if ($passwordMatches) {
        // Sikeres belépés: visszaállítjuk a próbálkozásokat és a blokkot
        $reset = $conn->prepare('UPDATE bejelentkezes SET sikertelen_probalkozasok = 0, letiltas_lejarata = NULL WHERE id = :id');
        $reset->execute([':id' => $row['id']]);

        $_SESSION['use']           = $username;
        $_SESSION['last_activity'] = time();

        header('Location: admin.php');
        exit;
    } else {
        // Hibás jelszó – növeljük a próbálkozások számát
        $newCount = (int)$row['sikertelen_probalkozasok'] + 1;

        // DEBUG log
        error_log("Wrong password for user id={$row['id']}. NewCount={$newCount}");

        if ($newCount >= 3) {
            // Elérte a limitet: zároljuk 30 percre
            $banUntil = (new DateTime())->modify('+30 minutes')->format('Y-m-d H:i:s');
            $update   = $conn->prepare('UPDATE bejelentkezes SET sikertelen_probalkozasok = 0, letiltas_lejarata = :ban WHERE id = :id');
            $update->execute([':ban' => $banUntil, ':id' => $row['id']]);

            echo "<script>alert('Túl sok sikertelen próbálkozás. A fiók 30 percre zárolva!'); window.location.href='index.php';</script>";
            exit;
        } else {
            // Még nem érte el a limitet – csak növeljük
            $update = $conn->prepare('UPDATE bejelentkezes SET sikertelen_probalkozasok = :count WHERE id = :id');
            $update->execute([':count' => $newCount, ':id' => $row['id']]);

            echo "<script>alert('Hibás jelszó! ({$newCount}/3 próbálkozás)'); window.location.href='index.php';</script>";
            exit;
        }
    }
}
?>
