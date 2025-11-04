<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 🔹 12 óra inaktivitás után timeout
$max_inactive_time = 12 * 60 * 60; // 12 óra

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $max_inactive_time)) {
    session_unset();
    session_destroy();
    header('Location: index.php?timeout=1');
    exit;
}

// 🔹 Frissítjük az utolsó aktivitási időt
$_SESSION['last_activity'] = time();

// 🔹 Ha nincs bejelentkezve
if (!isset($_SESSION['use'])) {
    header('Location: bejelentkezes.php');
    exit;
}
?>