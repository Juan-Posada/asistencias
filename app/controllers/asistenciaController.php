<?php
namespace App\Controllers;
use App\Controllers\BaseController;
require_once "baseController.php";

class AsistenciaController extends BaseController
{   
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }
    public function view()
    {
        $this->render('asistencia/viewAsistencia.php', ["title" => "Asistencias"]);
    }
    public function saludar(){
        echo "<br>CONTROLLER> HomeController";
        echo "<br>ACTION> saludos!";
    }
}