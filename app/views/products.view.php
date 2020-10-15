<?php

class ProductsView {             
    
    //TENGO TODO MEZCLADO EN ESTA CATERGORIA//HACER REFACT ASAP
    function showProducts($products){
        require_once 'templates/header.php';
        echo '
        <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
        
        <h2>PRODUCTOS</h2>
        

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

        echo '
        <form action="insertarProducto" method="POST" class="my-4">
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Marca</label>
                            <input name="marca" type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Talle</label>
                    <textarea name="talle" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label>Color</label>
                    <textarea name="color" class="form-control" rows="3"></textarea>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <h4>Categoria</h4>
                            <select name="id_categorias" class="form-control" type="text">
                                <option value="1">ZAPATILLA</option>
                                <option value="2">ZAPATO</option>
                                <option value="3">BOTINES</option>
                                <option value="4">OJOTAS</option>
                                <option value="5">SANDALIAS</option>
                                <option value="6">BORCEGO</option>
                            </select>
                    </div>
            </div> 
                <button type="submit" class="btn btn-success">Agregar producto</button>
        </form>
        ';
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