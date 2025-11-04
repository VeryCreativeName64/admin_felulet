<?php
include 'munkamenet.php';
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="cim">Cikkek</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="module" src="javascript/main.js"></script>
</head>

<body>
    <main>
        <header><img src="kepek/logo_csinfo_v6.gif" alt="csinfo logo"></header>
        <nav class="felso">
            <h4>Admin rendszer</h4>
            <h4>Csinfo.hu Admin</h4>
            <h4>Adminisztrátor</h4>
        </nav>
        <nav class="also">
            <a href="alapbeallitas.php" data-oldal="tartalom" style="background-color: rgb(127, 170, 255)">Tartalomkezelés</a>
            <a href="admin.php" data-oldal="adat">Adataim</a>
            <a href="#" data-oldal="kilep">Kilépés</a>
        </nav>
        <nav class="alsobb">
            <a href="alapbeallitas.php" data-oldal="tartalom">Alapbeállítások</a>
            <a href="menupont.php" data-oldal="menupont">Menüpontok</a>
            <a href="rovat.php" data-oldal="rovat">Rovatok</a>
            <a href="cikk.php" data-oldal="cikk" style="background-color: #666; color: whitesmoke; border-style: solid; border-color: #666;">Cikkek</a>
        </nav>
        <article>
            
        </article>
    </main>
</body>

</html>