<?php
namespace App\Controllers;
use App\models\UsuarioModel;

require_once "baseController.php";
require_once MAIN_APP_ROUTE."../models/UsuarioModel.php";


class LoginController extends BaseController{
    public function __construct() {
        $this->layout = "login_layout";
    }
    public function initLogin(){
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $email = trim($_POST["email"]) ?? null;
            $password = trim($_POST["password"]) ?? null;
            if ($email != null && $password != null) {
                //se valida la existencia del usuario y contraseña en la BD
                $loginObj = new UsuarioModel();
                $resp = $loginObj->validarLogin($email, $password);
                if ($resp) {
                    $this->redirectTo("usuario/home");
                    exit();
                }else{
                    $errors = "El usuario y/o contraseña son incorrectos";

                }
            }else{
                $errors = "El usuario y/o contraseña no pueden ser vacíos";
            }
            $data = [
                "errors" => $errors,
            ];
            $this->render("login/login.php", $data);
        }else{
            //Se renderiza el formulario del login
            $this->render("login/login.php");
        }
        
    }

    public function logoutLogin(){
        session_destroy();
        header("Location: /login/init");
    }
}