<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 09:34:33
  from 'C:\xampp\htdocs\TPE_WEB2\templates\showRegisterForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc20b99640db3_41018182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8400b2668d957255e6dfc199ae28fced392c997e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\showRegisterForm.tpl',
      1 => 1606550045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc20b99640db3_41018182 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatilleria</title>
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>  

<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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

            <!-- <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
             <div class="alert alert-danger">
                 <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

             </div>
             <?php }?>
            -->

            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   <?php }
}
