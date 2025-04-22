<?php
namespace App\Controllers;
use App\Models\AdministradorModel;
use App\Models\UsuarioModel;        // Importar la clase UsuarioModel para posibles relaciones
use App\Models\RegionalModel;       // Importar la clase RegionalModel para posibles relaciones

require_once 'baseController.php';
require_once MAIN_APP_ROUTE."../models/AdministradorModel.php";
require_once MAIN_APP_ROUTE."../models/UsuarioModel.php";
require_once MAIN_APP_ROUTE."../models/RegionalModel.php";

class AdministradorController extends BaseController {
    
    public function __construct() {            // Para que nos cargue y nos renderize es con esta funcion.
        # Se define la plantilla para este controlador
        $this->layout = "admin_layout";
        // Llamamos al constructor del padre
        parent::__construct();
    }

    public function view() {
        // Llamamos al modelo de Administrador
        $administradorObj = new AdministradorModel();
        $administradores = $administradorObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "title"          => "Administradores",
            "administradores" => $administradores
        ];
        $this->render('administrador/viewAdministrador.php', $data);
    }

    public function newAdministrador() {
        // Lógica para capturar usuarios y regionales
        $usuarioObj = new UsuarioModel();
        $usuarios = $usuarioObj->getAll();
        
        $regionalObj = new RegionalModel();
        $regionales = $regionalObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "title"     => "Administradores",
            "usuarios"   => $usuarios,
            "regionales" => $regionales
        ];
        $this->render('administrador/newAdministrador.php', $data);
    }

    public function createAdministrador() {
        if (isset($_POST['txtIdRegional']) && isset($_POST['txtIdUsuario'])) {
            
            $idRegional = $_POST['txtIdRegional'] ?? null;
            $idUsuario = $_POST['txtIdUsuario'] ?? null;

            // Creamos instancia del Modelo Administrador
            $administradorObj = new AdministradorModel();
            
            // Se llama al método que guarda en la base de datos
            $administradorObj->saveAdministrador($idRegional, $idUsuario);
            $this->redirectTo("administrador/view");
        } else {
            echo "No se capturaron todos los datos del administrador";
        }
    }

    public function viewAdministrador($id) {
        $administradorObj = new AdministradorModel();
        $administradorInfo = $administradorObj->getAdministrador($id);
        $data = [
            "title" => "Administradores",
            'administrador' => $administradorInfo
        ];
        $this->render('administrador/viewOneAdministrador.php', $data);
    }

    public function editAdministrador($id) {
        $administradorObj = new AdministradorModel();
        $administradorInfo = $administradorObj->getAdministrador($id);
        
        $usuarioObj = new UsuarioModel();
        $usuariosInfo = $usuarioObj->getAll();
        
        $regionalObj = new RegionalModel();
        $regionalesInfo = $regionalObj->getAll();
        
        $data = [
            "title" => "Administradores",
            "administrador" => $administradorInfo,
            "usuarios" => $usuariosInfo,
            "regionales" => $regionalesInfo
        ];
        $this->render('administrador/editAdministrador.php', $data);
    }

    public function updateAdministrador() {
        if (isset($_POST['txtId']) && isset($_POST['txtIdRegional']) && isset($_POST['txtIdUsuario'])) {
            
            $id = $_POST['txtId'] ?? null;
            $idRegional = $_POST['txtIdRegional'] ?? null;
            $idUsuario = $_POST['txtIdUsuario'] ?? null;

            $administradorObj = new AdministradorModel();
            $respuesta = $administradorObj->editAdministrador($id, $idRegional, $idUsuario);
        }
        header("location: /administrador/view");
    }

    public function deleteAdministrador($id) {
        $administradorObj = new AdministradorModel();
        $administrador = $administradorObj->getAdministrador($id);
        $data = [
            "title" => "Eliminar Administrador",
            "administrador" => $administrador,
        ];
        $this->render('administrador/deleteAdministrador.php', $data);
    }

    public function removeAdministrador() {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $administradorObj = new AdministradorModel();
            $administradorObj->removeAdministrador($id);
            $this->redirectTo("administrador/view");
        }
    }
}