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
            
            <h2>Lista de productos de la categoria: {$products[0]->nombre}</h2>
                <a href="home"> Volver </a>
                <table>
                    <thead>
                            <tr>
                                <th>Marca</th>
                                <th>Talle</th>
                                <th>Color</th>
                            </tr>
                    <thead>
                    
                    <tbody>
                        {foreach from=$products item=product}
                            <tr>
                                <td>{$product->marca}</td>
                                <td>{$product->talle}</td>
                                <td>{$product->color}</td>
                            </tr>        
                        {/foreach}  
                    </tbody>    
                </table>

    </main> <!-- Fin del contenido principal -->

{include 'footer.tpl'}

</body>
</html>
    