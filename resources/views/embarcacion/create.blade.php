@extends ('template')

@section ('content')
    <h2>Nueva Embarcación</h2>
    <form>
        <div class="form-group">
            <label for="nombre">Nombre de Embarcación</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre">
        </div>
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" placeholder="código de embarcación">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo de embarcación</label>
            <select id="tipo" name="tipo" class="form-control">
                <option value="1">Pesados atuneros</option>
                <option value="2">Livianos sardineros</option>
            </select>
        </div>
        <div class="form-group">
            <label for="capacidad">Capacidad</label>
            <input class="form-control" name="capacidad" type="text" value="" placeholder="capacidad" />
        </div>
        <div class="form-group">
            <label for="dimension">Dimensión</label>
            <input class="form-control" name="dimension" type="text" value="" id="dimension" placeholder="dimension" />
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
