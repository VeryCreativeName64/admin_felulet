<?php
session_start();
require_once("dbconnect.php");

if (!isset($_SESSION['user'])) {
    header("Location: bejelentkezes.php");
    exit;
}

if (isset($_POST['updateData'])) {
    $nev = trim($_POST['fname']);
    $email = trim($_POST['gname']);
    $regiEmail = isset($_SESSION['user']) ? $_SESSION['user'] : '';

    if ($nev === '' || $email === '') {
        echo "<script>alert('Minden mezőt ki kell tölteni!');history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Érvénytelen email formátum!');history.back();</script>";
        exit;
    }

    // (Ha lesz több user, itt lehetne ellenőrizni, hogy az email nem foglalt más által)

    try {
        $sql = "UPDATE t_user SET user_name = :nev, user_email = :email WHERE user_email = :regiEmail";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':nev' => $nev,
            ':email' => $email,
            ':regiEmail' => $regiEmail
        ]);

        // Ellenőrizzük, hogy ténylegesen módosult-e sor
        if ($stmt->rowCount() > 0) {
            // Frissítjük a session-ben is az emailt
            $_SESSION['user'] = $email;
            echo "<script>alert('Adatok sikeresen módosítva!');window.location='admin.php';</script>";
            exit;
        } else {
            // Nincs módosítás: valószínűleg nem található a régi email, vagy az adatok megegyeznek
            echo "<script>alert('Nincs módosítás: nem található a felhasználó, vagy az adatok megegyeznek.');history.back();</script>";
            exit;
        }
    } catch (PDOException $e) {
        echo "<script>alert('Adatbázis hiba történt. Kérlek próbáld újra később.');history.back();</script>";
        exit;
    }
}
echo "<script>alert('Érvénytelen kérés!');window.location='admin.php';</script>";
