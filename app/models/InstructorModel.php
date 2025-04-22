<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/baseModel.php';

class InstructorModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "instructor"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveInstructor($idCentro, $idUsuario)
    {
        try {
            $sql = "INSERT INTO $this->table (idCentro, idUsuario) VALUES (:idCentro, :idUsuario)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':idCentro', $idCentro, PDO::PARAM_INT);
            $statement->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el instructor: " . $ex->getMessage();
        }
    }

    public function getInstructor($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el instructor: " . $ex->getMessage();
        }
    }

    public function editInstructor($id, $idCentro, $idUsuario)
    {
        try {
            $sql = "UPDATE $this->table SET idCentro=:idCentro, idUsuario=:idUsuario WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":idCentro", $idCentro, PDO::PARAM_INT);
            $statement->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el instructor: " . $ex->getMessage();
        }
    }

    public function removeInstructor($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el instructor: " . $ex->getMessage();
            return false;
        }
    }
}
?>