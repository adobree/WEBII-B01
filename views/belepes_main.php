<body class="log_background">


<div class="reg2">

<form class="reg" action="<?= SITE_ROOT ?>beleptet" method="post">
<fieldset class="reg">
<legend class="reg"><h2>Belépés</h2></legend>
    <label class="reg" for="login">Felhasználó:</label>
	<input class="reg" type="text" name="login" id="login" required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
    <label class="reg" for="password">Jelszó:</label>
	<input class="reg" type="password" name="password" id="password" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
    <input class="reg_sub" type="submit" value="Küldés">
</fieldset>
</form>

</div>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
</body>