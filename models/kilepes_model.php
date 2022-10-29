<?php

class Kilepes_Model
{
	public function get_data()
	{
		$retData['eredmeny'] = "OK";
		$retData['uzenet'] = "Visszontlátásra kedves ".$_SESSION['userlastname']." ".$_SESSION['userfirstname']."!";
		$_SESSION['userid'] =  0;
		$_SESSION['userlastname'] =  "";
		$_SESSION['userfirstname'] =  "";
		$_SESSION['user'] =  "";
		$_SESSION['bejelentkezett'] =  "";
		$_SESSION['userlevel'] = "1__";
    $_SESSION['loggedin'] = "x";
		Menu::setMenu();
		return $retData;
	}
}

?>