<body>

<div class="reg_main">

<form action="" method="post">
<fieldset>
<legend>Regisztráció</legend>
    <label class='reg_label' for="csaladi_nev">Családi név:</label>
    <input class='reg_input' type="text" name="csaladi_nev" id="csaladi_nev"
    required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
	<label class='reg_label' for="utonev">Utónév:</label>
    <input class='reg_input' type="text" name="utonev" id="utonev"
	required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
    <label class='reg_label' for="bejelenkezes">Felhasználónév:</label>
    <input class='reg_input' type="text" name="bejelentkezes" id="bejelentkezes"><br>
    <label class='reg_label' for="jelszo">Jelszó:</label>
    <input class='reg_input' type="password" class="re" name="jelszo" id="jelszo" 
	required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
    <input class='btn_send' type="submit" value="Küldés">
</fieldset>
</form>

</div>
</div>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
</body>