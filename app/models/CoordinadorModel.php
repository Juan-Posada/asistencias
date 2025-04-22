<?php

namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE."../models/BaseModel.php";

class CoordinadorModel extends BaseModel {
    public function __construct(
        ?int $id = null,
        ?string $idCentro = null,
        ?string $idUsuario = null
    ) {
        $this->table = "coordinador";
        // Se llama al constructor del padre
        parent::__construct();
    }

    public function saveCoordinador($idCentro, $idUsuario) {
        try {
            $sql = "INSERT INTO $this->table (idCentro, idUsuario) VALUES (:idCentro, :idUsuario)";
            // 1. Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);
            // $idCentro = $this->idCentro ?? '';         // Estos datos es opcional
            // $idUsuario = $this->idUsuario ?? '';

            // 2. BindParam para sanitizar los datos de entrada
            $statement->bindParam('idCentro', $idCentro, PDO::PARAM_INT);
            $statement->bindParam('idUsuario', $idUsuario, PDO::PARAM_INT);

            // 3. Ejecutar la consulta
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "Error al guardar el coordinador> ".$ex->getMessage();
        }
    }

    public function getCoordinador($id) {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result[0]; 
        } catch (PDOException $ex) {
            echo "Error al obtener el coordinador" . $ex->getMessage();
        }
    }

    public function editCoordinador($id, $idCentro, $idUsuario) {
        try {
            $sql = "UPDATE $this->table SET 
                        idCentro=:idCentro, 
                        idUsuario=:idUsuario 
                    WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->bindParam(":idCentro", $idCentro, PDO::PARAM_INT);
            $statement->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo editar el coordinador".$ex->getMessage();
        }
    }

    public function removeCoordinador($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el coordinador".$ex->getMessage();
        }
    }
}