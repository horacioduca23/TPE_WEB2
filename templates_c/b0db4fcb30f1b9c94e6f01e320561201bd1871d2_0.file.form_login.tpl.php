<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-27 00:40:57
  from 'C:\xampp\htdocs\TPE_WEB2\templates\form_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc03d09bb6561_19618019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0db4fcb30f1b9c94e6f01e320561201bd1871d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\form_login.tpl',
      1 => 1606433968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc03d09bb6561_19618019 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Form Login -->
<div class="mt-5 w-25 m-auto">
    <form method="POST" action="verify">
        <div class="form-group mt-5">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group form-check"> </div>
        <button type="submit" class="btn btn-dark">Log in</button>
    </form>
</div>
<?php }
}
