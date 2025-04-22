<?php

namespace App\Controllers;

use App\Models\CompetenciaModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/CompetenciaModel.php';

class CompetenciaController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $competenciaObj = new CompetenciaModel();
        $competencias = $competenciaObj->getAllCompetencias();
        $data = [
            "competencias" => $competencias,
            "title" => "Competencias"
        ];
        $this->render('competencia/viewCompetencia.php', $data);
    }

    public function new()
    {   
        $competenciaObj = new CompetenciaModel();
        $fichas = $competenciaObj->getAllFichas();
        $instructores = $competenciaObj->getAllInstructores();

        $data = [
            "fichas" => $fichas,
            "instructores" => $instructores,
            "title" => "Nueva Competencia"
        ];
        $this->render('competencia/newCompetencia.php', $data);
    }

    public function create()
    {
        if (isset($_POST['nombre']) && isset($_POST['idFicha']) && isset($_POST['idInstructor']) ) {
            $nombre = $_POST['nombre'] ?? null;
            $idFicha = $_POST['idFicha'] ?? null;
            $idInstructor = $_POST['idInstructor'] ?? null;
            $competenciaObj = new CompetenciaModel();
            $competenciaObj->saveCompetencia($nombre, $idFicha, $idInstructor);
            // print_r($competenciaObj);
            $this->redirectTo("competencia/view");
        }
    }

    public function viewOne($id)
    {
        $competenciaObj = new CompetenciaModel();
        $competencia = $competenciaObj->getCompetencia($id);
        $data = [
            "competencia" => $competencia,
            "title" => "Detalles de la competencia"
        ];
        $this->render('competencia/viewOneCompetencia.php', $data);
    }

    public function edit($id)
    {
        $competenciaObj = new CompetenciaModel();
        $competencia = $competenciaObj->getCompetencia($id);
        $fichas = $competenciaObj->getAllFichas();
        $instructores = $competenciaObj->getAllInstructores();

        $data = [
            "competencia" => $competencia,
            "fichas" => $fichas,
            "instructores" => $instructores,
            "title" => "Editar competencia"
        ];
        $this->render('competencia/editCompetencia.php', $data);
    }

    public function update()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'] ?? null;
            $nombre = $_POST['nombre'] ?? null;
            $idFicha = $_POST['idFicha'] ?? null;
            $idInstructor = $_POST['idInstructor'] ?? null;
            
            $competenciaObj = new CompetenciaModel();
            $competenciaObj->editCompetencia($id, $nombre, $idFicha, $idInstructor);
            $this->redirectTo("competencia/view");
        }
    }

    public function delete($id)
    {
        $competenciaObj = new CompetenciaModel();
        $competencia = $competenciaObj->getCompetencia($id);
        $data = [
            "competencia" => $competencia,
            "title" => "Eliminar competencia"
        ];
        $this->render('competencia/deleteCompetencia.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $competenciaObj = new CompetenciaModel();
            $competenciaObj->removeCompetencia($id);
            $this->redirectTo("competencia/view");
        }
    }
}