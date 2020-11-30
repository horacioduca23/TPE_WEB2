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
    
    <div class="container">  

        <h4>Asigne roles a los usuarios </h4>
        <form action="editedUser/{$user->id}" method="post" class="my-4">
            <input name="idUser" type="hidden" value={$user->id} class="form-control">
                <label>Email : {$user->email} </label><br>
                    <input name="userName" type="hidden" value={$user->email} class="form-control">
                <label>Elija un rol</label>
                <select name="rol" type="number" class="form-control">
                    <option value="1" selected>Administrador</option>
                    <option value="0">Usuario</option>
                </select><br>
            <button type="submit" class="btn btn-success">Aceptar</button>      
        </form>
    </div>   
   
   {include 'footer.tpl'};

</body>
</html>
    