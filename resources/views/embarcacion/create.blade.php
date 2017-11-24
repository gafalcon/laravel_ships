@extends ('template')

@section ('content')
    <h2>Nueva Embarcación</h2>
    <form method="POST" action="/embarcacion">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nombre">Nombre de Embarcación</label>
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese nombre">
        </div>
        <div class="form-group">
            <label for="codigo_barco">Código</label>
            <input type="text" name="codigo_barco" class="form-control" id="codigo" placeholder="código de embarcación">
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
            <label for="dimensiones">Dimensión</label>
            <input class="form-control" name="dimensiones" type="text" value="" id="dimension" placeholder="dimension" />
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
