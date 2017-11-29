@extends ('template')

@section ('content')
    <h2>Nueva Zarpe de Embarcación</h2>
    <form>
        <div class="form-group">
            <label for="embarcacion">Embarcación</label>
            <select id="embarcacion" name="embarcacion" class="form-control">
                <option selected>Seleccione Embarcación</option>
                @foreach ($embarcaciones as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="capitan">Capitán</label>
            <select id="capitan" name="capitan" class="form-control" placeholder="seleccione capitan">
                <option selected>Seleccione capitán</option>
                @foreach ($capitanes as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_salida">Fecha de Salida</label>
            <div class="input-group date" data-provide="datepicker">
                <input type="text" class="form-control" id="fecha_salida">
                <div class="input-group-addon">
                    ...
                    <!-- <span class="glyphicon glyphicon-th"></span> -->
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection

@section ('extras_javascript')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" type="text/css" media="screen" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script>
     $('.datepicker').datepicker();
    </script>
@endsection
