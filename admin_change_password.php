<?php
session_start();
require_once("dbconnect.php");

if (!isset($_SESSION['user'])) {
    header("Location: bejelentkezes.php");
    exit;
}

function isStrongPassword($password) {
    if (strlen($password) < 8) return false;
    if (!preg_match('/[a-z]/', $password)) return false;
    if (!preg_match('/[A-Z]/', $password)) return false;
    if (!preg_match('/[0-9]/', $password)) return false;
    if (!preg_match('/[^A-Za-z0-9]/', $password)) return false;
    return true;
}

if (isset($_POST['changePass'])) {
    $old = $_POST['oldpass'] ?? '';
    $new1 = $_POST['newpass'] ?? '';
    $new2 = $_POST['newpass2'] ?? '';
    $email = $_SESSION['user'];

    if ($old === '' || $new1 === '' || $new2 === '') {
        echo "<script>alert('Minden mezőt ki kell tölteni!');history.back();</script>";
        exit;
    }

    if ($new1 !== $new2) {
        echo "<script>alert('Az új jelszavak nem egyeznek!');history.back();</script>";
        exit;
    }

    if (!isStrongPassword($new1)) {
        echo "<script>alert('Az új jelszó nem elég erős! Legalább 8 karakter, kis- és nagybetű, szám és speciális karakter szükséges.');history.back();</script>";
        exit;
    }

    // Jelenlegi jelszó lekérdezése
    $sql = "SELECT jelszo FROM bejelentkezes WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':email' => $email]);
    $row = $stmt->fetch();

    if (!$row || !password_verify($old, $row['jelszo'])) {
        echo "<script>alert('A régi jelszó hibás!');history.back();</script>";
        exit;
    }

    // Új jelszó hashelése
    $ujHash = password_hash($new1, PASSWORD_BCRYPT);

    $update = "UPDATE bejelentkezes SET jelszo = :uj WHERE email = :email";
    $stmt = $conn->prepare($update);
    $stmt->execute([
        ':uj' => $ujHash,
        ':email' => $email
    ]);

    echo "<script>alert('Jelszó sikeresen módosítva!');window.location='admin.php';</script>";
    exit;
}

echo "<script>alert('Érvénytelen kérés!');window.location='admin.php';</script>";
