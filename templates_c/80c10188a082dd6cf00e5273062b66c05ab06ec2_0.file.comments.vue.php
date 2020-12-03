<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 03:17:26
  from 'C:\xampp\htdocs\TPE_WEB2\templates\Vue\comments.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc84ab6d80be1_55835755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80c10188a082dd6cf00e5273062b66c05ab06ec2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\Vue\\comments.vue',
      1 => 1606961844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc84ab6d80be1_55835755 (Smarty_Internal_Template $_smarty_tpl) {
?>   <!--Para no darle bola a Smarty-->
<section id="app-comments">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Caja de comentarios: </h3>
        </div>

        <table id="list-coments" class="table table-hover table-dark" style='width:900px'>
            <tr style='color:orange' v-if="comments.length==0"><th scope='col'>No existe ningún comentario para este producto.</th></tr>
            <tr style='color:yellow' v-if="comments.length!=0"><th scope='col'>El promedio de puntuación para este producto es: {{ average }}</th></tr>
            <tr style='color:rgb(253, 252, 250)' v-if="comments.length!=0"><th scope='col'>Escrito el</th> <th scope='col'>Comentario</th><th scope='col'>Puntuación</th>
            <tr  v-for="comment in comments">
                <td><b> {{ comment.fecha }}</b></td>
                <td><b> {{ comment.comentario }}</b></td>
                <td><b> {{ comment.puntaje }}</b></td>
                <td scope='col'  v-if ="rol=='1'">  <button v-if="rol=='1'" v-on:click="deleteComment(comment.id)" class="btn btn-danger">Borrar</button></td>
            </tr>      
        </table>
        <div class="card-footer text-muted">
            {{ footer }}
        </div>
    </div>
</section> 
<?php }
}
