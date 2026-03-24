document.addEventListener("DOMContentLoaded", function () {
    cargarCategorias();
});

function cargarCategorias() {

    let buscar = document.getElementById("buscarCategoria").value;

    fetch("acciones/categories/listar.php?buscar=" + buscar)
    .then(res => res.json())
    .then(data => {

        let tabla = document.getElementById("tablaCategorias");
        tabla.innerHTML = "";

        data.forEach(cat => {

            tabla.innerHTML += `
                <tr>
                    
                    <td>${cat.name}</td>
                    <td>${cat.description}</td>

                    <td>
                        <button onclick="cargarEditarCategoria('${cat.id}','${cat.name}','${cat.description}')">✏️</button>
                        <button onclick="cargarEliminarCategoria('${cat.id}')">🗑️</button>
                    </td>
                </tr>
            `;
        });
    });
}

function guardarCategoria(){

    let form = new FormData(document.getElementById("formAgregarCategoria"));

    fetch("acciones/categories/guardar.php",{
        method:"POST",
        body:form
    })
    .then(res=>res.text())
    .then(()=>{
        cerrarModal("modalAgregarCategoria");
        cargarCategorias();
    });
}

function actualizarCategoria(){

    let form = new FormData(document.getElementById("formEditarCategoria"));

    fetch("acciones/categories/actualizar.php",{
        method:"POST",
        body:form
    })
    .then(res=>res.text())
    .then(()=>{
        cerrarModal("modalEditarCategoria");
        cargarCategorias();
    });
}

function eliminarCategoria(){

    let form = new FormData(document.getElementById("formEliminarCategoria"));

    fetch("acciones/categories/eliminar.php",{
        method:"POST",
        body:form
    })
    .then(res=>res.text())
    .then(()=>{
        cerrarModal("modalEliminarCategoria");
        cargarCategorias();
    });
}

function cargarEditarCategoria(id,name,description){

    document.getElementById("edit_cat_id").value = id;
    document.getElementById("edit_cat_name").value = name;
    document.getElementById("edit_cat_description").value = description;

    abrirModal("modalEditarCategoria");
}

function cargarEliminarCategoria(id){

    document.getElementById("delete_cat_id").value = id;

    abrirModal("modalEliminarCategoria");
}