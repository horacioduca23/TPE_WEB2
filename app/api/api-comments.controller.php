<?php

require_once ('app/models/comments.model.php');
require_once ('app/api/api-view.php');

class ApiCommentController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new CommentsModel();
        $this->view = new APIView();
        $this->data = file_get_contents("php://input"); //trae el cuerpo(body en postman) para agregar el comentario
    }

    // Lee la variable asociada a la entrada estandar y la convierte en JSON
    function getData() {
        return json_decode($this->data);
    }

    function getAll($params = null){
        $order = [];

        if (isset($_GET['sort'])) {           ///api/comments?sort=id_producto&order=asc
            $order['sort'] = $_GET['sort'];
            if (isset($_GET['order'])) {
                $order['order'] = $_GET['order'];
            }
        }
        $comments = $this->model->getAll($order);  //traigo todos los comentarios
        $this->view->response($comments, 200);
    }

    function getCommentsByProduct($params = null) {
        //  Traigo todos los coment de un producto en particular
        $idCommentProduct = $params[':ID'];
        $order = [];
        
        if (isset($_GET['sort'])) {           
            $order['sort'] = $_GET['sort'];
            if (isset($_GET['order'])) {
                $order['order'] = $_GET['order'];
            }
        }

        $comments = $this->model->getCommentsByProduct($idCommentProduct, $order);
        
        if($comments) {
            $this->view->response($comments, 200);
        } else {
            $this->view->response([], 404);
        }    
    }

    function add($params = null) {
        // Devuelve el JSON enviado por post
        $body = $this->getData();
        // Inserta el comentario
        $comentario  = $body->comentario;
        $puntaje  = $body->puntaje;
        $id_producto = $body->id_producto;

        $idComment = $this->model->insert($comentario, $puntaje, $id_producto);

        if ($idComment > 0) {
            $this->view->response("El comentario con el ID=$idComment se cargó correctamente.", 200);
        } else {
            $this->view->response("El comentario no se pudo agregar.", 500);
        }

    }

    function delete($params = null) {
        $idComment = $params[':ID'];
        
        $success = $this->model->remove($idComment);
        
        if ($success) {
            $this->view->response("El comentario con el ID=$idComment se borró exitosamente", 200);
        } else {
            $this->view->response("No existe ningun comentario para el id=$idComment", 404);
        }   
        
    }

}