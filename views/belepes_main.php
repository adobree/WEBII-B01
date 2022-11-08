<body>
<div class="reg_main">
<form class="reg" action="<?= SITE_ROOT ?>beleptet" method="post">
<fieldset class="reg">
<legend>Belépés</legend>
    <label class="reg_label" for="login">Felhasználónév:</label>
	<input class="reg_input" type="text" name="login" id="login" required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
    <label class="reg_label" for="password">Jelszó:</label>
	<input class="reg_input" type="password" name="password" id="password" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
    <input class="btn_send" type="submit" value="Küldés">
</fieldset>
</form>
</div>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
</body>