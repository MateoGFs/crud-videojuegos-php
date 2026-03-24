<?php include("layout/header.php"); ?>
<?php include("layout/sidebar.php"); ?>

<h2>Listado de Videojuegos</h2>

<div class="top">
    <input type="text" id="buscar" placeholder="Buscar...">
    <button onclick="cargarDatos()">Buscar</button>
    <button onclick="abrirModal('modalAgregar')">➕ Agregar</button>
</div>

<table>
    <thead>
        <tr>
           
            <th>Título</th>
            <th>Año</th>
            <th>Tamaño</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody id="tablaBody">
    </tbody>
</table>

<?php include("modals/modal_agregar.php"); ?>
<?php include("modals/modal_editar.php"); ?>
<?php include("modals/modal_eliminar.php"); ?>

<script src="js/app.js"></script>
<?php include("layout/footer.php"); ?>