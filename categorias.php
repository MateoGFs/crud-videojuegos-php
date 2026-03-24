<?php include("layout/header.php"); ?>
<?php include("layout/sidebar.php"); ?>
<h2>Listado de Categorías</h2>

<div class="top">
    <input type="text" id="buscarCategoria" placeholder="Buscar...">
    <button onclick="cargarCategorias()">Buscar</button>
    <button onclick="abrirModal('modalAgregarCategoria')">➕ Agregar</button>
</div>

<table>
    <thead>
        <tr>
          
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody id="tablaCategorias"></tbody>

</table>

<?php include("modals/modal_agregar_categoria.php"); ?>
<?php include("modals/modal_editar_categoria.php"); ?>
<?php include("modals/modal_eliminar_categoria.php"); ?>

<script src="js/categorias.js"></script>
<script src="js/app.js"></script>
<?php include("layout/footer.php"); ?>