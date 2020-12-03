<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatilleria</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>  

{include 'header.tpl'}

    <main class="container"> <!-- Inicio del contenido principal -->       
        
        <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
        
        <h2>PRODUCTOS</h2>  
            <ul class='list-group list-group-flush mt-5'>      
                {foreach from=$products item=product}
                    <li class='list-group-item'>
                        <li><a href='verProducto/{$product->id}'>{$product->marca}</a></li> <p>{$product->talle}</p> <p>{$product->color}</p>
                        <a class='btn btn-warning btn-sm' href='editarProducto/{$product->id}'>EDITAR</a>
                        <a class='btn btn-danger btn-sm' href='eliminarProducto/{$product->id}'>ELIMINAR</a>
                    </li> 
                {/foreach}
            </ul>
      
        {include 'form_products.tpl'}

    </main> <!-- Fin del contenido principal -->

{include 'footer.tpl'}

</body>
</html> 