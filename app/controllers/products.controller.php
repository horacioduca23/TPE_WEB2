<?php
require_once 'app/models/products.model.php';
require_once 'app/views/products.view.php';
require_once 'app/models/categories.model.php';

class ProductsController {

    private $model;
    private $view;
    private $CategoriesModel;
    function __construct() {
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
        $this->CategoriesModel = new CategoriesModel();
        //LA VERIFICACION SIEMPRE ES RESPONSABILIDAD DEL CONTROLADOR
        //verifico que el usuario este logeado
        //$this->checkLogged();
    }


    function showProducts(){

        $this->checkLogged();
        $categories = $this->CategoriesModel->getAll();
        $products = $this->model->getAll();
        
        //actualizo la view
        $this->view->showProducts($products, $categories);

    }

    function showProductsPublic(){
        session_start();
        $products = $this->model->getAll();
        
        //actualizo la view
        $this->view->showPubProducts($products);
    }

    function showProductsDetails($id) {
        $details = $this->model->getProductDetail($id);
        $this->view->showProductsDetails($details);
    }

    function editProduct($id) {
        $this->checkLogged();
        //llega el pedido del usuario para editar => le pido al model el id del producto en este caso
        $product = $this->model->get($id);

       //actualizo la view
       $this->view->showProduct($product);
    }

    function saveProduct() {
        $this->checkLogged();
        if(isset($_POST["botonGuardar"])){
            $marca = $_POST["marca"];
            $talle = $_POST["talle"];
            $color = $_POST["color"];
            $id = $_POST["idProducto"];    //se encuentra oculto en el form

            $this->model->guardarProducto($id, $marca, $talle, $color);
            header("Location: " . BASE_URL . "products");      //redirijo a products
        }  
    }

    function deleteProduct($id) {
        $this->checkLogged();
        $this->model->remove($id);
        header("Location: " . BASE_URL . "products"); 
    }

    
    function addProduct() {
        $this->checkLogged();
        $marca = $_POST['marca'];
        $talle = $_POST['talle'];
        $color = $_POST['color'];
        $id_categorias = $_POST['id_categorias'];
        // Verifico campos obligatorios
        if (empty($marca) || empty($talle)){
            $this->view->showError('Faltan datos obligatorios');
            die();
        }
    
        // Inserto el producto en la DB
        $id = $this->model->insertProduct($marca, $talle, $color, $id_categorias);

        // Redirigimos a products
        header("Location: " . BASE_URL . "products"); 
    }

    //Barrera de seguridad para usuario logeado
    function checkLogged(){
        session_start();
        if(!isset($_SESSION ['ID_USER'])) {
            header("Location: " . BASE_URL . "login");
            die;
        }
    }

}