<?php
session_start();
session_unset();   // törli az összes session változót
session_destroy(); // megszünteti a sessiont
header('Location: bejelentkezes.php'); // vissza a login oldalra
exit;
?>