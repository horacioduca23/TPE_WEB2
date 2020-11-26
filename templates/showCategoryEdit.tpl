<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatilleria</title>
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>  

{include 'header.tpl'}

    <main class="container"> <!-- Inicio del contenido principal -->       
        
        <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
        
        <h2>CATEGORÍAS</h2>
                      
        <h1>Edite la Categoria: {$category->nombre}</h1>

        <form action="guardarCategoria/{$category->nombre}" method="POST" class="my-4">

            <input name="idCategoria" type="hidden" value="{$category->id}">

            <p>Nombre: <input type="text" name="nombre" value="{$category->nombre}"></p>   

            <p>Descripcion: <input type="text" name="descripcion" value="{$category->descripcion}"></p>  

            
            <input type="submit" name="botonGuardar" class="btn btn-info" value="Guardar">
        </form>

    </main> <!-- Fin del contenido principal -->

{include 'footer.tpl'}

</body>
</html>
    