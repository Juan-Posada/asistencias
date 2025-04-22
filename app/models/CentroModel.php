<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class CentroModel extends BaseModel {
    public function __construct() {
        $this->table = "centro"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveCentro($nombre, $id_regional) {
        try {
            $sql = "INSERT INTO $this->table (nombre, idRegional) VALUES (:nombre, :id_regional)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':id_regional', $id_regional, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el centro>" . $ex->getMessage();
        }
    }

    public function getCentro($id) {
        try {
            $sql = "SELECT c.*, r.nombre AS nombreRegional
            FROM centro c
            INNER JOIN regional r ON c.idRegional = r.id
            WHERE c.id = :id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el centro>" . $ex->getMessage();
        }
    }

    public function editCentro($id, $nombre, $idRegional) {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, idRegional=:idRegional WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":idRegional", $idRegional, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el centro>" . $ex->getMessage();
        }
    }

    public function removeCentro($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el centro: " . $ex->getMessage();
            return false;
        }
    }
}