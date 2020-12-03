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
                    <a class="nav-link" href="about">About (en construccion)</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="register" >Registrarse</a>
                </li>
                <li class="nav-item ml-auto active">    
                    <a class="nav-link" href="login">Login</a>
                </li>

                {if (isset($smarty.session.ID_USER)) && ($smarty.session.ROL=='1')}
                        <li class="nav-item">
                            <a class="nav-link" href="categories">Categorias Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products">Productos Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="permits">Permisos Admin</a>
                        </li>
                {/if}
                {if (isset($smarty.session.ID_USER))}
                    <li class="nav-item ml-auto">
                    <a class="nav-link" href="logout" name="user_logged">{($smarty.session.EMAIL_USER)} (LOGOUT)</a>
                    </li> 
                {/if}               
            
            </ul>
        </div>
    </nav>
</header>