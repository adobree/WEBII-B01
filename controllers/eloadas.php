<?php

class Eloadas_Controller
{
	public $baseName = 'eloadas';
	public function main(array $vars)
	{
		$eloadasModel = new Eloadas_Model;
        $retData = $eloadasModel->get_data($vars);

        if ($_SESSION['loggedin'] == "ok") {
            $view = new View_Loader($this->baseName . "_main");
        }else{ echo "Nincs bejelentkezve!";

        }
	}
}

?>