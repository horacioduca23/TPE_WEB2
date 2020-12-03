<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 02:54:58
  from 'C:\xampp\htdocs\TPE_WEB2\templates\form_comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc84572b68787_74641350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91ca92b2ac71ff495beb06be73f14d8be12c7e3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\form_comments.tpl',
      1 => 1606960472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc84572b68787_74641350 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
    <h4>Agregue un comentario debajo</h4>

    <div class="my-4">
        <div class="form-group">
            <label>Comentario: </label>
            <textarea name="comentario" id="comentario" class="form-control"> </textarea>
        </div>
        <div class="form-group">
            <label>Qué le pareció el producto?: </label>
            <select name="puntaje" id="puntaje" class="form-control">
                <option value="1">1-Malo</option>
                <option value="2">2-Regular</option>
                <option value="3">3-Bueno</option>
                <option value="4">4-Muy bueno</option>
                <option value="5">5-Me encanto</option>

            </select>
        </div>
        <button id="btnAgregar" class="btn btn-success">Agregar comentario</button>
    </div>
</div>









<?php }
}
