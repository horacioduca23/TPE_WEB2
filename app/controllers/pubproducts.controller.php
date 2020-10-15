<?php

require_once 'app/models/pubproducts.model.php';
require_once 'app/views/pubproducts.view.php';


class PubProductsController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new PubProductsModel();
        $this->view = new PubProductsView();
    }


    function showProductsPublic(){

        $products = $this->model->getAll();
        
        //actualizo la view
        $this->view->showProducts($products);
    }

    function showProductsDetails($id) {
        $details = $this->model->getProductDetail($id);
        $this->view->showProductsDetails($details);
    }

    function showPubProductsDetails($id) {
        $details = $this->model->getProductDetail($id);
        $this->view->showProductsDetails($details);
    }

}