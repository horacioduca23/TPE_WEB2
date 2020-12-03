<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 08:04:07
  from 'C:\xampp\htdocs\TPE_WEB2\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc73c674fd6e1_91399315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '848e44977217cdeb3366764026a6068ee6563a50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\products.tpl',
      1 => 1606890423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_products.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc73c674fd6e1_91399315 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
</head>
<body>  

<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class="container"> <!-- Inicio del contenido principal -->       
        
        <h1>BIENVENIDOS A ZAPATILLERIA ONLINE</h1>
        
        <h2>PRODUCTOS</h2>  
            <ul class='list-group list-group-flush mt-5'>      
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <li class='list-group-item'>
                        <li><a href='verProducto/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</a></li> <p><?php echo $_smarty_tpl->tpl_vars['product']->value->talle;?>
</p> <p><?php echo $_smarty_tpl->tpl_vars['product']->value->color;?>
</p>
                        <a class='btn btn-warning btn-sm' href='editarProducto/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'>EDITAR</a>
                        <a class='btn btn-danger btn-sm' href='eliminarProducto/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'>ELIMINAR</a>
                    </li> 
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
      
        <?php $_smarty_tpl->_subTemplateRender('file:form_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </main> <!-- Fin del contenido principal -->

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html> <?php }
}
