<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 21:54:20
  from 'C:\xampp\htdocs\TPE_WEB2\templates\showError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc015fc5e0be1_86884138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '581d0a8c7cf4c340dcfc325784793f27e1882d8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\showError.tpl',
      1 => 1606424042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc015fc5e0be1_86884138 (Smarty_Internal_Template $_smarty_tpl) {
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
        
        <h2>CATEGORÍAS</h2>
        
        <h1>ERROR!</h1>
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
        <a href='<?php echo BASE_URL;?>
'>Volver</a>

    </main> <!-- Fin del contenido principal -->

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
    <?php }
}
