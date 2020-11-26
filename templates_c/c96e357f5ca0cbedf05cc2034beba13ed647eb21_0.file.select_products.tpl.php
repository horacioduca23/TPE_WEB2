<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 21:58:53
  from 'C:\xampp\htdocs\TPE_WEB2\templates\select_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc0170da58fb4_35880573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c96e357f5ca0cbedf05cc2034beba13ed647eb21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\select_products.tpl',
      1 => 1606424332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc0170da58fb4_35880573 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Select de Categorias-->
<select name="id_categorias" class="form-control" type="text">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <option value=<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select><?php }
}
