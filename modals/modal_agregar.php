<div class="modal" id="modalAgregar">
    <div class="modal-content">
        <h3>Agregar Videojuego</h3>

        <form id="formAgregar">
            

            Título:<br>
            <input type="text" name="title" required><br><br>

            Año:<br>
            <input type="number" name="year" min="1000" max="9999" required><br><br>

            Tamaño:<br>
            <input type="text" name="size" required><br><br>
            Categoría:<br>
            <select name="category_id" id="category_id" required>
                <option value="">Seleccione categoría</option>
            </select><br><br>

            <button type="button" onclick="guardar()">Guardar</button>
            <button type="button" onclick="cerrarModal('modalAgregar')">Cancelar</button>
        </form>

    </div>
</div>