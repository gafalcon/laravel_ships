@extends ('main_template')

@section ('content')
    <h2>Editar Capitán</h2>
    {!! Form::model($capitan, ['route' => ['capitan.update', $capitan->id], "files"=> true, "method" => "PUT"]) !!}
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name">Nombre</label>
                {!! Form::text('name', null, ["class" => "form-control", "placeholder" => "Nombre"]) !!}
            </div>
            <div class="form-group">
                <label for="cedula">Número de cédula</label>
                {!! Form::text('cedula', null, ["class" => "form-control", "placeholder"=>"cédula"]) !!}
            </div>

            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <div class="form-inline">
                {!! Form::selectRange('dia', 1, 31, $fecha_nacimiento->day, ["class" => "custom-select mb-2 mr-sm-2 mb-sm-0", "placeholder" => "dia"]) !!}

                {{  Form::select('mes', ["0"=> "mes", "1" => "Enero", "2" => "Febrero", "3" => "Marzo", "4" => "Abril", "5" => "Mayo", "6" => "Junio", "7" => "Julio", "8" => "Agosto", "9" => "Septiembre", "10" => "Octubre", "11" => "Noviembre", "12"=> "Diciembre"], $fecha_nacimiento->month, ["class" => "custom-select mb-2 mr-sm-2 mb-sm-0", 'placeholder' => 'mes']) }}

                {!! Form::selectRange('año', 1940, 2010, $fecha_nacimiento->year, ['class' => 'custom-select mb-2 mr-sm-2 mb-sm-0', "placeholder" => "año"]) !!}
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                {!! Form::label('image', 'Foto') !!}
                {!! Form::file('image', ["class" => 'form-control-file', 'onchange' => 'putImage()']) !!}
            </div>
            <img id="target" src="{!! $capitan->image !!}" alt="capitan" width="150" height="200" />
        </div>
    </div>

    <br/>

        <button type="submit" class="btn btn-lg btn-primary">Editar</button>

     {!! Form::close() !!}
@endsection

@section ('extras_javascript')
    <script>
     function showImage(src, target) {
         var fr = new FileReader();
         fr.onload = function(){
             target.src = fr.result;
         }
         fr.readAsDataURL(src.files[0]);
     }
     function putImage() {
         var src = document.getElementById("image");
         var target = document.getElementById("target");
         showImage(src, target);
     }
    </script>
@endsection
