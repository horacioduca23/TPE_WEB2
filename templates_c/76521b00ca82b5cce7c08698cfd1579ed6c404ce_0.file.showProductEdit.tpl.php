<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 22:18:10
  from 'C:\xampp\htdocs\TPE_WEB2\templates\showProductEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc01b924b75a8_62496426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76521b00ca82b5cce7c08698cfd1579ed6c404ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\showProductEdit.tpl',
      1 => 1606425463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc01b924b75a8_62496426 (Smarty_Internal_Template $_smarty_tpl) {
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

    <main class="container"> <!-- Inicio del contenido principal -->       
        
        <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
        
        <h2>PRODUCTOS</h2>
                      
        <h1>Edite el producto: <?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</h1>

        <form action="guardarProducto/<?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
" method="POST" class="my-4">

            <input name="idProducto" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">

            <p>Ingrese la nueva marca: <input type="text" name="marca" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
"></p>   

            <p>Ingrese el nuevo talle: <input type="text" name="talle" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->talle;?>
"></p>  

            <p>Ingrese el nuevo color: <input type="text" name="color" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->color;?>
"></p>  
          
            <input type="submit" name="botonGuardar" class="btn btn-info" value="Guardar">
        </form>

    </main> <!-- Fin del contenido principal -->

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
    <?php }
}
