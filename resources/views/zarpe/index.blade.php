
@extends ('main_template')

@section ('content')

    <h2>Lista de Zarpes</h2>
    <br/>
    <form class="form-inline">

        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar ...">
            <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Buscar</button>
            </span>
        </div>
        <div class="form-check mb-2 mr-sm-2 mb-sm-0">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Mostrar Sólo Activos
            </label>
        </div>

    </form>
    <br/>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Embarcación</th>
                <th scope="col">Capitán</th>
                <th scope="col">Fecha de Salida</th>
                <th scope="col">Fecha de Arribo</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($zarpes as $zarpe)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $zarpe->embarcacion_id }}</td>
                    <td>{{ $zarpe->capitan_id }}</td>
                    <td>{{ $zarpe->fecha_salida }}</td>
                    <td>{{ $zarpe->fecha_arribo }}</td>
                    <td><a class="btn btn-sm btn-info" href="">Ver más</a></td>
                    <td><a href="/zarpe/{{ $zarpe->id }}/editar" class="btn btn-sm btn-primary" >Editar</a></td>
                    <td><button class="btn btn-sm btn-danger" onclick="deleteModal({{ $zarpe->id }}, '# {{ $zarpe->id }}')">Eliminar</button></td>
                </tr>

                {!! Form::open(['method'=> 'delete', 'action' => ['ZarpeController@destroy', $zarpe->id], "id" => "form_".$zarpe->id]) !!}
                {!! Form::close() !!}
            @endforeach
        </tbody>
    </table>
    @include('components.modal_delete', ['model' => 'zarpe'])
@endsection

@section ('extras_javascript')
    <script type="text/javascript" src="/js/delete_modal.js"></script>
@endsection
