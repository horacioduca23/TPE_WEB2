<?php
require_once 'app/models/pubcategories.model.php';
require_once 'app/views/pubcategories.view.php';

class PubCategoriesController {
    
    private $model;
    private $view;

    function __construct() {
        $this->model = new PubCategoriesModel();
        $this->view = new PubCategoriesView();
        session_start();
    }

    //Muestra el home para usuarios publicos
    function showHome(){    

        //obtiene las CATEGORIAS del modelo (categories.model.php)
        $categories = $this->model->getAll();
        
        //actualizo la view
        $this->view->showCategories($categories);
    }

    function showPubCategory($id) {
        $products = $this->model->getPubProducts($id);
        $this->view->showPubProducts($products);
    }
}  
  