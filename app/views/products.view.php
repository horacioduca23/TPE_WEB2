<?php

class ProductsView {             
    
    //TENGO TODO MEZCLADO EN ESTA CATERGORIA//HACER REFACT ASAP
    function showProducts($products){
        require_once 'templates/header.php';
        echo '
        <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
        
        <h2>PRODUCTOS</h2>
        
        <form action="">
        
        </form>

        ';
        
        echo "<ul class='list-group list-group-flush mt-5'>";
        foreach($products as $product){
                echo "<li class='list-group-item'>
                <li><a href=verProducto/$product->id>$product->marca</a></li> <p>$product->talle</p> <p>$product->color</p>
                <a class='btn btn-warning btn-sm' href='editarProducto/$product->id'>EDITAR</a>
                <a class='btn btn-danger btn-sm' href='eliminarProducto/$product->id'>ELIMINAR</a>
                </li>"; 
        }
        echo "</ul>";

        require_once 'templates/select_products.php';

        require_once 'templates/form_products.php';

        require_once 'templates/footer.php';
    }

    function showError($msg) {
        echo "<h1> ERROR!</h1>";
        echo "<h2> $msg </h2>";
    }

    function showProductsDetails($details) {
        require_once 'templates/header.php';
        echo '
        <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
        
        <h2>Lista de productos de la categoria: ' . $details[0]->nombre . ' ' . $details[0]->marca . '</h2>
        
        <a href="products"> Volver </a>

        ';
        
        // imprime la tabla de productos
        echo "<table>
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Talle</th>
                        <th>Color</th>
                    </tr>
                <thead>
                <tbody>
        ";
        //la tabla debajo imprime el nombre de las categorias (id de las cat en vez del id del producto)
        echo '
                <tr>
                    <td>' . $details[0]->marca . '</td>       
                    <td>' . $details[0]->nombre . '</td>
                    <td>' . $details[0]->talle . '</td>
                    <td>' . $details[0]->color . '</td>
                </tr>
        ';
          
        echo 
            "</tbody>    
            </table>";
        require_once 'templates/footer.php';
    }

    function showProduct($product) {
        require_once 'templates/header.php';
        echo '
        <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
        
        <h2>PRODUCTOS</h2>
                      
        <h1>Edite el producto: ' . $product->marca . '</h1>

        <form action="guardarProducto/' . $product->marca . '" method="POST" class="my-4">

            <input name="idProducto" type="hidden" value="' . $product->id . '">

            <p>Ingrese la nueva marca: <input type="text" name="marca" value="' . $product->marca . '"></p>   

            <p>Ingrese el nuevo talle: <input type="text" name="talle" value="' . $product->talle . '"></p>  

            <p>Ingrese el nuevo color: <input type="text" name="color" value="' . $product->color . '"></p>  
          
            <input type="submit" name="botonGuardar" class="btn btn-info" value="Guardar">
        </form>
        ';
        require_once 'templates/footer.php';
    }

}