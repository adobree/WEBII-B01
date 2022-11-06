<?php
	//error_reporting(0);
	require 'mindentudas_model.php';
	require 'WSDLDocument/WSDLDocument.php';
	$wsdl = new WSDLDocument('Mindentudas', "http://pfw.ddns.net/web1kovacsadam/soap/szerver/szerver.php", "http://pfw.ddns.net/web1kovacsadam/soap/szerver/");
	$wsdl->formatOutput = true;
	$wsdlfile = $wsdl->saveXML();
	echo $wsdlfile;
	file_put_contents ("mindentudas.wsdl" , $wsdlfile);
?>
