<?php
// 🔹 Session indítása 15 perces cookie élettartammal
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 900, // 15 perc
        'path' => '/',
        'domain' => '',
        'secure' => isset($_SERVER['HTTPS']),
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
    session_start();
}

include 'dbconnect.php';

// 🔹 Ha már be van jelentkezve
if (isset($_SESSION['use'])) {
    header('Location: admin.php');
    exit;
}

// 🔹 Bejelentkezés feldolgozása
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['user'] ?? '';
    $password = $_POST['pass'] ?? '';

    $stmt = $conn->prepare('SELECT * FROM bejelentkezes WHERE email = :email');
    $stmt->execute([':email' => $username]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $stored = $row['jelszo'];
        $passwordMatches = false;

        // 🔹 Ha hash-elt jelszó
        if (password_get_info($stored)['algo']) {
            $passwordMatches = password_verify($password, $stored);
        } else {
            // 🔹 Régi plain-text jelszó
            if ($password === $stored) {
                $passwordMatches = true;
                $newHash = password_hash($password, PASSWORD_BCRYPT);
                $update = $conn->prepare('UPDATE bejelentkezes SET jelszo = :jelszo WHERE email = :email');
                $update->execute([':jelszo' => $newHash, ':email' => $username]);
            }
        }

        if ($passwordMatches) {
            $_SESSION['use'] = $username;
            $_SESSION['last_activity'] = time(); // utolsó aktivitás ideje
            header('Location: admin.php');
            exit;
        }
    }

    echo '<script>alert("Hibás email vagy jelszó"); window.location.href = "index.php";</script>';
    exit;
}
?>
