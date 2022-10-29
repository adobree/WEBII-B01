<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8_hungarian_ci">
        <title>Kovács Ádám és Nagy Gábor</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
        <link rel="icon" type="image/x-icon" href="<?php echo SITE_ROOT?>images/favicon.ico">
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>

    </head>
    <body>

    <?php if(!isset($_SESSION['bejelentkezett'])) {
        $_SESSION['bejelentkezett'] = "";
        $_SESSION['userlastname'] = "";
        $_SESSION['userfirstname'] = "";
        $_SESSION['user'] = "";
        $_SESSION['loggedin'] = "x";
    }
    ?>

    <header>
        <h1 class="header">Web programozás II. - Beadandó feladat 1.</h1>
        <div class="em" id="user"><em><?= $_SESSION['bejelentkezett'].$_SESSION['userlastname']." ".$_SESSION['userfirstname'].$_SESSION['user']  ?></em></div>
    </header>

		<div class="mas">
		<aside>
               <?php echo Menu::getMenu($viewData['selectedItems']); ?>
        </aside>
        </div>
        <section>
            <?php if($viewData['render']) include($viewData['render']); ?>
        </section>
		<br>
		<br>
        <footer>&copy; Kovács Ádám és Nagy Gábor || NJE <?= date("Y"); ?></footer>
    </body>
</html>
