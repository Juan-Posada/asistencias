<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . '../models/BaseModel.php';

class UsuarioModel extends BaseModel
{
    public function __construct()
    {
        $this->table = "usuario"; // Nombre de la tabla en la base de datos
        parent::__construct();
    }

    public function saveUsuario($nombre, $email, $contrasena, $idRol)
    {
        try {
            $sql = "INSERT INTO $this->table (nombre, email, contrasena, idRol) VALUES (:nombre, :email, :contrasena, :idRol)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
            $statement->bindParam(':idRol', $idRol, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al guardar el usuario>" . $ex->getMessage();
        }
    }

    public function getUsuario($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener el usuario>" . $ex->getMessage();
        }
    }

    public function editUsuario($id, $nombre, $email, $idRol)
    {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, email=:email, idRol=:idRol WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":email", $email, PDO::PARAM_STR);
            $statement->bindParam(":idRol", $idRol, PDO::PARAM_INT);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "Error al editar el usuario>" . $ex->getMessage();
        }
    }

    public function removeUsuario($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el usuario: " . $ex->getMessage();
            return false;
        }
    }

    public function getAll(): array
    {
        return parent::getAll();
    }
    public function validarLogin($email, $password){ //Contraseña que llega del formulario
        $sql = "SELECT u.*, r.nombre AS nombreRol
        FROM usuario u
        INNER JOIN  rol r ON u.idRol = r.id
        WHERE u.email=:email";
        $statement = $this->dbConnection->prepare($sql);
        $statement->bindParam(":email", $email);
        $statement->execute();
        $resultSet = [];
        while($row = $statement->fetch(PDO::FETCH_OBJ)){
            $resultSet[] = $row;
        }
        if (count($resultSet) > 0) {
            $hash = $resultSet[0]->contrasena; // hash guardado en la base de datos
            if (password_verify($password, $hash)) {
                // La contraseña ingresada es correcta
                $_SESSION["nombre"] = $resultSet[0]->nombre;
                $_SESSION["email"] = $resultSet[0]->email;
                $_SESSION["nombreRol"] = $resultSet[0]->nombreRol;
                $_SESSION["timeOut"] = time();
                session_regenerate_id();
                return true;
            }
        }
        return false;
    }
}