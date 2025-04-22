<?php

namespace App\Controllers;

use App\Models\CentroModel;
use App\Models\AmbienteModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/AmbienteModel.php';

class AmbienteController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $ambienteObj = new AmbienteModel();
        $ambientes = $ambienteObj->getAll();
        $data = [
            "ambientes" => $ambientes,
            "title" => "Ambientes"
        ];
        $this->render('ambiente/viewAmbiente.php', $data);
    }

    public function newAmbiente()
    {
        $centroObj = new CentroModel();
        $centros = $centroObj->getAll();

        $data = [
            "centros" => $centros,
            "title" => "Nuevo Ambiente"
        ];
        $this->render('ambiente/newAmbiente.php', $data);
    }

    public function createAmbiente()
    {
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'] ?? null;
            $idCentro = $_POST['idCentro'] ?? null;
            $ambienteObj = new AmbienteModel();
            $ambienteObj->saveAmbiente($nombre, $idCentro);
            $this->redirectTo("ambiente/view");
        }
    }

    public function viewAmbiente($id)
    {
        $ambienteObj = new AmbienteModel();
        $ambienteInfo = $ambienteObj->getAmbiente($id);
        $data = [
            "ambiente" => $ambienteInfo,
            "title" => "Detalles del Ambiente"
        ];
        $this->render('ambiente/viewOneAmbiente.php', $data);
    }

    public function editAmbiente($id)
    {
        $ambienteObj = new AmbienteModel();
        $ambienteInfo = $ambienteObj->getAmbiente($id);
        $centroObj = new CentroModel();
        $centros = $centroObj->getAll();

        $data = [
            "ambiente" => $ambienteInfo,
            "centros" => $centros,
            "title" => "Editar Ambiente"
        ];
        $this->render('ambiente/editAmbiente.php', $data);
    }

    public function updateAmbiente()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'] ?? null;
            $nombre = $_POST['nombre'] ?? null;
            $idCentro = $_POST['idCentro'] ?? null;
            $ambienteObj = new AmbienteModel();
            $ambienteObj->editAmbiente($id, $nombre, $idCentro);
            $this->redirectTo("ambiente/view");
        }
    }

    public function deleteAmbiente($id)
    {
        $ambienteObj = new AmbienteModel();
        $ambienteInfo = $ambienteObj->getAmbiente($id);
        $data = [
            "ambiente" => $ambienteInfo,
            "title" => "Eliminar Ambiente"
        ];
        $this->render('ambiente/deleteAmbiente.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $ambienteObj = new AmbienteModel();
            $ambienteObj->removeAmbiente($id);
            $this->redirectTo("ambiente/view");
        }
    }
}