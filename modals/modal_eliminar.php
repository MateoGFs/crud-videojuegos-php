<div class="modal" id="modalEliminar">
    <div class="modal-content">
        <h3>Confirmar Eliminación</h3>

        <form id="formEliminar">

            <input type="hidden" name="code" id="delete_code">

            <p>¿Seguro que desea eliminar este registro?</p>

            <button type="button" onclick="eliminar()">Eliminar</button>
            <button type="button" onclick="cerrarModal('modalEliminar')">Cancelar</button>

        </form>

    </div>
</div>