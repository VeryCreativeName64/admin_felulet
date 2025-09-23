<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="cim">Cikkek</title>
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
            <div class="szuro">
                
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
                <p><a href="#">új cikk</a></p>
            </div>
            <table>
                <tr>
                    <th>Létrehozó</th>
                    <th>Dátum</th>
                    <th>Nyelv</th>
                    <th>Rovat</th>
                    <th>Cím</th>
                </tr>
                <tr>
                    <td>CSINFO.HU Admin</td>
                    <td>2025.08.14 11:14</td>
                    <td>HUN</td>
                    <td>ENG desktop virt</td>
                    <td><a id="tablink1" href="#">VMware 9 szoftverek</a></td>
                </tr>
                <tr>
                    <td>CSINFO.HU Admin</td>
                    <td>2025.08.12 08:31</td>
                    <td>HUN</td>
                    <td>box2</td>
                    <td><a id="tablink2" href="#">A vSphere 7 általános támogatása megszűnik</a></td>
                </tr>
            </table>
        </article>
    </main>
</body>

</html>