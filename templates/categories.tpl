    {include 'templates/header.php'}
    
    <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
    
    <h2>CATEGORÍAS</h2>
    
    <form action="">
    
    </form>

    <ul class='list-group list-group-flush mt-5'>
        {foreach from=$categories item=category}
            <li class='list-group-item'>
                <strong>{$category->nombre}</strong> | {$category->descripcion}
                <!--Si metiera otro boton o algo, deberia meter todo en un div -->
                <a class='btn btn-danger btn-sm' href='eliminar/{$category->id}'>ELIMINAR</a>
            </li> 
        {/foreach}
    </ul>

    <button class="btn btn-warning">Editar categoría</button>
    <button class="btn btn-danger">Quitar categoría</button>
    <button class="btn btn-info">Info</button>
    
    {include 'templates/footer.php'}