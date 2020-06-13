<!-- Modal Structure -->
<form action="{{route('users.destroy', 'text')}}" method="POST">
    @csrf
    @method('DELETE')
    <div id="eliminar" class="modal" style="width: 30%; height: 45%; border-radius: 15px;">
        <div class="modal-content center-align">
            <i class="material-icons large" style="color: #e57373">error_outline</i>
            <h4 style="color: gray">¿Eliminar?</h4>
            <p style="color: gray">Borraras el usuario...</p>
            <input type="hidden" name="category_id" id="category_id">
        </div>
        <div class="modal-footer">
            <div class="center-align">
                <button type="submit" class="waves-effect waves-light btn-flat blue lighten-1 white-text" style="border-radius: 15px;">
                    Aceptar
                </button>
                <a class="modal-close waves-effect waves-light btn-flat deep-orange accent-4 white-text" style="border-radius: 15px;">Cancelar</a>
            </div>
        </div>
    </div>
</form>
