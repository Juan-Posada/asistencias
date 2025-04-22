<?php
namespace App\Controllers;
use App\Controllers\BaseController;
require_once "baseController.php";

class HomeController extends BaseController
{   
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }
    public function index(){
        $this->render('index.php', ["title" => "Inicio"]);
    }
    public function saludar(){
        echo "<br>CONTROLLER> HomeController";
        echo "<br>ACTION> saludos!";
    }
}