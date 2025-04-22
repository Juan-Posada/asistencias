<?php

namespace App\Controllers;

use App\Models\CentroModel;
use App\Models\RegionalModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/CentroModel.php';

class CentroController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $centroObj = new CentroModel();
        $centros = $centroObj->getAll();
        $data = [
            "centros" => $centros,
            "title" => "centros"
        ];
        $this->render('centro/viewCentro.php', $data);
    }

    public function new()
    {   
        $regionalObj = new RegionalModel();
        $regionales = $regionalObj->getAll();

        $data = [
            "regionales" => $regionales,
            "title" => "Nueva Regional"
        ];
        $this->render('centro/newCentro.php', $data);
    }

    public function create()
    {
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'] ?? null;
            $idRegional = $_POST['idRegional'] ?? null;
            

            $centroObj = new CentroModel();
            $centroObj->saveCentro($nombre, $idRegional);
            $this->redirectTo("centro/view");
        }
    }

    public function viewOne($id)
    {
        $centroObj = new CentroModel();
        $centro = $centroObj->getCentro($id);
        $data = [
            "centro" => $centro,
            "title" => "Detalles del centro"
        ];
        $this->render('centro/viewOneCentro.php', $data);
    }

    public function edit($id)
    {
        $centroObj = new CentroModel();
        $centro = $centroObj->getCentro($id);
        $regionalObj = new RegionalModel();
        $regionales = $regionalObj->getAll();

        $data = [
            "centro" => $centro,
            "title" => "Editar centro",
            "regionales" => $regionales
        ];
        $this->render('centro/editCentro.php', $data);
    }

    public function update()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'] ?? null;
            $nombre = $_POST['nombre'] ?? null;
            $idRegional = $_POST['idRegional'] ?? null;
            $centroObj = new CentroModel();
            $centroObj->editCentro($id, $nombre, $idRegional);
            $this->redirectTo("centro/view");
        }
    }

    public function delete($id)
    {
        $centroObj = new CentroModel();
        $centro = $centroObj->getCentro($id);
        $data = [
            "centro" => $centro,
            "title" => "Eliminar centro"
        ];
        $this->render('centro/deleteCentro.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $centroObj = new CentroModel();
            $centroObj->removeCentro($id);
            $this->redirectTo("centro/view");
        }
    }
}