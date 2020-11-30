<?php
require_once 'app/controllers/categories.controller.php';
require_once 'app/controllers/products.controller.php';
require_once 'app/controllers/auth.controller.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);


switch ($params[0]) {
    
    // Rutas de autenticacion
    
    case 'login':
        $controller = new AuthController();
        $controller->showLogin();
    break;

    case 'verify':
    $controller = new AuthController();
    $controller->loginUser();
    break;

    case 'logout':
        $controller = new AuthController();
        $controller->logout();
    break;

    // Rutas admin

    case 'permits':    //Muestra el formulario para modificar los permisos de otros usuarios
        $controller = new AuthController();
        $controller->showUsers();  
    break;

    case 'editUser':    //Muestra el formulario para editar un usuario
        $controller = new AuthController();
        $controller->editUser($params[1]);  
    break;

    case 'editedUser':    //Confirma el nuevo rol de un usuario
        $controller = new AuthController();
        $controller->editedUser();  
    break;

    case 'deleteUser':    //Confirma el nuevo rol de un usuario
        $controller = new AuthController();
        $controller->deleteUser($params[1]);  
    break;

    case 'categories':
        $controller = new CategoriesController();
        $controller->showCategories();
    break;

    case 'insertar':
        $controller = new CategoriesController();
        $controller->addCategory();
    break;

    case 'eliminarCategoria':    //eliminar/:ID
        $controller = new CategoriesController();
        $id = $params[1];
        $controller->deleteCategory($id);
    break;

    case 'editarCategoria':
        $controller = new CategoriesController();
        $id = $params[1];
        $controller->editCategory($id);
    break;

    case 'guardarCategoria':
        $controller = new CategoriesController();
        $id = $params[1];
        $controller->saveCategory($id);
    break;

    case 'products':    //Muestra todos los productos
        $controller = new ProductsController();            
        $controller->showProducts();
    break;

    case 'editarProducto':
        $controller = new ProductsController();
        $id = $params[1];
        $controller->editProduct($id);
    break;
   
    case 'guardarProducto':
        $controller = new ProductsController();
        $id = $params[1];
        $controller->saveProduct($id);
    break;

    case 'eliminarProducto':    //eliminar/:ID
        $controller = new ProductsController();
        $id = $params[1];
        $controller->deleteProduct($id);
    break;

    case 'insertarProducto':
        $controller = new ProductsController();
        $controller->addProduct();
    break;

    // Rutas de acceso publico

    case 'home':
        $controller = new CategoriesController();
        $controller->showHome();
    break;

    case 'verProductoPublico':    //Muestra todos los productos
        $controller = new ProductsController();            
        $controller->showProductsPublic();
    break;

    case 'verCategoria':    // Muestra productos de una cat específica
        $controller = new CategoriesController();            
        $controller->showProductsByCategory($params[1]);
    break;

    case 'verProducto':    // Muestra descripcion de un producto
        $controller = new ProductsController();            
        $controller->showProductsDetails($params[1]);
    break;

    case 'about':
        echo "Pagina creada por Horacio Duca, estudiante de TUDAI";
        echo "<a href='home'> Volver </a>";
    break;

    // Rutas de registro

    case 'register':       // Muestra el formulario de REGISTRO
        $controller = new AuthController();
        $controller-> showRegisterForm();
    break;

    case 'registrar':       // Registra al usuario , desde ACTION del formulario
        $controller = new AuthController();
        $controller-> registerUser();
    break;

    default:
        header("HTTP/1.0 404 Not Found");
        echo('404 Page not found');
    break;
}



