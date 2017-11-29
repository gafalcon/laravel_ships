@extends ('main_template')

@section ('content')
    <h2>Editar Capitán</h2>
    {!! Form::model($capitan, ['route' => ['capitan.update', $capitan->id], "files"=> true]) !!}
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
                {!! Form::selectRange('dia', 1, 31, 'dia', ["class" => "custom-select mb-2 mr-sm-2 mb-sm-0", "placeholder" => "dia"]) !!}

                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="mes" name="mes">
                    <option selected>mes</option>
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>

                {!! Form::selectRange('año', 1940, 2010, 'year', ['class' => 'custom-select mb-2 mr-sm-2 mb-sm-0', "placeholder" => "año"]) !!}
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                {!! Form::label('image', 'Foto') !!}
                {!! Form::file('image', ["class" => 'form-control-file', 'onchange' => 'putImage()']) !!}
            </div>
            <img id="target" src="{!! asset("storage/".$capitan->image) !!}" alt="" width="150" height="200" />
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
