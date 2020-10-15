<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=BASE_URL?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatilleria</title>
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>  
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">ZAPATILLERIA ONLINE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex w-100">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Categorias <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="verProductoPublico">Productos <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories">Categorias Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products">Productos Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="logout" name="user_logged">admin@zapatilleria.com (LOGOUT)</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container"> <!-- Inicio del contenido principal -->