<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 22:50:30
  from 'C:\xampp\htdocs\TPE_WEB2\templates\form_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc023266d38c8_30473814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e1d33511d93f4b590b68d5c3cdcbc424cfddff1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\form_products.tpl',
      1 => 1606427351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:select_products.tpl' => 1,
  ),
),false)) {
function content_5fc023266d38c8_30473814 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de producto -->
<form action="insertarProducto" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Marca</label>
                <input name="marca" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Talle</label>
        <textarea name="talle" class="form-control" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label>Color</label>
        <textarea name="color" class="form-control" rows="3"></textarea>
    </div>
    
    <div class="form-group">
        <h4>Categoria</h4>
            <?php $_smarty_tpl->_subTemplateRender('file:select_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <button type="submit" class="btn btn-success">Agregar producto</button>
</form><?php }
}
