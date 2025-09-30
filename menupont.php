<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="cim">Menüpontok</title>
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
            <div class="mpont">
                <label for="lang">Nyelv:</label>
                <select name="lang" id="lang">
                    <option value="hun">HUN</option>
                    <option value="eng">ENG</option>
                    <option value="ger">GER</option>
                    <option value="fra">FRA</option>
                </select>
                <button id="nyelv" type="submit">Nyelv beállítása</button>
                <p><a href="#">Új a gyökérbe</a></p>

                <div class="fmenu">
                    <div class="fmenu">
                        <h4>Felső menü</h4>
                        <ul class="menu">
                            <li>
                                <input type="checkbox" id="item1" class="toggle">
                                <label for="item1" class="toggle-label"></label>
                                <span class="title">Megoldások</span>
                                <span class="icons">
                                    <button title="Új">➕</button>
                                    <button title="Szerkeszt">✏️</button>
                                    <button title="Töröl">✖️</button>
                                </span>
                                <ul class="children">
                                    <li>
                                        <span class="title">LENOVO Flex technológia</span>
                                        <span class="icons">
                                            <button title="Új">➕</button>
                                            <button title="Szerkeszt">✏️</button>
                                            <button title="Töröl">✖️</button>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="title">IBM FlashSystem Cyber Vault</span>
                                        <span class="icons">
                                            <button title="Új">➕</button>
                                            <button title="Szerkeszt">✏️</button>
                                            <button title="Töröl">✖️</button>
                                        </span>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <input type="checkbox" id="item2" class="toggle">
                                <label for="item2" class="toggle-label"></label>
                                <span class="title">Szolgáltatások</span>
                                <span class="icons">
                                    <button title="Új">➕</button>
                                    <button title="Szerkeszt">✏️</button>
                                    <button title="Töröl">✖️</button>
                                </span>
                                <ul class="children">
                                    <li>
                                        <span class="title">IT infrastruktúra tervezés</span>
                                        <span class="icons">
                                            <button title="Új">➕</button>
                                            <button title="Szerkeszt">✏️</button>
                                            <button title="Töröl">✖️</button>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="title">IT tanácsadás</span>
                                        <span class="icons">
                                            <button title="Új">➕</button>
                                            <button title="Szerkeszt">✏️</button>
                                            <button title="Töröl">✖️</button>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="title">Oktatás</span>
                                        <span class="icons">
                                            <button title="Új">➕</button>
                                            <button title="Szerkeszt">✏️</button>
                                            <button title="Töröl">✖️</button>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                            <p id="a">Felső menüszerkezet lemásolása másik nyelvre</p>
                            <p>
                                Ezt a teljes menüszerkezetet lemásolhatod egy másik nyelvre. Utána természetesen az egyes pontokat át kell
                                írni az adott nyelvnek megfelelően, bővítheted vagy törölhetsz belőle menüket.
                                Ha "Cikkeket is másol" kapcsolót bejelölöd, akkor nem csak a menüszerkezetet, hanem az azokhoz rendelt összes
                                cikk is lemásolódik a cél nyelvre, azonos tartalommal, így utána azokat is módosítanod kell.
                            </p>
                            <select title="amenu" id="amenu">
                                <option value="amenu">--- Válassz célnyelvet! ---</option>
                            </select>
                            <label for="chamenu"> Cikkeket is másol</label>
                            <input type="checkbox" id="chamenu" name="chamenu" value="Cikkek">
                            <button id="meenu" type="submit">Menü struktúra másolása</button>
                    </div>
                    <h4>Legfelső menü</h4>
                    <div class="lfmenu">
                        <p id="b">Legfelső menüszerkezet lemásolása másik nyelvre</p>
                        <p>
                            Ezt a teljes menüszerkezetet lemásolhatod egy másik nyelvre. Utána természetesen az egyes pontokat át kell
                            írni az adott nyelvnek megfelelően, bővítheted vagy törölhetsz belőle menüket.
                            Ha "Cikkeket is másol" kapcsolót bejelölöd, akkor nem csak a menüszerkezetet, hanem az azokhoz rendelt összes
                            cikk is lemásolódik a cél nyelvre, azonos tartalommal, így utána azokat is módosítanod kell.
                        </p>
                        <select title="bmenu" id="bmenu">
                            <option value="bmenu">--- Válassz célnyelvet ---</option>
                        </select>
                        <label for="chamenu2"> Cikkeket is másol</label>
                        <input type="checkbox" id="chamenu2" name="chamenu2" value="Cikkek">
                        <button id="struktura" type="submit">Menü struktúra másolása</button>
                    </div>
                    <h4>Alsó menü</h4>
                    <div class="almenu">
                        <p id="c">Alsó menüszerkezet lemásolása másik nyelvre</p>
                        <p>
                            Ezt a teljes menüszerkezetet lemásolhatod egy másik nyelvre. Utána természetesen az egyes pontokat át kell
                            írni az adott nyelvnek megfelelően, bővítheted vagy törölhetsz belőle menüket.
                            Ha "Cikkeket is másol" kapcsolót bejelölöd, akkor nem csak a menüszerkezetet, hanem az azokhoz rendelt összes
                            cikk is lemásolódik a cél nyelvre, azonos tartalommal, így utána azokat is módosítanod kell.
                        </p>
                        <select title="cmenu" id="cmenu">
                            <option value="cmenu">--- Válassz célnyelvet ---</option>
                        </select>
                        <label for="chamenu3"> Cikkeket is másol</label>
                        <input type="checkbox" id="chamenu3" name="chamenu3" value="Cikkek">
                        <button id="masolasa" type="submit">Menü struktúra másolása</button>
                    </div>
                </div>
        </article>
    </main>
</body>

</html>