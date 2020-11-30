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

<div class="container">
    
        <h1 style='color:black'>Registrate en nuestro sitio:</h1>
        
        <form action="registrar" method="post" class="my-4">     
            
             <div class="form-group">
                <label>Ingrese un email válido:</label>
                    <input name="email" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>Ingrese su contraseña</label>
                      <input type="password" name="password" class="form-control">                  
            </div>

            <!-- {if $error}
             <div class="alert alert-danger">
                 {$error}
             </div>
             {/if}
            -->

            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
</div>

{include 'footer.tpl'}   