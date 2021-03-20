<?php

namespace App\Services;

use App\Models\UsersModel;

class UsersService
{

    // OBTENER TODOS LOS REGISTROS
    protected $articlesModel;

    public function __construct(UsersModel $model)
    {
        $this->articlesModel = $model;
    }

    /**
     * Servicio para retornar todos los Usuarios de la base de datos.
     * @return  JSON un objeto json con la data de la tabla usuario
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function getAll()
    {
        return $this->articlesModel->getAllUsers();
    }
    
    /**
     * Servicio para buscar un objeto Usuario en la base de datos
     * @param ID id del usuario a buscar
     * @return JSON<Usuario> Puede contener los objetos consultados o estar vacío
     */
    public function select($id)
    {
        return $this->articlesModel->getUser($id);
    }

    /**
     * Servicio para guardar un objeto Usuario en la base de datos.
     * @param Usuario objeto a guardar
     * @return  Mensaje mensaje del modelo con la respuesta
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function insert($usuario)
    {
        return $this->articlesModel->insertUsers($usuario);
    }

    /**
     * Servicio para modificar un objeto Usuario en la base de datos.
     * @param Usuario objeto con la información a modificar
     * @return  Mensaje mensaje del modelo con la respuesta
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function update($usuario)
    {
        return $this->articlesModel->updateUsers($usuario);
    }

    /**
     * Servicio para eliminar un objeto Usuario en la base de datos.
     * @param Usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Mensaje mensaje del modelo con la respuesta
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function delete($usuario)
    {
        return $this->articlesModel->deleteUsers($usuario);
    }
}
