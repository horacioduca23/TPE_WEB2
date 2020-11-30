<?php

require_once 'app/helpers/db.helper.php';

class UserModel {
    
    private $db;
    private $dbHelper;

    function __construct() {
        
        $this->dbHelper = new DBHelper();

        $this->db = $this->dbHelper->connect();
    }

    /**
     * Devuelve un usuario segun su email
     */
    function getByEmail($email) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function addUser($email, $password, $rol) {
  
      $query = $this->db->prepare("INSERT INTO usuarios(email, password, rol) VALUES(?,?,?)"); // prepara la consulta
      return $query->execute([$email, $password, $rol]); // ejecuta
  
    }

    function getUsers() {       
        $query = $this->db->prepare('SELECT * FROM usuarios');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getUser($id) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function editUser($rol, $id) {
      $query = $this->db->prepare('UPDATE usuarios SET rol = ? WHERE id = ?'); // prepara la consulta
      $query->execute([$rol, $id]);
    }

    function deleteUser($id) {
        $query = $this->db->prepare('DELETE FROM usuarios WHERE id = ?'); // prepara la consulta
        $query->execute([$id]); // ejecuta 
        return $query;
    }

}