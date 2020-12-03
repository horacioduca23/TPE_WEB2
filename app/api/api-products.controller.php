<?php

require_once ('app/models/products.model.php');
require_once ('app/api/api-view.php');

class ApiProductsController {

    private $model;
    private $view;

    function __construct(){
        $this->model = new ProductsModel();
        $this->view = new APIView();
        $this->data = file_get_contents("php://input");
    }

    // Lee la variable asociada a la entrada estandar y la convierte en JSON
    function getData() { 
        return json_decode($this->data); 
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
            $this->view->response("El producto con el ID=$idProduct se borró exitosamente", 200);
        } else {
            $this->view->response("No existe el producto con id=$idProduct", 404);
        }   
    }

    function add($params = null) {
        $body = $this->getData();
      
        $marca  = $body->marca;
        $talle  = $body->talle;
        $color  = $body->color;
        $id_categorias = $body->id_categorias;

        $id = $this->model->insert($marca, $talle, $color, $id_categorias);

        if ($id > 0) {
            $this->view->response("El producto con el ID=$id se agregó exitosamente.", 200);
        } else {
            $this->view->response("El producto no se pudo agregar.", 500);
        }

    }

    function edit($params = null) {
        $idProduct = $params[':ID'];
        $body = $this->getData();
      
        $marca  = $body->marca;
        $talle  = $body->talle;
        $color  = $body->color;
        $id_categorias = $body->id_categorias;

        $success = $this->model->update($idProduct, $marca, $talle, $color, $id_categorias);

        if ($success) {
            $this->view->response("El producto con el ID=$idProduct se actualizo exitosamente.", 200);
        } else {
            $this->view->response("El producto no se pudo actualizar.", 400);
        }

    }

    function show404() {
        $this->view->response("El recurso solicitado no existe.", 404);

    }
}