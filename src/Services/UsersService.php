<?php namespace App\Services;

use App\Models\UsersModel;

class UsersService{

    // OBTENER TODOS LOS REGISTROS
    protected $articlesModel;

    public function __construct(UsersModel $model){
        $this->articlesModel = $model;
    }

    public function getAll(){
        return $this->articlesModel->getAllUsers();
    }

}