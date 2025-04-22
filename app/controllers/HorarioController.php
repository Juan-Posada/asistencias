<?php

namespace App\Controllers;

use App\Models\HorarioModel;
use App\Models\CompetenciaModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/HorarioModel.php';

class HorarioController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $horarioObj = new HorarioModel();
        $horarios = $horarioObj->getAll();
        $data = [
            "horarios" => $horarios,
            "title" => "Horarios"
        ];
        $this->render('horario/viewHorario.php', $data);
    }

    public function new()
    {
        $competenciaObj = new CompetenciaModel();
        $competencias = $competenciaObj->getAll();

        $data = [
            "competencias" => $competencias,
            "title" => "Nuevo Horario"
        ];
        $this->render('horario/newHorario.php', $data);
    }

    public function create()
    {
        if (isset($_POST['horaInicio']) && isset($_POST['horaFin']) && isset($_POST['dia']) && isset($_POST['idCompetencia'])) {
            $horaInicio = $_POST['horaInicio'] ?? null;
            $horaFin = $_POST['horaFin'] ?? null;
            $dia = $_POST['dia'] ?? null;
            $idCompetencia = $_POST['idCompetencia'] ?? null;

            $horarioObj = new HorarioModel();
            $horarioObj->saveHorario($horaInicio, $horaFin, $dia, $idCompetencia);
            $this->redirectTo("horario/view");
        }
    }

    public function viewOne($id)
    {
        $horarioObj = new HorarioModel();
        $horario = $horarioObj->getHorario($id);
        $data = [
            "horario" => $horario,
            "title" => "Detalles del Horario"
        ];
        $this->render('horario/viewOneHorario.php', $data);
    }

    public function edit($id)
    {
        $horarioObj = new HorarioModel();
        $horario = $horarioObj->getHorario($id);
        $competenciaObj = new CompetenciaModel();
        $competencias = $competenciaObj->getAll();

        $data = [
            "horario" => $horario,
            "title" => "Editar Horario",
            "competencias" => $competencias
        ];
        $this->render('horario/editHorario.php', $data);
    }

    public function update()
    {
        if (isset($_POST['id']) && isset($_POST['horaInicio']) && isset($_POST['horaFin']) && isset($_POST['dia']) && isset($_POST['idCompetencia'])) {
            $id = $_POST['id'] ?? null;
            $horaInicio = $_POST['horaInicio'] ?? null;
            $horaFin = $_POST['horaFin'] ?? null;
            $dia = $_POST['dia'] ?? null;
            $idCompetencia = $_POST['idCompetencia'] ?? null;

            $horarioObj = new HorarioModel();
            $horarioObj->editHorario($id, $horaInicio, $horaFin, $dia, $idCompetencia);
            $this->redirectTo("horario/view");
        }
    }

    public function delete($id)
    {
        $horarioObj = new HorarioModel();
        $horario = $horarioObj->getHorario($id);
        $data = [
            "horario" => $horario,
            "title" => "Eliminar Horario"
        ];
        $this->render('horario/deleteHorario.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $horarioObj = new HorarioModel();
            $horarioObj->removeHorario($id);
            $this->redirectTo("horario/view");
        }
    }
}