<div class="modal" id="modalAgregarCategoria">

    <div class="modal-content">

        <h3>Agregar Categoría</h3>

        <form id="formAgregarCategoria">

            Nombre:<br>
            <input type="text" name="name" required><br><br>

            Descripción:<br>
            <input type="text" name="description" required><br><br>

            <button type="button" onclick="guardarCategoria()">Guardar</button>
            <button type="button" onclick="cerrarModal('modalAgregarCategoria')">Cancelar</button>

        </form>

    </div>
</div>