<?php

class PubProductsModel {
    
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
        $query = $this->db->prepare('SELECT * FROM producto');
        $query->execute();
        
        //3. Obtengo la rta con un FetchAll en este caso (por ser varias categorias)
        $products = $query->fetchAll(PDO::FETCH_OBJ); //Arreglo de categorias

        return $products;
    }

    function getProductDetail($id) {
        $query = $this->db->prepare("SELECT * FROM producto p JOIN categoria c ON p.id_categorias = c.id WHERE p.id_categorias = c.id AND p.id = ? "); // prepara la consulta
        $query->execute([$id]); // ejecuta
        $details = $query->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta

        return $details;
    }
}