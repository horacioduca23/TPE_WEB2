<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 06:13:28
  from 'C:\xampp\htdocs\TPE_WEB2\templates\form_alta.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbf39788e3c00_74955157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1dc3057eb0213f816ec43eff5c8eb3608a7e4d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\form_alta.php',
      1 => 1602653900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbf39788e3c00_74955157 (Smarty_Internal_Template $_smarty_tpl) {
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
