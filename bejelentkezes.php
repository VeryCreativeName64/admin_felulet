<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="cim">Bejelentkezés</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="module" src="javascript/main.js"></script>
</head>
<script>
// --- Amikor betölt az oldal, próbáljuk visszatölteni a mentett emailt ---
window.addEventListener('DOMContentLoaded', () => {
    const userInput = document.getElementById('user');
    const rememberCheckbox = document.getElementById('remember');

    // ha van mentett email, beírjuk és bepipáljuk
    const savedEmail = localStorage.getItem('rememberedEmail');
    if (savedEmail) {
        userInput.value = savedEmail;
        rememberCheckbox.checked = true;
    }

    // --- Bejelentkezéskor ---
    document.querySelector('form').addEventListener('submit', () => {
        if (rememberCheckbox.checked) {
            localStorage.setItem('rememberedEmail', userInput.value);
        } else {
            localStorage.removeItem('rememberedEmail');
        }
    });
});
</script>

<body>
    <main>
        <header><img src="kepek/logo_csinfo_v6.gif" alt="csinfo logo"></header>
        <nav class="felso">
            <h4>Admin rendszer</h4>
            <h4>Csinfo.hu Admin</h4>
            <h4>Adminisztrátor</h4>
        </nav>
        <article>

        </article>
    </main>
</body>
</html>
