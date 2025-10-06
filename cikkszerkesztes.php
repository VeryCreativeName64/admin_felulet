<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="cim">Cikk szerkesztése</title>
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
            <div class="cikkadat">
                <h4>VMWARE 9 szoftverek</h4>
                    <label for="site">Site:</label>
                    <select name="site" id="site">
                        <option value="csinfo">csinfo.hu</option>
                    </select>
                <br>
            
                <label for="reldate">Megjelenés dátuma:</label>
                <input type="text" id="reldate" name="reldate"><br>
                <label for="rowat">Rovat:</label>
                <select name="rovat" id="rowat">
                    <option value="eng desktop">Eng desktop virt</option>
                </select><br>
                <label for="erveny">érvényesség:</label>
                <select name="érvényesség" id="erveny">
                    <option value="eng desktop">A cikk paszív.</option>
                </select><br>
                <label for="cim">Cím:</label>
                <input type="text" id="cim" name="cim"><br>
                <label for="fajlurl">fájl/url:</label>
                <input type="text" id="fajlurl" name="fajlurl"><br>
                <label for="lang">Nyelv:</label>
                <select name="lang" id="lang">
                    <option value="hun">HUN</option>
                    <option value="eng">ENG</option>
                    <option value="ger">GER</option>
                    <option value="fra">FRA</option>
                </select><br>
                <label for="tovabbiszoveg">"tovább" szöveg:</label>
                <input type="text" id="tovabbiszoveg" name="tovabbiszoveg"><br>
                <label for="elozetes">Előzetes:</label><br>
                <label for="tartalom">Tartalom:</label><br>
                <div class="sor">
                    <label for="metaTitle">META TITLE tag:</label>
                    <textarea id="metaTitle" name="metaTitle" rows="3" cols="50"></textarea>
                </div><br>
                <div class="sor">
                    <label for="metaDescription">META DESCRIPTION tag:</label>
                    <textarea id="metaDescription" name="metaDescription" rows="3" cols="50"></textarea>
                </div><br>
                <div class="sor">
                    <label for="metaKeywords">META KEYWORDS tag:</label>
                    <textarea id="metaKeywords" name="metaKeywords" rows="3" cols="50"></textarea>
                </div><br>
            </div>
        </article>
    </main>
</body>

</html>