"use strict";

const app = new Vue({
    el: "#app-comments",    // Es similar a un QuerySelector, el:elemento, "..."->le digo donde trabajará Vue
    data: {
        footer: "Comentarios renderizados desde Vue utilizando ClientSideRender",
        comments: [],       // Esto es como un assign de Smarty
        rol: "",
        average: 0,
    },
    methods: {
        deleteComment: function (id) {
            deleteComment(id);
        },
    },  
}); 

let id_producto = document.querySelector("#idProd").value;
let esAdmin = document.querySelector("#rol");

document.addEventListener('DOMContentLoaded', e => {
    if(esAdmin){
        app.rol = esAdmin.value;
    } 
    console.log(app.rol);
    getCommentsByProduct();
    
    if(app.rol==1 || app.rol==0){

        document.querySelector('#btnAgregar').addEventListener('click', e => {
            e.preventDefault();
            addComment(id_producto);    
        }); 

/*         document.querySelector('#deleteComment').addEventListener('click', e => {
            e.preventDefault();  
        });  */
    }

})

    // Obtiene los comments de un prod en particular s/ ID
 async function getCommentsByProduct() {   
 
    let suma = 0;
    let cont = 0;
    try {
        const response = await fetch('api/products/' + id_producto + '/comments');  
        const comments = await response.json();
        app.comments = comments;

         //Calcula el promedio de los puntajes
        for (let comment of comments) {
            suma += parseInt(comment.puntaje, 10);
            cont++;
        }
        app.average = parseFloat(suma / cont).toFixed(2);

    } catch(e) {
        console.log(e);
    }
}

// Agrega comentarios a un producto
async function addComment(id_producto) {     //paramentro idProd no esta definido aun (hidden en form comments)
    
    // Me traigo los datos ingresados en el comentario
    const comment = {
        comentario: document.querySelector('#comentario').value,
        puntaje: document.querySelector('#puntaje').value,
        id_producto: id_producto,       //el idProd es el input hidden que no pude agregar, falta esto.     
    };

    // Pego el rdo en la API
    try {
        const response = await fetch('api/comments' , { //OTRO FETCH QE NO ANDA!! PEGO EL RDO EN LOS COMENTARIOS O SOLO EN api/products/id/comments ???
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(comment)
        }); 
    
        getCommentsByProduct();  
    } catch(e) {
        console.log(e);
    }
    document.querySelector('#comentario').value = "";
    document.querySelector('#puntaje').innerHTML = "";
} 

// Elimina comentarios de un producto

async function deleteComment(id_producto) {
    // Elimino un comentario de la API
    
    try {
        const response = await fetch('api/comments/' + id_producto , { //OTRO FETCH QE NO ANDA!! PEGO EL RDO EN LOS COMENTARIOS O SOLO EN api/products/id/comments ???
            method: 'DELETE',
        }); 
        getCommentsByProduct();  

    } catch(e) {
        console.log(e);
    }
}