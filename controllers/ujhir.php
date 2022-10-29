<?php

class Ujhir_Controller
{
    public $baseName = 'ujhir';
    public function main(array $vars)
    {
        $adminModel = new ujhir_Model;
        $adminModel->ujhir();
        if ($_SESSION['loggedin'] == "ok") {
            $view = new View_Loader($this->baseName . "_main");
        }else{ echo "Nincs bejelentkezve!";
        }

    }
}

?>