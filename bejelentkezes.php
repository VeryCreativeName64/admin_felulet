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

        <article>
            <div class="adat">
                <h4>Bejelentkezés</h4>
                <form name="form" action="login.php" method="POST">
                    <label for="user">Email:</label>
                    <input type="text" id="user" name="user">
                    <label for="pass">Jelszó:</label>
                    <input type="password" id="pass" name="pass">
                    <div class="pipa">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Emlékezz rám</label>
                    </div>
                    <button type="submit" name="submit" value="Login">Bejelentkezés</button>
                </form>
            </div>
        </article>
    </main>
</body>
</html>
