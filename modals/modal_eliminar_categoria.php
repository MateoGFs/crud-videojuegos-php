<div class="modal" id="modalEliminarCategoria">

    <div class="modal-content">

        <h3>Eliminar Categoría</h3>

        <form id="formEliminarCategoria">

            <input type="hidden" name="id" id="delete_cat_id">

            <p>¿Seguro que deseas eliminar esta categoría?</p>

            <button type="button" onclick="eliminarCategoria()">Eliminar</button>
            <button type="button" onclick="cerrarModal('modalEliminarCategoria')">Cancelar</button>

        </form>

    </div>
</div>