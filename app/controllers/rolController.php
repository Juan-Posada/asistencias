<?php

namespace App\Controllers;

use App\Models\RolModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/RolModel.php';

class RolController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $rolObj = new RolModel();
        $roles = $rolObj->getAll();
        $data = [
            "roles" => $roles,
            "title" => "Roles"
        ];
        $this->render('rol/viewRol.php', $data);
    }

    public function newRol()
    {
        $data = [
            "title" => "Nuevo Rol"
        ];
        $this->render('rol/newRol.php', $data);
    }

    public function createRol()
    {
        if (isset($_POST['txtNombre'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            $rolObj = new RolModel();
            $rolObj->saveRol($nombre);
            $this->redirectTo("rol/view");
        }
    }

    public function viewRol($id)
    {
        $rolObj = new RolModel();
        $rolInfo = $rolObj->getRol($id);
        $data = [
            "rol" => $rolInfo,
            "title" => "Rol"
        ];
        $this->render('rol/viewOneRol.php', $data);
    }

    public function editRol($id)
    {
        $rolObj = new RolModel();
        $rolInfo = $rolObj->getRol($id);
        $data = [
            "rol" => $rolInfo,
            "title" => "Editar Rol"
        ];
        $this->render('rol/editRol.php', $data);
    }

    public function updateRol()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $rolObj = new RolModel();
            $rolObj->editRol($id, $nombre);
            $this->redirectTo("rol/view");
        }
    }

    public function deleteRol($id)
    {
        $rolObj = new RolModel();
        $rolInfo = $rolObj->getRol($id);
        $data = [
            "rol" => $rolInfo,
            "title" => "Eliminar Rol"
        ];
        $this->render('rol/deleteRol.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $rolObj = new RolModel();
            $rolObj->removeRol($id);
            $this->redirectTo("rol/view");
        }
    }
}