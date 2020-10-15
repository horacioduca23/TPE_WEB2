<?php

class CategoriesModel {
    
    private $db;

    function __construct() {
        $this->db = $this->connect();
    }

    /**
     * Abro conexión a la base de datos;
     */
    private function connect() {
        $db = new PDO('mysql:host=localhost;' .'dbname=db_zapatilleria;charset=utf8' , 'root', '');
        return $db;
    }
    
    /**
     * Devuelve todas las categorias de la base de datos
     */
    function getAll(){

        //2. Enviamos la consulta y nos devuelve el resultado (prepare y execute)
        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();
        
        //3. Obtengo la rta con un FetchAll en este caso (por ser varias categorias)
        $categories = $query->fetchAll(PDO::FETCH_OBJ); //Arreglo de categorias

        return $categories;
    }

    /**
     * Inserta la categoria en la Base de Datos
     */
    function insert($nombre, $descripcion){

        //2. Enviamos la consulta y nos devuelve el resultado (prepare y execute)
        $query = $this->db->prepare('INSERT INTO categoria (nombre, descripcion) VALUES (?, ?)');
        $query->execute([$nombre, $descripcion]);

        //3. Obtengo y devuelvo el ID de la categoria nueva
        return $this->db->lastInsertId();
    }   

    function remove($id) {
        $query = $this->db->prepare('DELETE FROM categoria WHERE id = ?');
        $query->execute([$id]);
    }
    
    function get($id) {
        //2. Enviamos la consulta y nos devuelve el resultado (prepare y execute)
        $query = $this->db->prepare('SELECT * FROM categoria WHERE id = ?');
        $query->execute([$id]);
        
        //3. Obtengo la rta con un Fetch en este caso (por ser varias 1 categoria)
        return $query->fetch(PDO::FETCH_OBJ); //Arreglo de categorias   
    }

    function guardarCategoria($id, $nombre, $descripcion){
        
        $query = $this->db->prepare('UPDATE categoria SET nombre = ? , descripcion= ? WHERE id= ? '); 
        $query->execute([$nombre, $descripcion, $id]);
    }

    function getProductsByCategory($id) {
        
        $query = $this->db->prepare("SELECT * FROM producto p JOIN categoria c ON p.id_categorias = c.id WHERE  p.id_categorias = ?"); // prepara la consulta
        $query->execute([$id]); // ejecuta
        $products = $query->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta

        return $products;
    }
}

