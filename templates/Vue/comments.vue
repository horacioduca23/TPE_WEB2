{literal}   <!--Para no darle bola a Smarty-->
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
{/literal}