<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 08:50:36
  from 'C:\xampp\htdocs\TPE_WEB2\templates\showUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc352cc750c01_75394466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79da97a0821266529d56d6ea47ef45e7eedb759a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\showUsers.tpl',
      1 => 1606636071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc352cc750c01_75394466 (Smarty_Internal_Template $_smarty_tpl) {
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
?>;
    
    <?php $_prefixVariable1 = 1;
$_smarty_tpl->_assignInScope('rol', $_prefixVariable1);
if ($_prefixVariable1) {?> <!--esto esta re mal, no hace nada 29/11-->

        <table  class="table table-hover table-dark" style='width:900px'>
        <tr style='color:orange'><th scope='col'><h1>Usuario</h1></th><th scope='col'><h1>Rol</h1></th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?> 
                <tr>
                <td> <b> <?php echo strtoupper($_smarty_tpl->tpl_vars['user']->value->email);?>
 </b> </td>
                <td> <b> <?php echo strtoupper($_smarty_tpl->tpl_vars['user']->value->rol);?>
</b> </td>
                <td scope='col'> <a href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="btn btn-link"><b style='color:orange'>Borrar Usuario</b> </a>
                <td scope='col'> <a href="editUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="btn btn-link"><b style='color:orange'>Editar Usuario</b> </a>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    <?php }?>  
   <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;

</body>
</html>
    <?php }
}
