<?php

namespace App\Controllers;

use App\Models\AprendizModel;
use App\Models\UsuarioModel;
use App\Models\FichaModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/AprendizModel.php';

class AprendizController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $aprendizObj = new AprendizModel();
        $aprendices = $aprendizObj->getAll();
        $data = [
            "aprendices" => $aprendices,
            "title" => "Aprendices"
        ];
        $this->render('aprendiz/viewAprendiz.php', $data);
    }

    public function new()
    {
        $usuarioObj = new UsuarioModel();
        $usuarios = $usuarioObj->getAll();
        $fichaObj = new FichaModel();
        $fichas = $fichaObj->getAll();
        $data = [
            "usuarios" => $usuarios,
            "fichas" => $fichas,
            "title" => "Nuevo Aprendiz"
        ];
        $this->render('aprendiz/newAprendiz.php', $data);
    }

    public function create()
    {
        if (isset($_POST['nombre']) && isset($_POST['ficha'])) {
            $nombre = $_POST['nombre'] ?? null;
            $ficha = $_POST['ficha'] ?? null;
            $aprendizObj = new AprendizModel();
            $aprendizObj->saveAprendiz($nombre, $ficha);
            print_r($aprendizObj);
            $this->redirectTo("aprendiz/view");
        }
    }

    public function viewOne($id)
    {
        $usuarioObj = new UsuarioModel();
        $usuario = $usuarioObj->getUsuario($id);
        $aprendizObj = new AprendizModel();
        $aprendizInfo = $aprendizObj->getAprendiz($id);
        $data = [
            "usuario" => $usuario,
            "aprendiz" => $aprendizInfo,
            "title" => "Detalles del Aprendiz"
        ];
        $this->render('aprendiz/viewOneAprendiz.php', $data);
    }

    public function edit($id)
    {
        $aprendizObj = new AprendizModel();
        $aprendizInfo = $aprendizObj->getAprendiz($id);
        $usuarioObj = new UsuarioModel();
        $usuarios = $usuarioObj->getAll();
        $fichaObj = new FichaModel();
        $fichas = $fichaObj->getAll();
        $data = [
            "usuarios" => $usuarios,
            "fichas" => $fichas,
            "aprendiz" => $aprendizInfo,
            "title" => "Editar Aprendiz"
        ];
        $this->render('aprendiz/editAprendiz.php', $data);
    }

    public function update()
    {
        if (isset($_POST['txtId']) && isset($_POST['nombre']) && isset($_POST['ficha'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['nombre'] ?? null;
            $ficha = $_POST['ficha'] ?? null;
            $aprendizObj = new AprendizModel();
            $aprendizObj->editAprendiz($id, $nombre, $ficha);
            $this->redirectTo("aprendiz/view");
        }
    }

    public function delete($id)
    {
        $aprendizObj = new AprendizModel();
        $aprendizInfo = $aprendizObj->getAprendiz($id);
        $data = [
            "aprendiz" => $aprendizInfo,
            "title" => "Eliminar Aprendiz"
        ];
        $this->render('aprendiz/deleteAprendiz.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $aprendizObj = new AprendizModel();
            $aprendizObj->removeAprendiz($id);
            $this->redirectTo("aprendiz/view");
        }
    }
}