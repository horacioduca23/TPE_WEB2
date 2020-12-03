<?php

require_once 'app/helpers/db.helper.php';

class CommentsModel {
    
    private $db;
    private $dbHelper;

    function __construct() {

        $this->dbHelper = new DBHelper();

        $this->db = $this->dbHelper->connect();
    }

    function white_list(&$value, $allowed, $message) {      //para controlar valores permitidos
        
        if ($value === null) {
            return $allowed[0];
        }
        $key = array_search($value, $allowed, true);
        if ($key === false) {
            throw new InvalidArgumentException($message);
        } else {
            return $value;
        }
    }

    function getAll($order = []) {
        $sort = 'fecha';
        $order = 'ASC';

        if (isset($order['sort'])) {           ///api/comentarios?sort=id_producto_fk&order=asc
            $sort = $order['sort'];
            if (isset($order['order'])) {
                $order = $order['order'];
            }
        }
        //para evitar inyección SQL
        $sort = $this->white_list($sort, ["id", "fecha", "comentario", "puntaje", "id_producto"], "Criterio de orden no valido");
        $order = $this->white_list($order, ["ASC", "DESC", "asc", "desc"], "Direccion de ORDER BY no valida");

        $sql = "SELECT * FROM comentarios ORDER BY $sort $order";
        $query = $this->db->prepare($sql); // prepara la consulta
        $query->execute(); // ejecuta
        $comments = $query->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta

        return $comments;
    }

/*     function get($idComment) {
        $sql = "SELECT * FROM comentarios WHERE id = ?";
        
        $query = $this->db->prepare($sql); // prepara la consulta
        $query->execute([$idComment]); // ejecuta
        $comment = $query->fetch(PDO::FETCH_OBJ); // obtiene la respuesta
        
        return $comment;
    } */

    function getCommentsByProduct($idCommentProduct, $order = []) {
        $sort = 'fecha';
        $order = 'DESC';

        if (isset($order['sort'])) {
            $sort = $order['sort'];
            if (isset($order['order'])) {
                $order = $order['order'];
            }
        }
        //para evitar inyección SQL
        $sort = $this->white_list($sort, ["id", "fecha", "comentario", "puntaje"], "Criterio de orden no valido");
        $order = $this->white_list($order, ["ASC", "DESC", "asc", "desc"], "Direccion de ORDER BY no valida");

        //Creamos la consulta para obtener los comentarios de un producto
        $sql = "SELECT * FROM comentarios WHERE comentarios.id_producto = ? ORDER BY $sort $order ";
        $query = $this->db->prepare($sql); // prepara la consulta          
        $query->execute([$idCommentProduct]);   //ejecuta
        $comments = $query->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta

        return $comments;
    }

    function insert($comentario, $puntaje, $id_producto) {
        
        //2. Enviamos la consulta y nos devuelve el resultado (prepare y execute)
        $query = $this->db->prepare('INSERT INTO comentarios (comentario, puntaje, id_producto) VALUES (?, ?, ?)');
        $query->execute([$comentario, $puntaje, $id_producto]);

        //3. Obtengo y devuelvo el ID de del ultimo comentario agregado
        return $this->db->lastInsertId();

    }

    function remove($idComment) {
        $query = $this->db->prepare('DELETE FROM comentarios WHERE id = ?');
        $query->execute([$idComment]);
        return $query->rowCount();
    }

}