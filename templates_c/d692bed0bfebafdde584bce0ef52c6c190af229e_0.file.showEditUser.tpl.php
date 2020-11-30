<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 07:20:25
  from 'C:\xampp\htdocs\TPE_WEB2\templates\showEditUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc33da97339e2_95388973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd692bed0bfebafdde584bce0ef52c6c190af229e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\showEditUser.tpl',
      1 => 1606630814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc33da97339e2_95388973 (Smarty_Internal_Template $_smarty_tpl) {
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
    
    <div class="container">  

        <h4>Asigne roles a los usuarios </h4>
        <form action="editedUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" method="post" class="my-4">
            <input name="idUser" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
 class="form-control">
                <label>Email : <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
 </label><br>
                    <input name="userName" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
 class="form-control">
                <label>Elija un rol</label>
                <select name="rol" type="number" class="form-control">
                    <option value="1" selected>Administrador</option>
                    <option value="0">Usuario</option>
                </select><br>
            <button type="submit" class="btn btn-success">Aceptar</button>      
        </form>
    </div>   
   
   <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;

</body>
</html>
    <?php }
}
