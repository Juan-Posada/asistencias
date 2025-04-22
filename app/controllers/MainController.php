<?php
namespace App\Controllers;
require_once "BaseController.php";

class MainController extends BaseController
{   
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }
    public function view(){
        $data = [
            "title" => "Pagína Principal"
        ];
        $this->render('main/main.php', $data);
    }
}