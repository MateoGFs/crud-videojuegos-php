<div class="modal" id="modalEditar">
    <div class="modal-content">
        <h3>Editar Videojuego</h3>

        <form id="formEditar">

            Código:<br>
            <input type="text" name="code" id="edit_code" readonly><br><br>

            Título:<br>
            <input type="text" name="title" id="edit_title" required><br><br>

            Año:<br>
            <input type="text" name="year" id="edit_year" required><br><br>

            Tamaño:<br>
            <input type="text" name="size" id="edit_size" required><br><br>
            Categoría:<br>
            <select name="category_id" id="edit_category_id" required>
                <option value="">Seleccione categoría</option>
            </select><br><br>

            <button type="button" onclick="actualizar()">Actualizar</button>
            <button type="button" onclick="cerrarModal('modalEditar')">Cancelar</button>
        </form>

    </div>
</div>