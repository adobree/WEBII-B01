<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8_hungarian_ci">
        <title>lorem</title>
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
        <h1 class="header">Lorem, ipsum dolor.</h1>
        <div class="em" id="user"><em><?= $_SESSION['bejelentkezett'].$_SESSION['userlastname']." ".$_SESSION['userfirstname'].$_SESSION['user']  ?></em></div>
    </header>

		<div class="main_conteiner">
            <aside>
                <?php echo Menu::getMenu($viewData['selectedItems']); ?>
            </aside>
            <section>
                <?php if($viewData['render']) include($viewData['render']); ?>
            </section>
        </div>
        <footer>&copy; Lorem, ipsum dolor. <?= date("Y"); ?></footer>
    </body>
</html>
