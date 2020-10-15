<?php

class PubCategoriesView {             
    
    //TENGO TODO MEZCLADO EN ESTA CATERGORIA//HACER REFACT ASAP
    function showCategories($categories){
        require_once 'templates/header.php';
        echo '
        <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
        
        <h2>CATEGORÍAS</h2>
        
        <form action="">
        
        </form>

        ';
        
        echo "<ul class='list-group list-group-flush mt-5'>";
        foreach($categories as $category){
                echo "<li class='list-group-item'>
                <li><a href=verPubCategoria/$category->id>$category->nombre</a></li> <p>$category->descripcion</p>
                </li>"; 
        }
        echo "</ul>";

        require_once 'templates/footer.php';
    }

    function showError($msg) {
        echo "<h1> ERROR!</h1>";
        echo "<h2> $msg </h2>";
    }

    function showPubProducts($products) {

        require_once 'templates/header.php';
        echo '
        <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
        
        <h2>Lista de productos de la categoria: ' . $products[0]->nombre . '</h2>
        
        <a href="categories"> Volver </a>

        ';
        
        // imprime la tabla de productos
        echo "<table>
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Talle</th>
                        <th>Color</th>
                    </tr>
                <thead>
                <tbody>
        ";
        foreach($products as $product) {
            echo "
                    <tr>
                        <td>$product->marca</td>
                        <td>$product->talle</td>
                        <td>$product->color</td>
                    </tr>
                ";
        }  
        echo 
            "</tbody>    
            </table>";
        require_once 'templates/footer.php';
    }

}