<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="cim">Menüpont szerkesztése</title>
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
            <a href="alapbeallitas.php" style="background-color: rgb(127, 170, 255)">Tartalomkezelés</a>
            <a href="admin.php">Adataim</a>
            <a href="#">Kilépés</a>
        </nav>
        <nav class="alsobb">
            <a href="alapbeallitas.php">Alapbeállítások</a>
            <a href="menupont.php" style="background-color: #666; color: whitesmoke; border-style: solid; border-color: #666;">Menüpontok</a>
            <a href="rovat.php">Rovatok</a>
            <a href="cikk.php">Cikkek</a>
        </nav>
        <article>
            <div class="cikkadat">
                <h4>Virtualizáció</h4>
                <table>
                    <tbody>
                        <tr>
                            <td class="bal"><label for="site">Site:</label></td>
                            <td class="jobb"><select name="site" id="site">
                                    <option value="csinfo">csinfo.hu</option>
                                </select></td><br>
                        </tr>
                        <tr>
                            <td class="bal"><label for="pozicio">Pozíció:</label></td>
                            <td class="jobb"><select name="pozicio" id="pozicio">
                                    <option value="felso">Felső menü</option>
                                    <option value="legfelso">Legfelső menü</option>
                                    <option value="also">Alsó menü</option>
                                </select></td><br>
                        </tr>
                        <tr>
                            <td class="bal"><label for="fejleckep">Fejléc kép:</label></td>
                            <td class="jobb"><select name="fejleckep" id="fejleckep">
                                    <option value="bg_header_2v2.jpg">g_header_2v2.jpg</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="cimsor1">Címsor 1:</label></td>
                            <td class="jobb"><input type="text" id="cimsor1" name="cimsor1"></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="cimsor2">Címsor 2:</label></td>
                            <td class="jobb"><input type="text" id="cimsor2" name="cimsor2"></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="cime">Címe:</label></td>
                            <td class="jobb"><input type="text" id="cime" name="cime"></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="url">URL:</label></td>
                            <td class="jobb"><input type="text" id="url" name="url"></td>
                        </tr>
                        <tr>
                            <td class="bal"><label for="sorszama">Sorszáma:</label></td>
                            <td class="jobb"><input type="text" id="sorszama" name="sorszama"></td>
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
                            <td class="bal"><label for="rovat">Rovat:</label></td>
                            <td class="jobb"><select name="rovat" id="rovat">
                                    <option value="felso">Menü fő</option>
                                </select></td><br>
                        </tr>
                        <tr>
                            <td class="bal"><label for="cikkek">Cikk:</label></td>
                            <td class="jobb"><select name="cikkek" id="cikkek">
                                    <option value="felso">Virtualizáció</option>
                                </select></td><br>
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
                            <td class="bal">Adatok mentése vagy törlése:</td>
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