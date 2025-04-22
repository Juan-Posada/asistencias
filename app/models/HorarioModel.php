<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class HorarioModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "horario"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveHorario($horaInicio, $horaFin, $dia, $idCompetencia)
    {
        try {
            $sql = "INSERT INTO $this->table (horaInicio, horaFin, dia, idCompetencia) VALUES (:horaInicio, :horaFin, :dia, :idCompetencia)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':horaInicio', $horaInicio, PDO::PARAM_STR);
            $statement->bindParam(':horaFin', $horaFin, PDO::PARAM_STR);
            $statement->bindParam(':dia', $dia, PDO::PARAM_STR);
            $statement->bindParam(':idCompetencia', $idCompetencia, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el horario>" . $ex->getMessage();
        }
    }

    public function getHorario($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el horario>" . $ex->getMessage();
        }
    }

    public function editHorario($id, $horaInicio, $horaFin, $dia, $idCompetencia)
    {
        try {
            $sql = "UPDATE $this->table SET horaInicio=:horaInicio, horaFin=:horaFin, dia=:dia, idCompetencia=:idCompetencia WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":horaInicio", $horaInicio, PDO::PARAM_STR);
            $statement->bindParam(":horaFin", $horaFin, PDO::PARAM_STR);
            $statement->bindParam(":dia", $dia, PDO::PARAM_STR);
            $statement->bindParam(":idCompetencia", $idCompetencia, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el horario>" . $ex->getMessage();
        }
    }

    public function removeHorario($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el horario: " . $ex->getMessage();
            return false;
        }
    }

    public function getAll(): array
    {
        return parent::getAll();
    }
}
