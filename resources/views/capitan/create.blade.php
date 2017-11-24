@extends ('template')

@section ('content')
    <h2>Nuevo Capitán</h2>
    <form method="POST" action="/capitan">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese nombre">
        </div>
        <div class="form-group">
            <label for="cedula">Número de cédula</label>
            <input name="cedula" type="text" class="form-control" id="cedula" placeholder="cédula">
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <div class="input-group date" data-provide="datepicker">
                <input name="fecha_nacimiento" type="text" class="form-control" id="fecha_nacimiento">
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
