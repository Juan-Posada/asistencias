<?php

namespace App\Controllers;

use App\Models\AdministradorModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/AdministradorModel.php';

class AdministradorController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $administradorObj = new AdministradorModel();
        $administradores = $administradorObj->getAll();
        $data = [
            "administradores" => $administradores,
            "title" => "Administradores"
        ];
        $this->render('administrador/viewAdministrador.php', $data);
    }

    public function new()
    {
        $data = [
            "title" => "Nuevo Administrador"
        ];
        $this->render('administrador/newAdministrador.php', $data);
    }

    public function create()
    {
        if (isset($_POST['txtIdRegional']) && isset($_POST['txtIdUsuario'])) {
            $idRegional = $_POST['txtIdRegional'] ?? null;
            $idUsuario = $_POST['txtIdUsuario'] ?? null;

            $administradorObj = new AdministradorModel();
            $administradorObj->saveAdministrador($idRegional, $idUsuario);
            $this->redirectTo("administrador/view");
        }
    }

    public function viewOne($id)
    {
        $administradorObj = new AdministradorModel();
        $administrador = $administradorObj->getAdministrador($id);
        $data = [
            "administrador" => $administrador,
            "title" => "Detalles del Administrador"
        ];
        $this->render('administrador/viewOneAdministrador.php', $data);
    }

    public function edit($id)
    {
        $administradorObj = new AdministradorModel();
        $administrador = $administradorObj->getAdministrador($id);
        $data = [
            "administrador" => $administrador,
            "title" => "Editar Administrador"
        ];
        $this->render('administrador/editAdministrador.php', $data);
    }

    public function update()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtIdRegional']) && isset($_POST['txtIdUsuario'])) {
            $id = $_POST['txtId'] ?? null;
            $idRegional = $_POST['txtIdRegional'] ?? null;
            $idUsuario = $_POST['txtIdUsuario'] ?? null;

            $administradorObj = new AdministradorModel();
            $administradorObj->editAdministrador($id, $idRegional, $idUsuario);
            $this->redirectTo("administrador/view");
        }
    }

    public function delete($id)
    {
        $administradorObj = new AdministradorModel();
        $administrador = $administradorObj->getAdministrador($id);
        $data = [
            "administrador" => $administrador,
            "title" => "Eliminar Administrador"
        ];
        $this->render('administrador/deleteAdministrador.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $administradorObj = new AdministradorModel();
            $administradorObj->removeAdministrador($id);
            $this->redirectTo("administrador/view");
        }
    }
}