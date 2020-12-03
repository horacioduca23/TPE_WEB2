<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 09:57:53
  from 'C:\xampp\htdocs\TPE_WEB2\templates\showProductsByCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc4b411db2b49_53791458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9277f83d2b544616369ad3ea6740e2b2660122be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\showProductsByCategory.tpl',
      1 => 1606726656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc4b411db2b49_53791458 (Smarty_Internal_Template $_smarty_tpl) {
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
            
            <h2>Lista de productos de la categoria: <?php echo $_smarty_tpl->tpl_vars['products']->value[0]->nombre;?>
</h2>
                <a href="home"> Volver </a>
                <table>
                    <thead>
                            <tr>
                                <th>Marca</th>
                                <th>Talle</th>
                                <th>Color</th>
                            </tr>
                    <thead>
                    
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->talle;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->color;?>
</td>
                            </tr>        
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                    </tbody>    
                </table>

    </main> <!-- Fin del contenido principal -->

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
    <?php }
}
