document.addEventListener("DOMContentLoaded", function() {
    cargarDatos();
});

function abrirModal(id){
    document.getElementById(id).style.display="block";
    cargarCategoriasSelect();
}

function cerrarModal(id){
    document.getElementById(id).style.display="none";
}

function cargarDatos(){
    let buscar = document.getElementById("buscar").value;

    fetch("acciones/games/listar.php?buscar=" + buscar)
    .then(res => res.json())
    .then(data => {

        let tabla = document.getElementById("tablaBody");
        tabla.innerHTML = "";

        data.forEach(fila => {
            tabla.innerHTML += `
                <tr>
                    <td>${fila.title}</td>
                    <td>${fila.year}</td>
                    <td>${fila.size}</td>
                    <td>${fila.category ?? "Sin categoría"}</td>
                    <td>
                        <button onclick="cargarEditar('${fila.code}','${fila.title}','${fila.year}','${fila.size}','${fila.category_id}')">✏️</button>
                        <button onclick="cargarEliminar('${fila.code}')">🗑️</button>
                    </td>
                </tr>
            `;
        });

    });
}

function guardar(){

    let formulario = document.getElementById("formAgregar"); 
    let datos = new FormData(formulario); 

    fetch("acciones/games/guardar.php", {
        method: "POST",
        body: datos
    })
    .then(res => res.text())
    .then(() => {
        formulario.reset(); 
        cerrarModal("modalAgregar");
        cargarDatos();
    });
}

function actualizar(){
    let form = new FormData(document.getElementById("formEditar"));

    fetch("acciones/games/actualizar.php", {
        method: "POST",
        body: form
    })
    .then(res => res.text())
    .then(() => {
        cerrarModal("modalEditar");
        cargarDatos();
    });
}

function eliminar(){
    let form = new FormData(document.getElementById("formEliminar"));

    fetch("acciones/games/eliminar.php", {
        method: "POST",
        body: form
    })
    .then(res => res.text())
    .then(() => {
        cerrarModal("modalEliminar");
        cargarDatos();
    });
}

function cargarEditar(code,title,year,size,category){
    document.getElementById("edit_code").value = code;
    document.getElementById("edit_title").value = title;
    document.getElementById("edit_year").value = year;
    document.getElementById("edit_size").value = size;
    
    abrirModal("modalEditar");

    setTimeout(()=>{
        document.getElementById("edit_category_id").value = category;
    },200);
    
}

function cargarEliminar(code){
    document.getElementById("delete_code").value = code;
    abrirModal("modalEliminar");
}



function cargarCategoriasSelect() {
    fetch("acciones/categories/listar.php")
    .then(res => res.json())
    .then(data => {

        let selectAgregar = document.getElementById("category_id");
        let selectEditar = document.getElementById("edit_category_id");

        selectAgregar.innerHTML = '<option value="">Seleccione categoría</option>';
        selectEditar.innerHTML = '<option value="">Seleccione categoría</option>';

        data.forEach(cat => {
            let option = `<option value="${cat.id}">${cat.name}</option>`;
            selectAgregar.innerHTML += option;
            selectEditar.innerHTML += option;
        });
    });
}