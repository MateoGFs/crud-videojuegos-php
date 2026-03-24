<div class="modal" id="modalEditarCategoria">

    <div class="modal-content">

        <h3>Editar Categoría</h3>

        <form id="formEditarCategoria">

            <input type="hidden" name="id" id="edit_cat_id">

            Nombre:<br>
            <input type="text" name="name" id="edit_cat_name" required><br><br>

            Descripción:<br>
            <input type="text" name="description" id="edit_cat_description" required><br><br>

            <button type="button" onclick="actualizarCategoria()">Actualizar</button>
            <button type="button" onclick="cerrarModal('modalEditarCategoria')">Cancelar</button>

        </form>

    </div>
</div>