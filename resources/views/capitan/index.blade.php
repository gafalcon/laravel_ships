@extends ('main_template')

@section ('content')

    <link href="/css/capitan.css" rel="stylesheet">
    <h2>
        Lista de Capitanes
        <a class="btn btn-primary" href="/capitan/crear">Registrar nuevo</a>
    </h2>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar ...">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Buscar</button>
      </span>
    </div>
    <br/>
    <div class="row">
        @foreach ($captains as $captain)
            <div class="card col-lg-3" style="margin: 5px;">
                <section class="panel">
                    <div class="panel-body">
                <img src="{{ $captain->image }}" alt="" class="card-img-top" width="100" height="100" />
                <div class="card-body">
                    <h4 class="card-title">{{ $captain->name }}</h4>
                    <p class="card-text"><b>Cédula: </b>{{ $captain->cedula }}</p>
                    <p class="card-text"><b>Fecha de nacimiento: </b> {{ $captain->fecha_nacimiento }}</p>
                    <p class="card-text"><b>Último Zarpe: </b><a href="">Mar 12/12/2017 12:00</a></p>
                    <p class="card-text">
                        <a href="/capitan/{{ $captain->id }}/editar" class="btn btn-primary">Editar</a>
                        <a href="#" class="btn btn-danger" onclick="deleteModal({{ $captain->id }}, '{{ $captain->name }}')">Eliminar</a>
                    </p>
                    <p class="card-text">
                        <a href="#" class="btn btn-info">Ver lista de zarpes</a>
                    </p>
                </div>
                {!! Form::open(['method'=> 'delete', 'action' => ['CapitanController@destroy', $captain->id], "id" => "form_".$captain->id]) !!}
                {!! Form::close() !!}
                    </div>
                </section>
            </div>
        @endforeach
    </div>
    @include('components.modal_delete', ['model' => 'capitán'])
@endsection

@section ('extras_javascript')
    <script type="text/javascript" src="/js/delete_modal.js"></script>
@endsection
