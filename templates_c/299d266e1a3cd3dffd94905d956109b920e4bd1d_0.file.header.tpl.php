<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 02:46:34
  from 'C:\xampp\htdocs\TPE_WEB2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc2fd7a45d755_67718824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299d266e1a3cd3dffd94905d956109b920e4bd1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\header.tpl',
      1 => 1606614393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc2fd7a45d755_67718824 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
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

                <?php if ((isset($_SESSION['ID_USER']))) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="categories">Categorias Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products">Productos Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="permits">Permisos Admin</a>
                        </li>
                        <li class="nav-item ml-auto">
                        <a class="nav-link" href="logout" name="user_logged"><?php echo ($_SESSION['EMAIL_USER']);?>
 (LOGOUT)</a>
                        </li>            
                <?php }?>
            
            </ul>
        </div>
    </nav>
</header><?php }
}
