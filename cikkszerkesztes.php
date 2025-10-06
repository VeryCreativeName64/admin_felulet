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
                <table>
                    <tbody>
                        <tr>
                            <td class="bal"><label for="site">Site:</label></td>
                            <td class="jobb"><select name="site" id="site">
                                    <option value="csinfo">csinfo.hu</option>
                                </select></td><br>
                        </tr>
                        <tr>
                            <td class="bal"><label for="reldate">Megjelenés dátuma:</label></td>
                            <td class="jobb"><input type="text" id="reldate" name="reldate"></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="rowat">Rovat:</label></td>
                            <td class="jobb"><select name="rovat" id="rowat">
                                    <option value="eng desktop">Eng desktop virt</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="erveny">érvényesség:</label></td>
                            <td class="jobb"><select name="érvényesség" id="erveny">
                                    <option value="eng desktop">A cikk paszív.</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="cim">Cím:</label></td>
                            <td class="jobb"><input type="text" id="cim" name="cim"></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="fajlurl">fájl/url:</label></td>
                            <td class="jobb"><input type="text" id="fajlurl" name="fajlurl"></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="lang">Nyelv:</label></td>
                            <td class="jobb"><select name="lang" id="lang">
                                    <option value="hun">HUN</option>
                                    <option value="eng">ENG</option>
                                    <option value="ger">GER</option>
                                    <option value="fra">FRA</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="tovabbiszoveg">"tovább" szöveg:</label></td>
                            <td class="jobb"><input type="text" id="tovabbiszoveg" name="tovabbiszoveg"></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="elozetes">Előzetes:</label></td>
                            <td class="jobb">Placeholder</td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="tartalom">Tartalom:</label></td>
                            <td class="jobb">Placeholder</td>
                        </tr>
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
                            <td class="bal">Adatok mentése vagy törlése</td>
                            <td class="jobb"><button type="submit">Cikk módosítása</button>
                                <button type="submit">Cikk lemásolása</button>
                                <button type="submit">Cikk törlése</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </article>
    </main>
</body>

</html>