<body class="reg_background">

<div class="reg2">

<form action="" method="post">
<fieldset class="reg">
<legend class="reg"><h2>Regisztráció</h2></legend>

    <label class='reg' for="csaladi_nev">Családi név:</label>
    <br>
    <input class='reg' type="text" name="csaladi_nev" id="csaladi_nev"
    required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
	<br>
	<label class='reg' for="utonev">Utónév:</label>
    <br>
    <input class='reg' type="text" name="utonev" id="utonev"
	required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
    <br>
    <label class='reg' for="bejelenkezes">Felhasználónév:</label>
    <br>
    <input class='reg' type="text" name="bejelentkezes" id="bejelentkezes"><br>
    <br>
    <label class='reg' for="jelszo">Jelszó:</label>
    <br>
    <input class='reg' type="password" class="re" name="jelszo" id="jelszo" 
	required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
    <br>
    <input class='reg_sub' type="submit" value="Küldés">

</fieldset>
</form>

</div>
</div>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
</body>