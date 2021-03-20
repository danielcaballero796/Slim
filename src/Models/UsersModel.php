<?php namespace App\Models;

class UsersModel{

    protected $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM usuario";
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }


}