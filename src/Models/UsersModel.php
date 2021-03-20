<?php

namespace App\Models;

use PDOException;
use PDO;

class UsersModel
{

    protected $pdo;

    public function __construct($db)
    {
        $this->pdo = $db;
    }

    /**
     * Retorna todos los Usuarios de la base de datos.
     * @return JSON<Usuario> Puede contener los objetos consultados o estar vacío
     */
    public function getAllUsers()
    {
        $sql = "SELECT * FROM usuario";
        try {
            $query = $this->pdo->query($sql);
            $this->close();
            if ($query->rowCount() > 0) {
                return json_encode($query->fetchAll());
            } else {
                return json_encode("No existen usuarios en la BD.");
            }
        } catch (PDOException $e) {
            return '{"error" : {"text":' . $e->getMessage() . '}';
        }
    }

    /**
     * Busca un objeto Usuario en la base de datos
     * @return JSON<Usuario> Puede contener los objetos consultados o estar vacío
     */
    public function getUser($id)
    {
        $sql = "SELECT * FROM usuario WHERE id = ?";
        try {

            $query =  $this->pdo->prepare($sql);
            $query->bindParam(1, $id, PDO::PARAM_INT);
            $query->execute();
            $cant = $query->rowCount();
            $data = $query->fetchAll();
            $query = null;
            $this->close();

            if ($cant > 0) {
                return json_encode($data);
            } else {
                return json_encode("No existen usuarios en la BD.");
            }
        } catch (PDOException $e) {
            return '{"error" : {"text":' . $e->getMessage() . '}';
        }
    }

    /**
     * Guarda un objeto Usuario en la base de datos.
     * @param Usuario objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function insertUsers($usuario)
    {
        $sql = "INSERT INTO usuario(nombre) VALUES(?)";
        try {

            $query =  $this->pdo->prepare($sql);
            $query->bindParam(1, $usuario->nombre, PDO::PARAM_STR, 100);
            $query->execute();
            $query = null;
            $cant = $this->pdo->lastInsertId();
            $this->close();

            if ($cant > 0) {
                return json_encode("El usuario se ha insertado exitosamente.");
            } else {
                return json_encode("Error al registrar el usuario en la BD.");
            }
        } catch (PDOException $e) {
            return '{"error" : {"text":' . $e->getMessage() . '}';
        }
    }

    /**
     * Modifica un objeto Usuario en la base de datos.
     * @param Usuario objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function updateUsers($usuario)
    {
        $sql = "UPDATE usuario SET nombre = ? WHERE id = ? ";
        try {
            $query =  $this->pdo->prepare($sql);
            $query->bindParam(1, $usuario->nombre, PDO::PARAM_STR, 100);
            $query->bindParam(2, $usuario->id, PDO::PARAM_INT);
            $query->execute();
            $cant = $query->rowCount();
            $query = null;
            $this->close();

            if ($cant > 0) {
                return json_encode("El usuario se ha actualizado exitosamente.");
            } else {
                return json_encode("No existe el usuario en la BD.");
            }
        } catch (PDOException $e) {
            return '{"error" : {"text":' . $e->getMessage() . '}';
        }
    }

    /**
     * Elimina un objeto Usuario en la base de datos.
     * @param Usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function deleteUsers($usuario)
    {
        $sql = "DELETE FROM usuario WHERE id = ? ";
        try {

            $query =  $this->pdo->prepare($sql);
            $query->bindParam(1, $usuario->id, PDO::PARAM_INT);
            $query->execute();
            $cant = $query->rowCount();
            $query = null;
            $this->close();

            if ($cant > 0) {
                return json_encode("El usuario se ha eliminado exitosamente.");
            } else {
                return json_encode("No existe el usuario en la BD.");
            }
        } catch (PDOException $e) {
            return '{"error" : {"text":' . $e->getMessage() . '}';
        }
    }

    /**
     * Cierra la conexión actual a la base de datos
     */
    public function close()
    {
        $this->pdo = null;
    }
}
