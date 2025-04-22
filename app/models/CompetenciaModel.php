<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class CompetenciaModel extends BaseModel {
    public function __construct() {
        $this->table = "competencia";
        parent::__construct();
    }

    public function saveCompetencia($nombre, $idFicha, $idInstructor) {
        try {
            $sql = "INSERT INTO $this->table (nombre, idFicha, idInstructor) VALUES (:nombre, :idFicha, :idInstructor)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':idFicha', $idFicha, PDO::PARAM_INT);
            $statement->bindParam(':idInstructor', $idInstructor, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar la competencia: " . $ex->getMessage();
        }
    }

    public function getCompetencia($id) {
        try {
            $sql = "SELECT c.*, f.ficha AS nombreFicha, u.nombre AS nombreInstructor 
                    FROM competencia c
                    INNER JOIN ficha f ON c.idFicha = f.id
                    INNER JOIN instructor i ON c.idInstructor = i.id
                    INNER JOIN usuario u ON i.idUsuario = u.id
                    WHERE c.id = :id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener la competencia: " . $ex->getMessage();
        }
    }

    public function getAllCompetencias() {
        try {
            $sql = "SELECT c.*, f.ficha AS nombreFicha, u.nombre AS nombreInstructor 
                    FROM competencia c
                    INNER JOIN ficha f ON c.idFicha = f.id
                    INNER JOIN instructor i ON c.idInstructor = i.id
                    INNER JOIN usuario u ON i.idUsuario = u.id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener las competencias: " . $ex->getMessage();
        }
    }

    public function editCompetencia($id, $nombre, $idFicha, $idInstructor) {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, idFicha=:idFicha, idInstructor=:idInstructor WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":idFicha", $idFicha, PDO::PARAM_INT);
            $statement->bindParam(":idInstructor", $idInstructor, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar la competencia: " . $ex->getMessage();
        }
    }

    public function removeCompetencia($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar la competencia: " . $ex->getMessage();
            return false;
        }
    }

    // Métodos para obtener fichas e instructores
    public function getAllFichas() {
        try {
            $sql = "SELECT * FROM ficha";
            $statement = $this->dbConnection->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener las fichas: " . $ex->getMessage();
        }
    }

    public function getAllInstructores() {
        try {
            $sql = "SELECT i.id, u.nombre 
                    FROM instructor i
                    INNER JOIN usuario u ON i.idUsuario = u.id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener los instructores: " . $ex->getMessage();
        }
    }
}