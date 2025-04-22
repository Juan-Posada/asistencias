<?php

namespace App\Controllers;

use App\Models\CentroModel;
use App\Models\ProgramaModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/ProgramaModel.php';

class ProgramaController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $programaObj = new ProgramaModel();
        $programas = $programaObj->getAll();
        $data = [
            "programas" => $programas,
            "title" => "programas"
        ];
        $this->render('programa/viewPrograma.php', $data);
    }

    public function newPrograma()
    {
        $centroObj = new CentroModel();
        $centros = $centroObj->getAll();

        $data = [
            "centros" => $centros,
            "title" => "Nueva Regional"
        ];
        $this->render('programa/newPrograma.php', $data);
    }

    public function createPrograma()
    {
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'] ?? null;
            $idCentro = $_POST['idCentro'] ?? null;
            $programaObj = new ProgramaModel();
            $programaObj->savePrograma($nombre, $idCentro);
            $this->redirectTo("programa/view");
        }
    }

    public function viewPrograma($id)
    {
        $programaObj = new ProgramaModel();
        $programaInfo = $programaObj->getPrograma($id);
        $data = [
            "programa" => $programaInfo,
            "title" => "Detalles del Programa"
        ];
        $this->render('programa/viewOnePrograma.php', $data);
    }

    public function editPrograma($id)
    {
        $programaObj = new ProgramaModel();
        $programaInfo = $programaObj->getPrograma($id);
        $centroObj = new CentroModel();
        $centros = $centroObj->getAll();

        $data = [
            "programa" => $programaInfo,
            "centros" => $centros,
            "title" => "Editar Regional"
        ];
        $this->render('programa/editPrograma.php', $data);
    }

    public function updatePrograma()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'] ?? null;
            $nombre = $_POST['nombre'] ?? null;
            $idCentro = $_POST['idCentro'] ?? null;
            $programaObj = new ProgramaModel();
            $programaObj->editPrograma($id, $nombre, $idCentro);
            $this->redirectTo("programa/view");
        }
    }

    public function deletePrograma($id)
    {
        $programaObj = new ProgramaModel();
        $programaInfo = $programaObj->getPrograma($id);
        $data = [
            "programa" => $programaInfo,
            "title" => "Eliminar Programa"
        ];
        $this->render('programa/deletePrograma.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $programaObj = new ProgramaModel();
            $programaObj->removePrograma($id);
            $this->redirectTo("programa/view");
        }
    }
}