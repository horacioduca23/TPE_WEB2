<?php

require_once ('app/models/products.model.php');
require_once ('app/api/api-view.php');

class ApiProductsController {

    private $model;
    private $view;

    function __construct(){
        $this->model = new ProductsModel();
        $this->view = new APIView();
    }

    function getAll($params = null) {
        $products = $this->model->getAll();
        $this->view->response($products, 200);
    }

    function get($params = null) {
        // $params es un array asociativo con los parametros de la ruta (en este caso solo ID)
        $idProduct = $params[':ID'];        //Obtengo ID del prod. Esta es la forma q tiene este router de tener params genericos, (1, 10, 500 o 0)
        $product = $this->model->get($idProduct);
        if($product)
            $this->view->response($product, 200);
        else 
            $this->view->response("El producto con el id=$idProduct no existe en esta API", 404);
    }

    function delete($params = null) {
        $idProduct = $params[':ID'];
        $success = $this->model->remove($idProduct);
        if ($success) {
            $this->view->response("La tarea con el ID=$idProduct se borró exitosamente", 200);
        } else {
            $this->view->response("No existe el producto con id=$idProduct", 404);
        }   
    }
}