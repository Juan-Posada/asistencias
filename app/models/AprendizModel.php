<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class AprendizModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "aprendiz"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveAprendiz($nombre, $ficha)
    {
        try {
            $sql = "INSERT INTO $this->table (idUsuario, idFicha) VALUES (:idUsuario, :idFicha)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':idUsuario', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':idFicha', $ficha, PDO::PARAM_STR);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el aprendiz>" . $ex->getMessage();
        }
    }

    public function getAprendiz($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el aprendiz>" . $ex->getMessage();
        }
    }

    public function editAprendiz($id, $nombre, $ficha)
    {
        try {
            $sql = "UPDATE $this->table SET idUsuario=:idUsuario, idFicha=:idFicha  WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":idUsuario", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":idFicha", $ficha, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el aprendiz>" . $ex->getMessage();
        }
    }

    public function removeAprendiz($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el aprendiz: " . $ex->getMessage();
            return false;
        }
    }
}