<?php
require_once 'app/models/categories.model.php';
require_once 'app/views/categories.view.php';
require_once 'app/helpers/auth.helper.php';

class CategoriesController {
    
    private $model;
    private $view;
    private $authHelper;

    function __construct() {
        $this->model = new CategoriesModel();
        $this->view = new CategoriesView();
        $this->authHelper = new AuthHelper();
        session_start();
        //LA VERIFICACION SIEMPRE ES RESPONSABILIDAD DEL CONTROLADOR
        //verifico que el usuario este logeado
        //$this->authHelper->checkLogged();

    }

    //Muestra el home para usuarios publicos
    function showHome(){    

        //obtiene las CATEGORIAS del modelo (categories.model.php)
        $categories = $this->model->getAll();
        
        //actualizo la view
        $this->view->showPubCategories($categories);
        
    }

    //Imprime las categorias
    function showCategories(){    
        
        //LA VERIFICACION SIEMPRE ES RESPONSABILIDAD DEL CONTROLADOR
        //verifico que el usuario este logeado
        $this->authHelper->checkLogged();
        
        //obtiene las CATEGORIAS del modelo (categories.model.php)
        $categories = $this->model->getAll();
        
        //actualizo la view
        $this->view->showCategories($categories);
    }

    /**
     * Inserta una categoria a la base de datos
     */
    function addCategory(){
        $this->authHelper->checkLogged();
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        // Verifico campos obligatorios
        if (empty($nombre)){
            $this->view->showError('Faltan datos obligatorios');
            die();
        }
        
        // Inserto la categoria en la DB
        $id = $this->model->insert($nombre, $descripcion);
        // Redirigimos a categorias
        
        header("Location: " . BASE_URL); 
    }

    /**
     * Elimina la categoria del sistema o BD
     */
    function deleteCategory($id){
        $this->authHelper->checkLogged();
        $this->model->remove($id);
        header("Location: " . BASE_URL);
    }

    /**
     * Edito la categoria en la base de datos
     */
    function editCategory($id) {
        $this->authHelper->checkLogged();
       //llega el pedido del usuario para editar => le pido al model el id de la categoria en este caso
        $category = $this->model->get($id);

       //actualizo la view
       $this->view->showCategory($category);
    }

    /**
     * Guarda la categoria editada
     */
    function saveCategory() {    
        $this->authHelper->checkLogged();
        if(isset($_POST["botonGuardar"])){
            $nombre = $_POST["nombre"];
            $descripcion = $_POST["descripcion"];
            $id = $_POST["idCategoria"];    //se encuentra oculto en el form

            $this->model->guardarCategoria($id, $nombre, $descripcion);
            header("Location: " . BASE_URL);
        }      
    }

    /**
     * Muestra los detalles de la categoria y muestra todos los articulos de la misma
     */
    function showProductsByCategory($id) {
        $products = $this->model->getProductsByCategory($id);
        $this->view->showProductsByCategory($products);
    }

    /**
     * Muestra la categoria publica
     */
/*     function showPubCategory($id) {
        $products = $this->model->getProductsByCategory($id);
        $this->view->showPubProducts($products);
        session_start();
    } */


}

