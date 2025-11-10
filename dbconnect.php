<?php
// 🔹 Adatbázis kapcsolat beállításai
$host = 'localhost';        // vagy 127.0.0.1
$db   = 'csinfo';           // az adatbázis neve
$user = 'root';             // adatbázis felhasználó
$pass = '';                 // jelszó (ha van, írd be)
$charset = 'utf8mb4';

// 🔹 DSN (Data Source Name) felépítése
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// 🔹 PDO beállítások — biztonságos és hibamentes működéshez
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // dobjon kivételt hiba esetén
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,        // asszociatív tömböt adjon vissza
    PDO::ATTR_EMULATE_PREPARES   => false,                   // valós prepared statementeket használjon
];

try {
    $conn = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    // 🔹 Ha nem sikerül kapcsolódni, ne írjunk ki érzékeny adatokat
    error_log('Adatbázis kapcsolat hiba: ' . $e->getMessage());
    die('<h3 style="color:red;">Nem sikerült csatlakozni az adatbázishoz. Kérjük, próbáld újra később.</h3>');
}
?>
