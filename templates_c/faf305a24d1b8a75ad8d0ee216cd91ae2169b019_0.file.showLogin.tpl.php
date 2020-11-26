<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-27 00:42:09
  from 'C:\xampp\htdocs\TPE_WEB2\templates\showLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc03d51b373e4_03802494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faf305a24d1b8a75ad8d0ee216cd91ae2169b019' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\showLogin.tpl',
      1 => 1606434120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_login.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc03d51b373e4_03802494 (Smarty_Internal_Template $_smarty_tpl) {
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
        
        <?php $_smarty_tpl->_subTemplateRender('file:form_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
    </main> <!-- Fin del contenido principal -->

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
    <?php }
}
