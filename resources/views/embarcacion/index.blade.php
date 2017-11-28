@extends ('template')

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
        <div class="col" >
            <h5 class="mb-0" style="padding: 15px; font-weight: bold;">
                Nombre
                <span class="float-right">Código</span>
            </h5>
        </div>
    </div>
    <div id="accordion" role="tablist">
        @foreach ($embarcaciones as $embarcacion)
            <div class="card">
                <div class="card-header" role="tab" id="heading{{ $loop->iteration }}">
                    <a class="card-header-link" data-toggle="collapse" href="#collapse{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapseOne">
                        <h6 class="mb-0" style="font-weight: bold;">
                            <span class="float-right">{{ $embarcacion->codigo_barco }}</span>
                             {{ $embarcacion->nombre }}
                        </h6>
                    </a>
                </div>

                <!-- Content -->
                <div id="collapse{{ $loop->iteration }}" class="collapse" role="tabpanel" aria-labelledby="heading{{ $loop->iteration }}" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
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
                            <div class="col">
                                <img src="{{ $embarcacion->photo }}" alt="" class="card-img-top" />
                            </div> 
                            <div class="col">
                                <p>
                                    <a href="/zarpe?embarcacion={{ $embarcacion->id }}" class="btn btn-info">Ver lista de zarpes</a>
                                </p>
                                <p><button class="btn btn-success">Zarpar</button></p>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::open(['method'=> 'delete', 'action' => ['EmbarcacionController@destroy', $embarcacion->id], "id" => "form_".$embarcacion->id]) !!}
                {!! Form::close() !!}
            </div>
        @endforeach
    </div>

    @include('components.modal_delete', ['model' => 'embarcación'])
@endsection

@section ('extras_javascript')
    <script type="text/javascript" src="/js/delete_modal.js"></script>
@endsection
