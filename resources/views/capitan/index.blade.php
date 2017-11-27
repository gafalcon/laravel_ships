@extends ('template')

@section ('content')

    <link href="/css/capitan.css" rel="stylesheet">
    <h2>Lista de Capitanes</h2>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar ...">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Buscar</button>
      </span>
    </div>
    <br/>
    @foreach ($captains as $captain)
        <div class="card">
            <!-- <img src="https://toogoodbuilt.com/wp-content/uploads/2015/02/user-placeholder.jpg" alt="" class="card-img-top" /> -->
            <img src="{!! asset("storage/".$captain->image) !!}" alt="" class="card-img-top" width="200" height="300" />
            <div class="card-body">
                <h4 class="card-title">{{ $captain->name }}</h4>
                <p class="card-text"><b>Cédula: </b>{{ $captain->cedula }}</p>
                <p class="card-text"><b>Fecha de nacimiento: </b> {{ $captain->fecha_nacimiento }}</p>
                <p class="card-text"><b>Último Zarpe: </b><a href="">Mar 12/12/2017 12:00</a></p>
                <p class="card-text">
                    <a href="#" class="btn btn-primary">Editar</a>
                    <a href="#" class="btn btn-danger" onclick="deleteModal({{ $captain->id }}, '{{ $captain->name }}')">Eliminar</a>
                </p>
                <p class="card-text">
                    <a href="#" class="btn btn-info">Ver lista de zarpes</a>
                </p>
            </div>
            {!! Form::open(['method'=> 'delete', 'action' => ['CapitanController@destroy', $captain->id], "id" => "form_".$captain->id]) !!}
            {!! Form::close() !!}
        </div>
    @endforeach
    <div class="card-deck">
        <div class="card">
            <img src="https://toogoodbuilt.com/wp-content/uploads/2015/02/user-placeholder.jpg" alt="" class="card-img-top" />
            <div class="card-body">
                <h4 class="card-title">Capitan 1</h4>
                <p class="card-text"><b>Cédula: </b>123456789</p>
                <p class="card-text"><b>Fecha de nacimiento: </b>12/12/1980</p>
                <p class="card-text"><b>Último Zarpe: </b><a href="">Mar 12/12/2017 12:00</a></p>
                <p class="card-text">
                    <a href="#" class="btn btn-primary">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </p>
                <p class="card-text">
                    <a href="#" class="btn btn-info">Ver lista de zarpes</a>
                </p>
            </div>
        </div>

        <div class="card">
            <img src="https://toogoodbuilt.com/wp-content/uploads/2015/02/user-placeholder.jpg" alt="" class="card-img-top" />
            <div class="card-body">
                <h4 class="card-title">Capitan 2</h4>
                <p class="card-text"><b>Cédula: </b>123456789</p>
                <p class="card-text"><b>Fecha de nacimiento: </b>12/12/1980</p>
                <p class="card-text"><b>Último Zarpe: </b><a href="">Mar 12/12/2017 12:00</a></p>
                <p class="card-text">
                    <a href="#" class="btn btn-primary">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </p>
                <p class="card-text">
                    <a href="#" class="btn btn-info">Ver lista de zarpes</a>
                </p>
            </div>
        </div>

        <div class="card">
            <img src="https://toogoodbuilt.com/wp-content/uploads/2015/02/user-placeholder.jpg" alt="" class="card-img-top" />
            <div class="card-body">
                <h4 class="card-title">Capitan 3</h4>
                <p class="card-text"><b>Cédula: </b>123456789</p>
                <p class="card-text"><b>Fecha de nacimiento: </b>12/12/1980</p>
                <p class="card-text"><b>Último Zarpe: </b><a href="">Mar 12/12/2017 12:00</a></p>
                <p class="card-text">
                    <a href="#" class="btn btn-primary">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </p>
                <p class="card-text">
                    <a href="#" class="btn btn-info">Ver lista de zarpes</a>
                </p>
            </div>
        </div>
    </div>

    <br />
    <div class="card-deck">
        <div class="card">
            <img src="https://toogoodbuilt.com/wp-content/uploads/2015/02/user-placeholder.jpg" alt="" class="card-img-top" />
            <div class="card-body">
                <h4 class="card-title">Capitan 4</h4>
                <p class="card-text"><b>Cédula: </b>123456789</p>
                <p class="card-text"><b>Fecha de nacimiento: </b>12/12/1980</p>
                <p class="card-text"><b>Último Zarpe: </b><a href="">Mar 12/12/2017 12:00</a></p>
                <p class="card-text">
                    <a href="#" class="btn btn-primary">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </p>
                <p class="card-text">
                    <a href="#" class="btn btn-info">Ver lista de zarpes</a>
                </p>
            </div>
        </div>

        <div class="card">
            <img src="https://toogoodbuilt.com/wp-content/uploads/2015/02/user-placeholder.jpg" alt="" class="card-img-top" />
            <div class="card-body">
                <h4 class="card-title">Capitan 5</h4>
                <p class="card-text"><b>Cédula: </b>123456789</p>
                <p class="card-text"><b>Fecha de nacimiento: </b>12/12/1980</p>
                <p class="card-text"><b>Último Zarpe: </b><a href="">Mar 12/12/2017 12:00</a></p>
                <p class="card-text">
                    <a href="#" class="btn btn-primary">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </p>
                <p class="card-text">
                    <a href="#" class="btn btn-info">Ver lista de zarpes</a>
                </p>
            </div>
        </div>

        <div class="card">
            <img src="https://toogoodbuilt.com/wp-content/uploads/2015/02/user-placeholder.jpg" alt="" class="card-img-top" />
            <div class="card-body">
                <h4 class="card-title">Capitan 6</h4>
                <p class="card-text"><b>Cédula: </b>123456789</p>
                <p class="card-text"><b>Fecha de nacimiento: </b>12/12/1980</p>
                <p class="card-text"><b>Último Zarpe: </b><a href="">Mar 12/12/2017 12:00</a></p>
                <p class="card-text">
                    <a href="#" class="btn btn-primary">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </p>
                <p class="card-text">
                    <a href="#" class="btn btn-info">Ver lista de zarpes</a>
                </p>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Capitán</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Está seguro de eliminar capitán <span id="capitan_eliminar">nombre</span>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="deleteCaptain()">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section ('extras_javascript')
    <script>
     function deleteModal(capitan, nombre) {
         $("#capitan_eliminar").text(nombre).attr("cap_id", capitan);
         $('#exampleModal').modal("show");
     }
     function deleteCaptain(){
         var cap_id = $("#capitan_eliminar").attr("cap_id");
         $("#form_"+cap_id).submit();
     }
    </script>
@endsection
