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
            <a href="#">Tartalomkezelés</a>
            <a href="#">Adataim</a>
            <a href="#">Kilépés</a>
        </nav>
        <nav class="alsobb">
            <a href="#">Alapbeállítások</a>
            <a href="#">Menüpontok</a>
            <a href="#">Rovatok</a>
            <a href="#">Cikkek</a>
        </nav>
        <article>
            <div class="adat">
                <p>Itt adható meg a kereső optimalizálásához szükséges alapbeállítás. Minden menüpontban vagy cikkben lehetőség van egyedi beállítást is alkalmazni, de annak hiányában az itt megadottak lesznek érvényesek.</p>
                <div class="sor">
                    <label for="metaTitle">META TITLE tag:</label>
                    <textarea id="metaTitle" name="metaTitle" rows="3" cols="50"></textarea>
                </div>
                <div class="sor">
                    <label for="metaDescription">META DESCRIPTION tag:</label>
                    <textarea id="metaDescription" name="metaDescription" rows="3" cols="50"></textarea>
                </div>
                <div class="sor">
                    <label for="metaKeywords">META KEYWORDS tag:</label>
                    <textarea id="metaKeywords" name="metaKeywords" rows="3" cols="50"></textarea>
                </div>
                <div class="sor">
                    <label for="gaTracking">Google Analytics Tracking:</label>
                    <textarea id="gaTracking" name="gaTracking" rows="3" cols="50"></textarea>
                </div>
                <div class="sor">
                    <label for="gwtMeta">Google Webmaster Tools Meta:</label>
                    <textarea id="gwtMeta" name="gwtMeta" rows="3" cols="50"></textarea>
                </div>

                <button type="submit">Adatok módosítása</button>
            </div>
        </article>

    </main>
</body>

</html>