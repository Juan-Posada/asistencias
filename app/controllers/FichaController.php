<?php

namespace App\Controllers;

use App\Models\FichaModel;
use App\Models\ProgramaModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/FichaModel.php';

class FichaController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $fichaObj = new FichaModel();
        $fichas = $fichaObj->getAll();
        $data = [
            "fichas" => $fichas,
            "title" => "Fichas"
        ];
        $this->render('ficha/viewFicha.php', $data);
    }

    public function new()
    {
        $programaObj = new ProgramaModel();
        $programas = $programaObj->getAll();

        $data = [
            "programas" => $programas,
            "title" => "Nueva Ficha"
        ];
        $this->render('ficha/newFicha.php', $data);
    }

    public function create()
    {
        if (isset($_POST['ficha']) && isset($_POST['idPrograma'])) {
            $ficha = $_POST['ficha'] ?? null;
            $idPrograma = $_POST['idPrograma'] ?? null;

            $fichaObj = new FichaModel();
            $fichaObj->saveFicha($ficha, $idPrograma);
            $this->redirectTo("ficha/view");
        }
    }

    public function viewOne($id)
    {
        $fichaObj = new FichaModel();
        $ficha = $fichaObj->getFicha($id);
        $data = [
            "ficha" => $ficha,
            "title" => "Detalles de la Ficha"
        ];
        $this->render('ficha/viewOneFicha.php', $data);
    }

    public function edit($id)
    {
        $fichaObj = new FichaModel();
        $ficha = $fichaObj->getFicha($id);
        $programaObj = new ProgramaModel();
        $programas = $programaObj->getAll();

        $data = [
            "ficha" => $ficha,
            "title" => "Editar Ficha",
            "programas" => $programas
        ];
        $this->render('ficha/editFicha.php', $data);
    }

    public function update()
    {
        if (isset($_POST['id']) && isset($_POST['ficha']) && isset($_POST['idPrograma'])) {
            $id = $_POST['id'] ?? null;
            $ficha = $_POST['ficha'] ?? null;
            $idPrograma = $_POST['idPrograma'] ?? null;

            $fichaObj = new FichaModel();
            $fichaObj->editFicha($id, $ficha, $idPrograma);
            $this->redirectTo("ficha/view");
        }
    }

    public function delete($id)
    {
        $fichaObj = new FichaModel();
        $ficha = $fichaObj->getFicha($id);
        $data = [
            "ficha" => $ficha,
            "title" => "Eliminar Ficha"
        ];
        $this->render('ficha/deleteFicha.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $fichaObj = new FichaModel();
            $fichaObj->removeFicha($id);
            $this->redirectTo("ficha/view");
        }
    }
}