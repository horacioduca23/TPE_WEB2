<?php

require_once 'app/helpers/db.helper.php';

class ProductsModel {
    
    private $db;
    private $dbHelper;

    function __construct() {
        
        $this->dbHelper = new DBHelper();

        $this->db = $this->dbHelper->connect();
    }

    /**
     * Devuelve todos los productos de la base de datos
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

    function get($id) {
        //2. Enviamos la consulta y nos devuelve el resultado (prepare y execute)
        $query = $this->db->prepare('SELECT * FROM producto WHERE id = ?');
        $query->execute([$id]);
        
        //3. Obtengo la rta con un Fetch en este caso (por ser varias 1 categoria)
        return $query->fetch(PDO::FETCH_OBJ); //Arreglo de categorias   
    }

    function guardarProducto($id, $marca, $talle, $color){      
        $query = $this->db->prepare('UPDATE producto SET marca = ? , talle= ? , color= ? WHERE id= ? '); 
        $query->execute([$marca, $talle, $color, $id]);
    }

    function remove($id) {
        $query = $this->db->prepare('DELETE FROM producto WHERE id = ?');
        $query->execute([$id]);
        return $query->rowCount();
    }

    //inserta el producto en la base de datos
    function insert($marca, $talle, $color, $id_categorias) {

        //2. Enviamos la consulta y nos devuelve el resultado (prepare y execute)
        $query = $this->db->prepare('INSERT INTO producto (marca, talle, color, id_categorias) VALUES (?, ?, ?, ?)');
        $query->execute([$marca, $talle, $color, $id_categorias]);

        //3. Obtengo y devuelvo el ID de la categoria nueva
        return $this->db->lastInsertId();
    }

    function update($idProduct, $marca, $talle, $color, $id_categorias) {

        //2. Enviamos la consulta y nos devuelve el resultado (prepare y execute)
        $query = $this->db->prepare('UPDATE producto SET  marca = ?, talle = ?, color = ?, id_categorias = ? WHERE id = ?');
        $result = $query->execute([$marca, $talle, $color, $id_categorias, $idProduct]);

        //3. Devuelve el rdo de la ejecucion
        return $result;
    }

}
  