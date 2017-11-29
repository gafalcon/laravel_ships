@extends ('main_template')

@section ('content')
    <style type="text/css">
     .card-header-link:hover{
         text-decoration: none;
     }
    </style>
    <h2>Lista de embarcaciones
        <a class="btn btn-primary" href="/embarcacion/crear">Registrar nueva</a>
    </h2>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar ...">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Buscar</button>
      </span>
    </div>
    <div class="row">
        <div class="col-lg-12" >
            <h5 class="mb-0" style="padding: 15px; font-weight: bold;">
                Nombre
                <span class="float-right">Código</span>
            </h5>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group m-bot20" id="accordion">
                @foreach ($embarcaciones as $embarcacion)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $loop->iteration }}">
                                    <span class="float-right">{{ $embarcacion->codigo_barco }}</span>
                                    {{ $embarcacion->nombre }}
                                </a>
                            </h4>
                        </div>

                        <div id="collapse{{ $loop->iteration }}" class="panel-collapse collapse ">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p><b>Tipo:</b>
                                            @if ($embarcacion->tipo == "1")
                                                Pesado atunero
                                            @else
                                                Liviano sardinero
                                            @endif
                                        </p>
                                        <p><b>Capacidad:</b> {{ $embarcacion->capacidad }}</p>
                                        <p><b>Dimensiones:</b> {{ $embarcacion->dimensiones }}</p>
                                        <p>
                                            <a href="/embarcacion/{{ $embarcacion->id }}/editar" class="btn btn-primary">Editar</a>
                                            <a href="#" class="btn btn-danger" onclick="deleteModal({{ $embarcacion->id }}, '{{ $embarcacion->nombre }}')">Eliminar</a>
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="{{ $embarcacion->photo }}" alt="" class="card-img-top" width="200" height="200" />
                                    </div> 
                                    <div class="col-lg-4">
                                        <p>
                                            <a href="/zarpe?embarcacion={{ $embarcacion->id }}" class="btn btn-info">Ver lista de zarpes</a>
                                        </p>
                                        <p><button class="btn btn-success">Zarpar</button></p>
                                    </div>
                                </div>
                                {!! Form::open(['method'=> 'delete', 'action' => ['EmbarcacionController@destroy', $embarcacion->id], "id" => "form_".$embarcacion->id]) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
        @endforeach
            </div>
        </div>
    </div>
    </div>

    @include('components.modal_delete', ['model' => 'embarcación'])
@endsection

@section ('extras_javascript')
    <script type="text/javascript" src="/js/delete_modal.js"></script>
@endsection
