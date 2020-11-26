<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 06:20:16
  from 'C:\xampp\htdocs\TPE_WEB2\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbf3b1067a591_55251605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b72157dc60a5e23a1841ca47458ea71c73c3d75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\form_alta.tpl',
      1 => 1606368003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbf3b1067a591_55251605 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de categoria -->
<form action="insertar" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <textarea name="descripcion" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Agregar categoría</button>
</form>
<?php }
}
