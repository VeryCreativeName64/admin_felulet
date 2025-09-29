<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="cim">Rovatok</title>
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
        <article>
            <div class="adat">
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
                <label for="cimreszlet">...vagy...  Cím(részlet):</label>
                <input type="text" id="cimreszlet" name="cimreszlet">
                <button type="submit">Szűkítés</button>
                <p>2025-07-28 <a href="#">Termékek_vmware7.0</a> <button type="submit">Törlés</button></p>
                <p>2023-02-13 <a href="#">Rendezvények</a> <button type="submit">Törlés</button></p>
            </div>
            <div class="listazott">
                
                
            </div>
        </article>
    </main>
</body>

</html>