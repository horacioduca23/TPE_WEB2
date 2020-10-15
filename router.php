<?php
require_once 'app/controllers/categories.controller.php';
require_once 'app/controllers/products.controller.php';
require_once 'app/controllers/auth.controller.php';
require_once 'app/controllers/pubcategories.controller.php';
require_once 'app/controllers/pubproducts.controller.php';
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

    // Rutas Admin
switch ($params[0]) {
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
    case 'verCategoria':    // Muestra productos de una cat específica
        $controller = new CategoriesController();            
        $controller->showProductsByCategory($params[1]);
    break;
    case 'products':    //Muestra todos los productos
        $controller = new ProductsController();            
        $controller->showProducts();
    break;
    case 'verProducto':    // Muestra descripcion de un producto
        $controller = new ProductsController();            
        $controller->showProductsDetails($params[1]);
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
    case 'about':
        echo "Pagina creada por Horacio Duca, estudiante de TUDAI";
    break;
    case 'insertarProducto':
        $controller = new ProductsController();
        $controller->addProduct();
    break;
    
    // Rutas Publicas
    case 'home':
        $controller = new PubCategoriesController();
        $controller->showHome();
    break;
    case 'verPubCategoria':    // Muestra productos de una cat específica
        $controller = new PubCategoriesController();            
        $controller->showPubCategory($params[1]);
    break;
    case 'verProductoPublico':    //Muestra todos los productos
        $controller = new PubProductsController();            
        $controller->showProductsPublic();
    break;
    case 'verDetallesPublico':    // Muestra descripcion de un producto
        $controller = new PubProductsController();            
        $controller->showPubProductsDetails($params[1]);
    break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo('404 Page not found');
    break;
}



