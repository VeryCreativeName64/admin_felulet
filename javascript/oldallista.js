export const oldallista = [
  {
    oldal_htmlje: `<div class="adat">
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
            </div>`,
  },
  {
    oldal_htmlje: `
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
                
            </div>`,
  },
  {
    oldal_htmlje: `<div class="szuro">

                <h4>Cikkek</h4>
                <p>Válaszd ki milyen nyelvű cikkek jelenjenek meg a listában.</p>
                <label for="lang">Nyelv:</label>
                <select name="lang" id="lang">
                    <option value="hun">HUN</option>
                    <option value="eng">ENG</option>
                    <option value="ger">GER</option>
                    <option value="fra">FRA</option>
                </select>
                <button id="nyelv" type="submit">Nyelv kiválasztása</button>
                <p>További szűréseket állíthatsz be egy rovat vagy cím szerint.</p>
                <label for="rovat">Rovat:</label>
                <select name="rovat" id="rovat">
                    <option value="mrovat">--- Minden rovat ---</option>
                </select>
                <label for="cimr">Cím(részlet):</label>
                <input type="text" id="cimr" name="cimr">
                <button id="szures" type="submit">Szűrés</button>
                <button id="szuresdel" type="submit">Szűrés törlése</button>
                <p><a href="cikkszerkesztes.php">új cikk</a></p>
            </div>
            <table>
                <tr class="cikkek">
                    <th>Létrehozó</th>
                    <th>Dátum</th>
                    <th>Nyelv</th>
                    <th>Rovat</th>
                    <th>Cím</th>
                </tr>
                <tr class="cikkek">
                    <td>CSINFO.HU Admin</td>
                    <td>2025.08.14 11:14</td>
                    <td>HUN</td>
                    <td>ENG desktop virt</td>
                    <td><a id="tablink1" href="#">VMware 9 szoftverek</a></td>
                </tr>
                <tr class="cikkek">
                    <td>CSINFO.HU Admin</td>
                    <td>2025.08.12 08:31</td>
                    <td>HUN</td>
                    <td>box2</td>
                    <td><a id="tablink2" href="#">A vSphere 7 általános támogatása megszűnik</a></td>
                </tr>
            </table>`,
  },
  {
    oldal_htmlje: `<div class="cikkadat">
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
                            <td class="bal">Adatok mentése vagy törlése:</td>
                            <td class="jobb"><button type="submit">Cikk módosítása</button>
                                <button type="submit">Cikk lemásolása</button>
                                <button type="submit">Cikk törlése</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>`,
  },
  {
    oldal_htmlje: `<div class="mpont">
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
                    <h4>Felső menü</h4>
                    <ul class="menu">
                        <li>
                            <input type="checkbox" id="item1" class="toggle">
                            <label for="item1" class="toggle-label"></label>
                            <span class="title">Megoldások</span>
                            <span class="icons">
                                <button title="Új"><a href="menuszerkeszt.php">➕</a></button>
                                <button title="Szerkeszt"><a href="menuszerkeszt.php">✏️</a></button>
                                <button title="Töröl">✖️</button>
                            </span>
                            <ul class="children">
                                <li>
                                    <span class="title">LENOVO Flex technológia</span>
                                    <span class="icons">
                                        <button title="Új"><a href="menuszerkeszt.php">➕</a></button>
                                        <button title="Szerkeszt"><a href="menuszerkeszt.php">✏️</a></button>
                                        <button title="Töröl">✖️</button>
                                    </span>
                                </li>
                                <li>
                                    <span class="title">IBM FlashSystem Cyber Vault</span>
                                    <span class="icons">
                                        <button title="Új"><a href="menuszerkeszt.php">➕</a></button>
                                        <button title="Szerkeszt"><a href="menuszerkeszt.php">✏️</a></button>
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
                                <button title="Új"><a href="menuszerkeszt.php">➕</a></button>
                                <button title="Szerkeszt"><a href="menuszerkeszt.php">✏️</a></button>
                                <button title="Töröl">✖️</button>
                            </span>
                            <ul class="children">
                                <li>
                                    <span class="title">IT infrastruktúra tervezés</span>
                                    <span class="icons">
                                        <button title="Új"><a href="menuszerkeszt.php">➕</a></button>
                                        <button title="Szerkeszt"><a href="menuszerkeszt.php">✏️</a></button>
                                        <button title="Töröl">✖️</button>
                                    </span>
                                </li>
                                <li>
                                    <span class="title">IT tanácsadás</span>
                                    <span class="icons">
                                        <button title="Új"><a href="menuszerkeszt.php">➕</a></button>
                                        <button title="Szerkeszt"><a href="menuszerkeszt.php">✏️</a></button>
                                        <button title="Töröl">✖️</button>
                                    </span>
                                </li>
                                <li>
                                    <span class="title">Oktatás</span>
                                    <span class="icons">
                                        <button title="Új">➕</button>
                                        <button title="Szerkeszt"><a href="menuszerkeszt.php">✏️</a></button>
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
                </div>`,
  },
  {
    oldal_htmlje: `<div class="cikkadat">
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
            </div>`,
  },
  {
    oldal_htmlje: `<div class="adat">
                <h4>Új rovat létrehozása</h4>
                <label for="cime">Címe:</label>
                <input type="text" id="fname" name="fname">
                <label for="leiras">Leírás:</label>
                <textarea id="leiras" name="leiras" rows="3" cols="50"></textarea>
                <button type="submit">Rovat mentése</button>
            </div>
            <div class="rovat">
                <h4>Rovat lista</h4>
                <label for="ev">Év:</label>
                <select name="ev" id="ev">
                    <option value="2025">2025</option>
                </select>
                <label for="ho">Hó:</label>
                <select name="ho" id="ho">
                    <option value="12">12</option>
                </select>
                <label for="cimreszlet">...vagy... Cím(részlet):</label>
                <input type="text" id="cimreszlet" name="cimreszlet">
                <button type="submit">Szűkítés</button>
                <p>2025-07-28 <a href="#">Termékek_vmware7.0</a> <button type="submit">Törlés</button></p>
                <p>2023-02-13 <a href="#">Rendezvények</a> <button type="submit">Törlés</button></p>
            </div>
            <div class="listazott">


            </div>`,
  },
];
