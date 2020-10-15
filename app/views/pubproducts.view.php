<?php

class PubProductsView {             
    
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
                <li><a href=verDetallesPublico/$product->id>$product->marca</a></li> <p>$product->talle</p> <p>$product->color</p>
                </li>"; 
        }
        echo "</ul>";

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

}