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

    {include 'header.tpl'};
    
    {if $rol=1} <!--esto esta re mal, no hace nada 29/11-->

        <table  class="table table-hover table-dark" style='width:900px'>
        <tr style='color:orange'><th scope='col'><h1>Usuario</h1></th><th scope='col'><h1>Rol</h1></th>
            {foreach $users item= user} 
                <tr>
                <td> <b> {strtoupper($user->email)} </b> </td>
                <td> <b> {strtoupper($user->rol)}</b> </td>
                <td scope='col'> <a href="deleteUser/{$user->id}" class="btn btn-link"><b style='color:orange'>Borrar Usuario</b> </a>
                <td scope='col'> <a href="editUser/{$user->id}" class="btn btn-link"><b style='color:orange'>Editar Usuario</b> </a>
                </tr>
            {/foreach}
        </table>
    {/if}  
   {include 'footer.tpl'};

</body>
</html>
    