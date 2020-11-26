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
        
        <h2>Detalles del producto: {$details[0]->nombre} {$details[0]->marca}</h2>
        
        <a href="home"> Volver </a>     
        
        <table>
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Talle</th>
                    <th>Color</th>
                </tr>
            <thead>
            <tbody>
                <tr>
                    <td>{$details[0]->marca}</td>       
                    <td>{$details[0]->nombre}</td>
                    <td>{$details[0]->talle}</td>
                    <td>{$details[0]->color}</td>
                </tr>
            </tbody>    
        </table>

    </main> <!-- Fin del contenido principal -->

{include 'footer.tpl'}

</body>
</html>
    