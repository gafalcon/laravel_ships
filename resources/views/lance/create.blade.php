@extends ('template')

@section ('content')
    <h2>Nuevo Lance</h2>
    <form>
        <div class="form-group">
            <label for="zarpe">Zarpe</label>
            <select id="zarpe" name="zarpe" class="form-control">
                <option value="">zarpe 1</option>
                <option value="">zarpe 2</option>
            </select>
        </div>

        <div class="form-group">
            <label for="capitan">Capitán</label>
            <select id="capitan" name="capitan" class="form-control">
                <option value="">capitan 1</option>
                <option value="">capitan 2</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_inicio">Fecha y Hora de Inicio</label>
            <div class="input-group date" data-provide="datepicker">
                <input type="text" class="form-control" id="fecha_inicio">
                <div class="input-group-addon">
                    ...
                    <!-- <span class="glyphicon glyphicon-th"></span> -->
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="fecha_fin">Fecha y Hora de Fin</label>
            <div class="input-group date" data-provide="datepicker">
                <input type="text" class="form-control" id="fecha_fin">
                <div class="input-group-addon">
                    ...
                    <!-- <span class="glyphicon glyphicon-th"></span> -->
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="temperatura">Temperatura</label>
            <input class="form-control" name="temperatura" id="temperatura" type="text" value="" placeholder="temperatura" />
        </div>

        <div class="form-group">
            <label for="posicion">Posición</label>
            <input class="form-control" name="posicion" type="text" value="" placeholder="posicion" id="posicion" />
        </div>

        <div class="form-group">
            <label for="toneladas">Toneladas de pesca</label>
            <input class="form-control" name="toneladas" id="toneladas" type="text" value="" placeholder="toneladas" />
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
