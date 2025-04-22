<?php

namespace App\Controllers;

use App\Models\AsistenciaModel;
use App\Models\HorarioModel;
use App\Models\AprendizModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/AsistenciaModel.php';

class AsistenciaController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {

        $asistenciaObj = new AsistenciaModel();
        $asistencias = $asistenciaObj->getAll();
        $data = [
            "asistencias" => $asistencias,
            "title" => "Asistencias"
        ];
        $this->render('asistencia/viewAsistencia.php', $data);
    }

    public function new()
    {
        $horarioObj = new HorarioModel();
        $aprendizObj = new AprendizModel();
        $horarios = $horarioObj->getAll();
        $aprendices = $aprendizObj->getAll();
        $data = [
            "horarios" => $horarios,
            "aprendices" => $aprendices,
            "title" => "Nueva Asistencia"
        ];
        $this->render('asistencia/newAsistencia.php', $data);
    }

    public function create()
    {
        if (isset($_POST['idHorario']) && isset($_POST['fecha']) && isset($_POST['cantHoras']) && isset($_POST['idAprendiz'])) {
            $idHorario = $_POST['idHorario'] ?? null;
            $fecha = $_POST['fecha'] ?? null;
            $cantHoras = $_POST['cantHoras'] ?? null;
            $idAprendiz = $_POST['idAprendiz'] ?? null;

            $asistenciaObj = new AsistenciaModel();
            $asistenciaObj->saveAsistencia($idHorario, $fecha, $cantHoras, $idAprendiz);
            $this->redirectTo("asistencia/view");
        }
    }

    public function viewOne($id)
    {
        $asistenciaObj = new AsistenciaModel();
        $asistencia = $asistenciaObj->getAsistencia($id);
        $data = [
            "asistencia" => $asistencia,
            "title" => "Detalles de la Asistencia"
        ];
        $this->render('asistencia/viewOneAsistencia.php', $data);
    }

    public function edit($id)
    {
        $asistenciaObj = new AsistenciaModel();
        $asistencia = $asistenciaObj->getAsistencia($id);
        $horarioObj = new HorarioModel();
        $aprendizObj = new AprendizModel();
        $horarios = $horarioObj->getAll();
        $aprendices = $aprendizObj->getAll();
        $data = [
            "horarios" => $horarios,
            "aprendices" => $aprendices,
            "asistencia" => $asistencia,
            "title" => "Editar Asistencia"
        ];
        $this->render('asistencia/editAsistencia.php', $data);
    }

    public function update()
    {
        if (isset($_POST['id']) && isset($_POST['idHorario']) && isset($_POST['fecha']) && isset($_POST['cantHoras']) && isset($_POST['idAprendiz'])) {
            $id = $_POST['id'] ?? null;
            $idHorario = $_POST['idHorario'] ?? null;
            $fecha = $_POST['fecha'] ?? null;
            $cantHoras = $_POST['cantHoras'] ?? null;
            $idAprendiz = $_POST['idAprendiz'] ?? null;

            $asistenciaObj = new AsistenciaModel();
            $asistenciaObj->editAsistencia($id, $idHorario, $fecha, $cantHoras, $idAprendiz);
            $this->redirectTo("asistencia/view");
        }
    }

    public function delete($id)
    {
        $asistenciaObj = new AsistenciaModel();
        $asistencia = $asistenciaObj->getAsistencia($id);
        $data = [
            "asistencia" => $asistencia,
            "title" => "Eliminar Asistencia"
        ];
        $this->render('asistencia/deleteAsistencia.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $asistenciaObj = new AsistenciaModel();
            $asistenciaObj->removeAsistencia($id);
            $this->redirectTo("asistencia/view");
        }
    }
}