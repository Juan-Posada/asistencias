<?php

namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE."../models/BaseModel.php";

class AdministradorModel extends BaseModel {
    public function __construct(
        ?int $id = null,
        ?string $idRegional = null,
        ?string $idUsuario = null
    ) {
        $this->table = "administrador";
        // Se llama al constructor del padre
        parent::__construct();
    }

    public function saveAdministrador($idRegional, $idUsuario) {
        try {
            $sql = "INSERT INTO $this->table (idRegional, idUsuario) VALUES (:idRegional, :idUsuario)";
            // 1. Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);
            // $idRegional = $this->idRegional ?? '';         // Estos datos es opcional
            // $idUsuario = $this->idUsuario ?? '';

            // 2. BindParam para sanitizar los datos de entrada
            $statement->bindParam('idRegional', $idRegional, PDO::PARAM_INT);
            $statement->bindParam('idUsuario', $idUsuario, PDO::PARAM_INT);

            // 3. Ejecutar la consulta
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "Error al guardar el administrador> ".$ex->getMessage();
        }
    }

    public function getAdministrador($id) {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result[0]; 
        } catch (PDOException $ex) {
            echo "Error al obtener el administrador" . $ex->getMessage();
        }
    }

    public function editAdministrador($id, $idRegional, $idUsuario) {
        try {
            $sql = "UPDATE $this->table SET 
                        idRegional=:idRegional, 
                        idUsuario=:idUsuario 
                    WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->bindParam(":idRegional", $idRegional, PDO::PARAM_INT);
            $statement->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo editar el administrador".$ex->getMessage();
        }
    }

    public function removeAdministrador($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el administrador".$ex->getMessage();
        }
    }
}