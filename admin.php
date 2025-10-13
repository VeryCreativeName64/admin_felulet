<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="cim">Adataim</title>
    <link rel="stylesheet" href="css/style.css">
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
            <a href="alapbeallitas.php">Tartalomkezelés</a>
            <a href="admin.php" style="background-color: rgb(127, 170, 255)">Adataim</a>
            <a href="#">Kilépés</a>
        </nav>
        <nav class="alsobb">
            <a href="alapbeallitas.php">Alapbeállítások</a>
            <a href="menupont.php">Menüpontok</a>
            <a href="rovat.php">Rovatok</a>
            <a href="cikk.php">Cikkek</a>
        </nav>
        <article>
            <div class="adat">
                <h4>Adatok módosítása</h4>
                <label for="fname">Név:</label>
                <input type="text" id="fname" name="fname">
                <label for="gname">Email:</label>
                <input type="text" id="gname" name="gname">
                <button type="submit">Adatok módosítása</button>
            </div>
            <div class="jelszo">
                <h4>Jelszó módosítása</h4>
                <label for="pname">Régi:</label>
                <input type="password" id="pname" name="pname">
                <label for="qname">Új:</label>
                <input type="password" id="qname" name="qname">
                <label for="rname">Új megint:</label>
                <input type="password" id="rname" name="rname">
                <button type="submit">Jelszó módosítása</button>
            </div>
        </article>
    </main>
</body>

</html>