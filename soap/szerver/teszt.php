<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>Mindentudas</title>
  </head>

  <?php
     $options = array(
   
   'keep_alive' => false,
    //'trace' =>true,
    //'connection_timeout' => 5000,
    //'cache_wsdl' => WSDL_CACHE_NONE,
   );
  $client = new SoapClient('http://localhost/soapanita/szerver/mindentudas.wsdl',$options);
  
  $terulet = $client->getterulet();
  echo "<pre>";
  print_r($terulet);
  echo "</pre>";
  
 $tudos = $client->gettudos('művészetek');
  echo "<pre>";
  print_r($tudos);
  echo "</pre>";
  
  
  
  $eloadasok = $client->geteloadas('természettudományok','Faigel Gyula');
  echo "<pre>";
  print_r($eloadasok);
  echo "</pre>";
  ?>
    
  <body>
  </body>
</html>