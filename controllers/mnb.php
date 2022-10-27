<?php
class Mnb_Controller
{
    public $baseName = 'mnb';
    public function main(array $vars)
    {
        $mnbModel = new Mnb_Model;
        $mnbModel->mnb();
        $view = new View_Loader($this->baseName . "_main");
    }
}
?>