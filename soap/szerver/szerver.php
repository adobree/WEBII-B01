<?php
	require("mindentudas_model.php");
	$server = new SoapServer("mindentudas.wsdl");
	$server->setClass('Mindentudas');
	$server->handle();
?>
