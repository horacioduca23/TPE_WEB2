<?php
require_once 'app/models/products.model.php';
require_once 'app/views/products.view.php';
require_once 'app/models/categories.model.php';
require_once 'app/helpers/auth.helper.php';

class ProductsController {

    private $model;
    private $view;
    private $CategoriesModel;
    private $authHelper;

    function __construct() {
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
        $this->CategoriesModel = new CategoriesModel();
        $this->authHelper = new AuthHelper();
        session_start();
        //LA VERIFICACION SIEMPRE ES RESPONSABILIDAD DEL CONTROLADOR
        //verifico que el usuario este logeado
        //$this->authHelper->checkLogged();
    }


    function showProducts(){

        $this->authHelper->checkLogged();
        $categories = $this->CategoriesModel->getAll();
        $products = $this->model->getAll();
        
        //actualizo la view
        $this->view->showProducts($products, $categories);

    }

    function showProductsPublic(){
        $products = $this->model->getAll();
        
        //actualizo la view
        $this->view->showPubProducts($products);
    }

    function showProductsDetails($id) {
        $details = $this->model->getProductDetail($id);
        $this->view->showProductsDetails($details);
    }

    function editProduct($id) {
        $this->authHelper->checkLogged();
        //llega el pedido del usuario para editar => le pido al model el id del producto en este caso
        $product = $this->model->get($id);

       //actualizo la view
       $this->view->showProduct($product);
    }

    function saveProduct() {
        $this->authHelper->checkLogged();
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
        $this->authHelper->checkLogged();
        $this->model->remove($id);
        header("Location: " . BASE_URL . "products"); 
    }

    
    function addProduct() {
        $this->authHelper->checkLogged();
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
        $id = $this->model->insert($marca, $talle, $color, $id_categorias);

        // Redirigimos a products
        header("Location: " . BASE_URL . "products"); 
    }

}