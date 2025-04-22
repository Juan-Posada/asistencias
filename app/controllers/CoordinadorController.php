<?php
namespace App\Controllers;
use App\Models\CoordinadorModel;
use App\Models\UsuarioModel;        // Importar la clase UsuarioModel para posibles relaciones
use App\Models\CentroModel;        // Importar la clase CentroModel para posibles relaciones

require_once 'baseController.php';
require_once MAIN_APP_ROUTE."../models/CoordinadorModel.php";
require_once MAIN_APP_ROUTE."../models/UsuarioModel.php";
require_once MAIN_APP_ROUTE."../models/CentroModel.php";

class CoordinadorController extends BaseController {
    
    public function __construct() {            // Para que nos cargue y nos renderize es con esta funcion.
        # Se define la plantilla para este controlador
        $this->layout = "admin_layout";
        // Llamamos al constructor del padre
        parent::__construct();
    }

    public function view() {
        // Llamamos al modelo de Coordinador
        $coordinadorObj = new CoordinadorModel();
        $coordinadores = $coordinadorObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "title"        => "Coordinadores",
            "coordinadores" => $coordinadores
        ];
        $this->render('coordinador/viewCoordinador.php', $data);
    }

    public function newCoordinador() {
        // Lógica para capturar usuarios y centros (si es necesario)
        $usuarioObj = new UsuarioModel();
        $usuarios = $usuarioObj->getAll();
        
        $centroObj = new CentroModel();
        $centros = $centroObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "title"   => "Coordinadores",
            "usuarios" => $usuarios,
            "centros"  => $centros
        ];
        $this->render('coordinador/newCoordinador.php', $data);
    }

    public function createCoordinador() {
        if (isset($_POST['txtIdCentro']) && isset($_POST['txtIdUsuario'])) {
            
            $idCentro = $_POST['txtIdCentro'] ?? null;
            $idUsuario = $_POST['txtIdUsuario'] ?? null;

            // Creamos instancia del Modelo Coordinador
            $coordinadorObj = new CoordinadorModel();
            
            // Se llama al método que guarda en la base de datos
            $coordinadorObj->saveCoordinador($idCentro, $idUsuario);
            // print_r($coordinadorObj);
            $this->redirectTo("coordinador/view");
        } else {
            echo "No se capturaron todos los datos del coordinador";
        }
    }

    public function viewCoordinador($id) {
        $coordinadorObj = new CoordinadorModel();
        $coordinadorInfo = $coordinadorObj->getCoordinador($id);
        $data = [
            "title" => "Coordinadores",
            'coordinador' => $coordinadorInfo
        ];
        $this->render('coordinador/viewOneCoordinador.php', $data);
    }

    public function editCoordinador($id) {
        $coordinadorObj = new CoordinadorModel();
        $coordinadorInfo = $coordinadorObj->getCoordinador($id);
        
        $usuarioObj = new UsuarioModel();
        $usuariosInfo = $usuarioObj->getAll();
        
        $centroObj = new CentroModel();
        $centrosInfo = $centroObj->getAll();
        
        $data = [
            "title" => "Coordinadores",
            "coordinador" => $coordinadorInfo,
            "usuarios" => $usuariosInfo,
            "centros"  => $centrosInfo
        ];
        $this->render('coordinador/editCoordinador.php', $data);
    }

    public function updateCoordinador() {
        if (isset($_POST['txtId']) && isset($_POST['txtIdCentro']) && isset($_POST['txtIdUsuario'])) {
            
            $id = $_POST['txtId'] ?? null;
            $idCentro = $_POST['txtIdCentro'] ?? null;
            $idUsuario = $_POST['txtIdUsuario'] ?? null;

            $coordinadorObj = new CoordinadorModel();
            $respuesta = $coordinadorObj->editCoordinador($id, $idCentro, $idUsuario);
        }
        header("location: /coordinador/view");
    }

    public function deleteCoordinador($id) {
        $coordinadorObj = new CoordinadorModel();
        $coordinador = $coordinadorObj->getCoordinador($id);
        $data = [
            "title" => "Eliminar Coordinador",
            "coordinador" => $coordinador,
        ];
        $this->render('coordinador/deleteCoordinador.php', $data);
    }
    public function removeCoordinador()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $usuarioObj = new CoordinadorModel();
            $usuarioObj->removeCoordinador($id);
            $this->redirectTo("coordinador/view");
        }
    }

}
