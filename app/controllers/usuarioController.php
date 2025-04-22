<?php

namespace App\Controllers;

use App\Models\RolModel;
use App\Models\UsuarioModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/UsuarioModel.php';

class UsuarioController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function home()
    {
        $this->render('index.php', ["title" => "Bienvenida"]);
    }

    public function view()
    {
        $usuarioObj = new UsuarioModel();
        $usuarios = $usuarioObj->getAll();
        $data = [
            "usuarios" => $usuarios,
            "title" => "Usuarios"
        ];
        $this->render('usuario/viewUsuario.php', $data);
    }

    public function new()
    {   
        $rolObj = new RolModel();
        $roles = $rolObj->getAll();

        $data = [
            "roles" => $roles,
            "title" => "Nuevo Usuario"
        ];
        $this->render('usuario/newUsuario.php', $data);
    }

    public function createUsuario()
    {
        if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['fkIdRol'])) {
            $nombre = $_POST['nombre'] ?? null;
            $email = $_POST['email'] ?? null;
            $password = $_POST['password'] ?? null;
            $fkIdRol = $_POST['fkIdRol'] ?? null;
            $usuarioModel = new UsuarioModel(); // Cambiado de InstructorModel a UsuarioModel
            $usuarioModel->saveUsuario($nombre, $email, $password, $fkIdRol); // Cambiado de saveInstructor a saveUsuario
            $this->redirectTo("usuario/view");
            
            // echo "hOLA"; // Esto debería mostrarse si no hay redirección
        } else {
            echo "Faltan datos en el formulario"; // Mensaje de error si faltan datos
        }
    }

    public function viewOne($id)
    {
        $usuarioObj = new UsuarioModel();
        $usuario = $usuarioObj->getUsuario($id);
        $data = [
            "usuario" => $usuario,
            "title" => "Detalles del Usuario"
        ];
        $this->render('usuario/viewOneUsuario.php', $data);
    }

    public function edit($id)
    {
        $usuarioObj = new UsuarioModel();
        $usuario = $usuarioObj->getUsuario($id);
        $rolObj = new RolModel();
        $roles = $rolObj->getAll();

        $data = [
            "usuario" => $usuario,
            "title" => "Editar Usuario",
            "roles" => $roles
        ];
        $this->render('usuario/editUsuario.php', $data);
    }

    public function update()
    {
        if (isset($_POST['txtId']) && isset($_POST['txtIdRol'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $email = $_POST['txtEmail'] ?? null;
            $idRol = $_POST['txtIdRol'] ?? null;
            $usuarioObj = new UsuarioModel();
            $usuarioObj->editUsuario($id, $nombre, $email, $idRol);
            $this->redirectTo("usuario/view");
        }
    }

    public function delete($id)
    {
        $usuarioObj = new UsuarioModel();
        $usuario = $usuarioObj->getUsuario($id);
        $data = [
            "usuario" => $usuario,
            "title" => "Eliminar Usuario"
        ];
        $this->render('usuario/deleteUsuario.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $usuarioObj = new UsuarioModel();
            $usuarioObj->removeUsuario($id);
            $this->redirectTo("usuario/view");
        }
    }
}