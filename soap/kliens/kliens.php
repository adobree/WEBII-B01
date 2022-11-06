<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>Mindentudás</title>
  </head>

  <?php 
  $client = new SoapClient('http://pfw.ddns.net/web1kovacsadam/soap/szerver/mindentudas.wsdlxxx');
  
  
  $teruletek = $client->getterulet();
  if(isset($_POST['terulet']) && trim($_POST['terulet']) != "")
	  
    $tudosok = $client->gettudos($_POST['terulet']);
  if(isset($_POST['tudos']) && trim($_POST['tudos']) != "")
	  
    $eloadasok = $client->geteloadas($_POST['terulet'],$_POST['tudos']);

  ?>
    
  <body>
    <h1>Mindentudas</h1>
    
	  <form name="teruletselect" method="POST">
      <select name="terulet" onchange="javascript:teruletselect.submit();">
        <option value="">Válasszon területet</option>
        <?php
          foreach($teruletek->teruletek as $terulet)
          {
            echo '<option value="'.$terulet['terulet'].'">'.$terulet['terulet'].'</option>';
          }
        ?>
      </select> 
	  
	  <form name="tudosselect" method="POST">
      <select name="tudos" onchange="javascript:tudosselect.submit();">
        <option value="">Válasszon tudost</option>
        <?php
          foreach($tudosok->tudosok as $tudos)
          {
            echo '<option value="'.$tudos['nev'].'">'.$tudos['nev'].'</option>';
          }
        ?>
      </select> 
	  
	  
	  
        <?php
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
    </form>
  </body>                                                          
</html>