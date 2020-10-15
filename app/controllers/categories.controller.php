<?php
require_once 'app/models/categories.model.php';
require_once 'app/views/categories.view.php';

class CategoriesController {
    
    private $model;
    private $view;

    function __construct() {
        $this->model = new CategoriesModel();
        $this->view = new CategoriesView();
        
        //LA VERIFICACION SIEMPRE ES RESPONSABILIDAD DEL CONTROLADOR
        //verifico que el usuario este logeado
        $this->checkLogged();

    }

    //Imprime las categorias
    function showCategories(){    

        //obtiene las CATEGORIAS del modelo (categories.model.php)
        $categories = $this->model->getAll();
        
        //actualizo la view
        $this->view->showCategories($categories);
    }

    /**
     * Inserta una categoria a la base de datos
     */
    function addCategory(){
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
        $this->model->remove($id);
        header("Location: " . BASE_URL);
    }

    /**
     * Edito la categoria en la base de datos
     */
    function editCategory($id) {
       //llega el pedido del usuario para editar => le pido al model el id de la categoria en este caso
        $category = $this->model->get($id);

       //actualizo la view
       $this->view->showCategory($category);
    }

    function saveCategory() {    
        if(isset($_POST["botonGuardar"])){
            $nombre = $_POST["nombre"];
            $descripcion = $_POST["descripcion"];
            $id = $_POST["idCategoria"];    //se encuentra oculto en el form

            $this->model->guardarCategoria($id, $nombre, $descripcion);
            header("Location: " . BASE_URL);
        }      
    }

    function showProductsByCategory($id) {
        $products = $this->model->getProductsByCategory($id);
        $this->view->showProductsByCategory($products);
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

