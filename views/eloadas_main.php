<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>Mindentudas</title>
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/eloadas.css">
  </head>
	<body class="eloadas_background"></body>
  <?php

  
  $client = new SoapClient('http://pfw.ddns.net/web1kovacsadam/soap/szerver/mindentudas.wsdl');
  
  if(!isset($teruletek))
  {
  $teruletek = $client->getterulet();
  }
  if(!empty($_POST['terulet']) && trim($_POST['terulet']))
  {

	$_SESSION['$teruletmarad'] = $_POST['terulet'];
    $tudosok = $client->gettudos($_POST['terulet']);
  }
  if(!empty($_POST['tudos']) && trim($_POST['tudos']))
  { 
	$_POST['terulet'] = $_SESSION['$teruletmarad'];
    $eloadasok = $client->geteloadas($_SESSION['$teruletmarad'],$_POST['tudos']);
  }
  ?>
    
  <body>
    <h1>Mindentudás Egyeteme előadások</h1>
    
	  <form class='left' name="teruletselect" method="POST">
      <select class='select' name="terulet" onchange="javascript:teruletselect.submit();">
        <option value="">Válasszon területet</option>
        <?php
          foreach($teruletek->teruletek as $terulet)
          {
            echo '<option value="'.$terulet['terulet'].'">'.$terulet['terulet'].'</option>';
          }
        ?>
      </select>
	  
	  <?php
	  if(isset($_POST['terulet'])){
		?>
		<br>
		<p class='kiir' ><?php print $_POST['terulet']; ?></p>
	  <?php
	  }

	  ?>
	  
	  </form>
	
	  <?php
	  if(isset($_POST['terulet'])){
		  ?>
	  <form class='right' name="tudosselect" method="POST">
      <select class='select' name="tudos" onchange="javascript:tudosselect.submit();">
        <option value="">Válasszon tudóst</option>
        <?php
          foreach($tudosok->tudosok as $tudos)
          {
            echo '<option value="'.$tudos['nev'].'">'.$tudos['nev'].'</option>';
          }
        ?>
      </select> 
		<?php
	  	  if(isset($_POST['tudos'])){
		?>
		<br>
		<p class='kiir' ><?php print $_POST['tudos']; ?></p>
	  <?php
	  }
		?>
	  
	  </form>
		<br><br><br><br><br><br><br>

	  <?php
	  }
	  
        
          if(isset($eloadasok))
          {
			
            echo "<fieldset>";
			
            
			
            foreach($eloadasok->eloadasok as $eloadas)
            {
              echo $eloadas['cim'].' - '.$eloadas['ido']."<br>";
            }
            echo "</fieldset>";
          }
        ?>
    
  </body>                                                          
</html>