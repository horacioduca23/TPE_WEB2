<?php

require_once ('libs/routerAvanzado/Router.php');
require_once ('app/api/api-products.controller.php');
require_once ('app/api/api-comments.controller.php');

// Primero creo un objeto(instancia) de la 'libreria' routerAvanzado
$router = new Router();

// Defino la tabla de ruteo. Declaro los caminos o "endpoints"

// router-api de la parte de comentarios
$router->addRoute('comments', 'GET', 'ApiCommentController', 'getAll'); //Obtengo todos los comentarios de la API
$router->addRoute('products/:ID/comments','GET','ApiCommentController','getCommentByProduct');  //Muestra los comentarios de un producto en particular a partir del ID
$router->addRoute('comments','POST','ApiCommentController','add');   //Agrega un comentario de forma CSR
$router->addRoute('comments/:ID','DELETE','ApiCommentController','delete'); //Elimina un comentario s/ ID

// router-api correspondiente a los productos
$router->addRoute('products','GET','ApiProductsController','getAll');    //obtengo todos los productos
$router->addRoute('products/categories/:ID_CATEGORIES','GET','ApiProductsController','getProductsByCat');     //obtengo por api los productos de una cat especifica
//$router->addRoute('products/nombre/:NOMBRE/:MARCA','GET','ApiProductsController','getProductosPorNombre');      //obtengo por api los productos s/ nombre
$router->addRoute('products/:ID','GET','ApiProductsController','get');     //obtengo un producto por id
$router->addRoute('products/:ID','DELETE','ApiProductsController','delete');   //elimin prod por id
$router->addRoute('products','POST','ApiProductsController','add');    //agrega un nuevo producto
$router->addRoute('products/:ID','PUT','ApiProductsController','edit');  //edita un prod

// Rutea
$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']) ; // ve el recurso + el verbo (get, put, post, delete)    