<?php

namespace App\Controllers;

use App\Models\InstructorModel;
use App\Models\CentroModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . '../models/InstructorModel.php';

class InstructorController extends BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout";
        parent::__construct();
    }

    public function view()
    {
        $instructorObj = new InstructorModel();
        $instructores = $instructorObj->getAll();
        $data = [
            "instructores" => $instructores,
            "title" => "Instructores"
        ];
        $this->render('instructor/viewInstructor.php', $data);
    }

    public function newInstructor()
    {
        $centroObj = new CentroModel();
        $centros = $centroObj->getAll();

        $data = [
            "centros" => $centros,
            "title" => "Nuevo Instructor"
        ];
        $this->render('instructor/newInstructor.php', $data);
    }

    public function createInstructor()
    {
        if (isset($_POST['idCentro']) && isset($_POST['idUsuario'])) {
            $idCentro = $_POST['idCentro'] ?? null;
            $idUsuario = $_POST['idUsuario'] ?? null;
            $instructorObj = new InstructorModel();
            $instructorObj->saveInstructor($idCentro, $idUsuario);
            $this->redirectTo("instructor/view");
        }
    }

    public function viewInstructor($id)
    {
        $instructorObj = new InstructorModel();
        $instructorInfo = $instructorObj->getInstructor($id);
        $data = [
            "instructor" => $instructorInfo,
            "title" => "Detalles del Instructor"
        ];
        $this->render('instructor/viewOneInstructor.php', $data);
    }

    public function editInstructor($id)
    {
        $instructorObj = new InstructorModel();
        $instructorInfo = $instructorObj->getInstructor($id);
        $centroObj = new CentroModel();
        $centros = $centroObj->getAll();

        $data = [
            "instructor" => $instructorInfo,
            "centros" => $centros,
            "title" => "Editar Instructor"
        ];
        $this->render('instructor/editInstructor.php', $data);
    }

    public function updateInstructor()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'] ?? null;
            $idCentro = $_POST['idCentro'] ?? null;
            $idUsuario = $_POST['idUsuario'] ?? null;
            $instructorObj = new InstructorModel();
            $instructorObj->editInstructor($id, $idCentro, $idUsuario);
            $this->redirectTo("instructor/view");
        }
    }

    public function deleteInstructor($id)
    {
        $instructorObj = new InstructorModel();
        $instructorInfo = $instructorObj->getInstructor($id);
        $data = [
            "instructor" => $instructorInfo,
            "title" => "Eliminar Instructor"
        ];
        $this->render('instructor/deleteInstructor.php', $data);
    }

    public function remove()
    {
        if (isset($_POST['txtId'])) {
            $id = $_POST['txtId'] ?? null;
            $instructorObj = new InstructorModel();
            $instructorObj->removeInstructor($id);
            $this->redirectTo("instructor/view");
        }
    }
}
