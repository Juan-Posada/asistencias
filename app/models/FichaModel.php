<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class FichaModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "ficha"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveFicha($ficha, $idPrograma)
    {
        try {
            $sql = "INSERT INTO $this->table (ficha, idPrograma) VALUES (:ficha, :idPrograma)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':ficha', $ficha, PDO::PARAM_STR);
            $statement->bindParam(':idPrograma', $idPrograma, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar la ficha>" . $ex->getMessage();
        }
    }

    public function getFicha($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener la ficha>" . $ex->getMessage();
        }
    }

    public function editFicha($id, $ficha, $idPrograma)
    {
        try {
            $sql = "UPDATE $this->table SET ficha=:ficha, idPrograma=:idPrograma WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":ficha", $ficha, PDO::PARAM_STR);
            $statement->bindParam(":idPrograma", $idPrograma, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar la ficha>" . $ex->getMessage();
        }
    }

    public function removeFicha($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar la ficha: " . $ex->getMessage();
            return false;
        }
    }

    public function getAll(): array
    {
        return parent::getAll();
    }
}