<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="cim">Alapbeállítások</title>
    <link rel="stylesheet" href="style.css">
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
            <a href="alapbeallitas.php" style="background-color: rgb(127, 170, 255)">Tartalomkezelés</a>
            <a href="admin.php">Adataim</a>
            <a href="#">Kilépés</a>
        </nav>
        <nav class="alsobb">
            <a href="alapbeallitas.php" style="background-color: #666; color: whitesmoke; border-style: solid; border-color: #666;">Alapbeállítások</a>
            <a href="menupont.php">Menüpontok</a>
            <a href="rovat.php">Rovatok</a>
            <a href="cikk.php">Cikkek</a>
        </nav>
        <article>
            <div class="alap">
                <p>Itt adható meg a kereső optimalizálásához szükséges alapbeállítás. Minden menüpontban vagy cikkben lehetőség van egyedi beállítást is alkalmazni, de annak hiányában az itt megadottak lesznek érvényesek.</p>
                <table>
                    <tr>
                        <td class="bal"><label for="metaTitle">META TITLE tag:</label></td>
                        <td class="jobb"><textarea id="metaTitle" name="metaTitle" rows="5" cols="120"></textarea></td>
                    </tr>
                    <tr>
                        <td class="bal"><label for="metaDescription">META DESCRIPTION tag:</label></td>
                        <td class="jobb"><textarea id="metaDescription" name="metaDescription" rows="5" cols="120"></textarea></td>
                    </tr>
                    <tr>
                        <td class="bal"><label for="metaKeywords">META KEYWORDS tag:</label></td>
                        <td class="jobb"><textarea id="metaKeywords" name="metaKeywords" rows="5" cols="120"></textarea></td>
                    </tr>
                    <tr>
                        <td class="bal"><label for="googleAnalytic">Google Analytics Tracking:</label></td>
                        <td class="jobb"><textarea id="googleAnalytic" name="googleAnalytic" rows="5" cols="120"></textarea></td>
                    </tr>
                    <tr>
                        <td class="bal"><label for="googleWebmaster">Google Webmaster Tools Meta:</label></td>
                        <td class="jobb"><textarea id="googleWebmaster" name="googleWebmaster" rows="5" cols="120"></textarea></td>
                    </tr>
                    <tr>
                        <td class="bal"></td>
                        <td class="jobb"><button type="submit">Adatok módosítása</button></td>
                </table>
                
            </div>
        </article>

    </main>
</body>

</html>