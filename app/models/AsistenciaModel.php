<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class AsistenciaModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "asistencia"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveAsistencia($idHorario, $fecha, $cantHoras, $idAprendiz)
    {
        try {
            $sql = "INSERT INTO $this->table (idHorario, fecha, cantHoras, idAprendiz) VALUES (:idHorario, :fecha, :cantHoras, :idAprendiz)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':idHorario', $idHorario, PDO::PARAM_INT);
            $statement->bindParam(':fecha', $fecha);
            $statement->bindParam(':cantHoras', $cantHoras, PDO::PARAM_INT);
            $statement->bindParam(':idAprendiz', $idAprendiz, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar la asistencia>" . $ex->getMessage();
        }
    }

    public function getAsistencia($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener la asistencia>" . $ex->getMessage();
        }
    }

    public function editAsistencia($id, $idHorario, $fecha, $cantHoras, $idAprendiz)
    {
        try {
            $sql = "UPDATE $this->table SET idHorario=:idHorario, fecha=:fecha, cantHoras=:cantHoras, idAprendiz=:idAprendiz WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":idHorario", $idHorario, PDO::PARAM_INT);
            $statement->bindParam(":fecha", $fecha);
            $statement->bindParam(":cantHoras", $cantHoras, PDO::PARAM_INT);
            $statement->bindParam(":idAprendiz", $idAprendiz, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar la asistencia>" . $ex->getMessage();
        }
    }

    public function removeAsistencia($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar la asistencia: " . $ex->getMessage();
            return false;
        }
    }

    public function getAll(): array
    {
        return parent::getAll();
    }
}