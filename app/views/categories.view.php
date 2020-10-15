<?php

class CategoriesView {             
    
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
                <li><a href=verCategoria/$category->id>$category->nombre</a></li> <p>$category->descripcion</p>
                <a class='btn btn-warning btn-sm' href='editarCategoria/$category->id'>EDITAR</a>
                <a class='btn btn-danger btn-sm' href='eliminarCategoria/$category->id'>ELIMINAR</a>
                </li>"; 
        }
        echo "</ul>";

        require_once 'templates/form_alta.php';
        require_once 'templates/footer.php';
    }

    function showError($msg) {
        echo "<h1> ERROR!</h1>";
        echo "<h2> $msg </h2>";
    }
    
   
    function showCategory($category) {
        require_once 'templates/header.php';
        echo '
        <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
        
        <h2>CATEGORÍAS</h2>
                      
        <h1>Edite la Categoria: ' . $category->nombre . '</h1>

        <form action="guardarCategoria/' . $category->nombre . '" method="POST" class="my-4">

            <input name="idCategoria" type="hidden" value="' . $category->id . '">

            <p>Nombre: <input type="text" name="nombre" value="' . $category->nombre . '"></p>   

            <p>Descripcion: <input type="text" name="descripcion" value="' . $category->descripcion . '"></p>  

            
            <input type="submit" name="botonGuardar" class="btn btn-info" value="Guardar">
        </form>
        ';
        require_once 'templates/footer.php';
    } 

    function showProductsByCategory($products) {
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

