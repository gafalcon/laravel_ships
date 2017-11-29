@extends ('main_template')

@section ('content')
    <h2>Nuevo Zarpe de Embarcación</h2>
    {!! Form::model($zarpe, ['route' => ['zarpe.update', $zarpe->id]]) !!}
        <div class="form-group">
            <label for="embarcacion_id">Embarcación</label>
            {{  Form::select('embarcacion_id', $embarcaciones, null, ["class" => "form-control", 'placeholder' => 'Seleccione embarcación...']) }}
        </div>

        <div class="form-group">
            <label for="capitan_id">Capitán</label>
            {{  Form::select('capitan_id', $capitanes, null, ["class" => "form-control", 'placeholder' => 'seleccione capitán']) }}
        </div>

        <div class="form-group">
            <label for="fecha_salida">Fecha de Salida</label>
            <div class="input-group date" data-provide="datepicker">
                {{ Form::text('fecha_salida', null, ["class"=>"form-control"]) }}
                <div class="input-group-addon">
                    ...
                    <!-- <span class="glyphicon glyphicon-th"></span> -->
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
     {!! Form::close() !!}
@endsection

@section ('extras_javascript')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" type="text/css" media="screen" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script>
     $('.datepicker').datepicker();
    </script>
@endsection
