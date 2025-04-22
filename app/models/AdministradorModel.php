<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class AdministradorModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "administrador"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveAdministrador($idRegional, $idUsuario)
    {
        try {
            $sql = "INSERT INTO $this->table (idRegional, idUsuario) VALUES (:idRegional, :idUsuario)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':idRegional', $idRegional, PDO::PARAM_INT);
            $statement->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el administrador>" . $ex->getMessage();
        }
    }

    public function getAdministrador($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el administrador>" . $ex->getMessage();
        }
    }

    public function editAdministrador($id, $idRegional, $idUsuario)
    {
        try {
            $sql = "UPDATE $this->table SET idRegional=:idRegional, idUsuario=:idUsuario WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":idRegional", $idRegional, PDO::PARAM_INT);
            $statement->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el administrador>" . $ex->getMessage();
        }
    }

    public function removeAdministrador($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el administrador: " . $ex->getMessage();
            return false;
        }
    }

    public function getAll(): array
    {
        return parent::getAll();
    }
}