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
    $regiEmail = $_SESSION['user'];

    if ($nev === '' || $email === '') {
        echo "<script>alert('Minden mezőt ki kell tölteni!');history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Érvénytelen email formátum!');history.back();</script>";
        exit;
    }

    // (Ha lesz több user, itt lehetne ellenőrizni, hogy az email nem foglalt más által)

    $sql = "UPDATE bejelentkezes SET nev = :nev, email = :email WHERE email = :regiEmail";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':nev' => $nev,
        ':email' => $email,
        ':regiEmail' => $regiEmail
    ]);

    // Frissítjük a session-ben is az emailt
    $_SESSION['user'] = $email;

    echo "<script>alert('Adatok sikeresen módosítva!');window.location='admin.php';</script>";
    exit;
}
echo "<script>alert('Érvénytelen kérés!');window.location='admin.php';</script>";
