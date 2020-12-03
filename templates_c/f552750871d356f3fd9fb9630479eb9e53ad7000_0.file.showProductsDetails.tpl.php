<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 03:13:02
  from 'C:\xampp\htdocs\TPE_WEB2\templates\showProductsDetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc849aebbe635_58354867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f552750871d356f3fd9fb9630479eb9e53ad7000' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\showProductsDetails.tpl',
      1 => 1606961552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_comments.tpl' => 1,
    'file:Vue/comments.vue' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc849aebbe635_58354867 (Smarty_Internal_Template $_smarty_tpl) {
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
        
        <h2>Detalles del producto: <?php echo $_smarty_tpl->tpl_vars['details']->value[0]->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['details']->value[0]->marca;?>
</h2>
        
        <a href="home"> Volver </a>     
        
        <table>
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Talle</th>
                    <th>Color</th>
                </tr>
            <thead>
            <tbody>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['details']->value[0]->marca;?>
</td>       
                    <td><?php echo $_smarty_tpl->tpl_vars['details']->value[0]->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['details']->value[0]->talle;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['details']->value[0]->color;?>
</td>
                </tr>
            </tbody>    
        </table><br>

        <input id="idProd" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['details']->value[0]->producto_id;?>
>
        
        <?php if ((isset($_SESSION['ID_USER']))) {?>
        <input id="rol" type="hidden" value=<?php echo $_SESSION['ROL'];?>
>

        <?php $_smarty_tpl->_subTemplateRender('file:form_comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender('file:Vue/comments.vue', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </main> <!-- Fin del contenido principal -->

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="js/comments.js"><?php echo '</script'; ?>
>
</body>
</html>
    <?php }
}
