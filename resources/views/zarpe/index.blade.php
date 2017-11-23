
@extends ('template')

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
                <th scope="col">Fecha de Llegada</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>embarcacion</td>
                <td>capitan 1</td>
                <td>1/2/2017</td>
                <td>11/2/2017</td>
                <td><a class="btn btn-sm btn-info" href="">Ver más</a></td>
                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                <td><a class="btn btn-sm btn-danger" href="">Eliminar</a></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>embarcacion</td>
                <td>capitan 1</td>
                <td>1/2/2017</td>
                <td>11/2/2017</td>
                <td><a class="btn btn-sm btn-info" href="">Ver más</a></td>
                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                <td><a class="btn btn-sm btn-danger" href="">Eliminar</a></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>embarcacion</td>
                <td>capitan 1</td>
                <td>1/2/2017</td>
                <td>11/2/2017</td>
                <td><a class="btn btn-sm btn-info" href="">Ver más</a></td>
                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                <td><a class="btn btn-sm btn-danger" href="">Eliminar</a></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>embarcacion</td>
                <td>capitan 1</td>
                <td>1/2/2017</td>
                <td>11/2/2017</td>
                <td><a class="btn btn-sm btn-info" href="">Ver más</a></td>
                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                <td><a class="btn btn-sm btn-danger" href="">Eliminar</a></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>embarcacion</td>
                <td>capitan 1</td>
                <td>1/2/2017</td>
                <td>11/2/2017</td>
                <td><a class="btn btn-sm btn-info" href="">Ver más</a></td>
                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                <td><a class="btn btn-sm btn-danger" href="">Eliminar</a></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>embarcacion</td>
                <td>capitan 1</td>
                <td>1/2/2017</td>
                <td>11/2/2017</td>
                <td><a class="btn btn-sm btn-info" href="">Ver más</a></td>
                <td><a class="btn btn-sm btn-primary"  href="">Editar</a></td>
                <td><a class="btn btn-sm btn-danger" href="">Eliminar</a></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>embarcacion</td>
                <td>capitan 1</td>
                <td>1/2/2017</td>
                <td>11/2/2017</td>
                <td><a class="btn btn-sm btn-info" href="">Ver más</a></td>
                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                <td><a class="btn btn-sm btn-danger" href="">Eliminar</a></td>
            </tr>


            <tr>
                <th scope="row">1</th>
                <td>embarcacion</td>
                <td>capitan 1</td>
                <td>1/2/2017</td>
                <td>11/2/2017</td>
                <td><a class="btn btn-sm btn-info" href="">Ver más</a></td>
                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                <td><a class="btn btn-sm btn-danger" href="">Eliminar</a></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>embarcacion</td>
                <td>capitan 1</td>
                <td>1/2/2017</td>
                <td>11/2/2017</td>
                <td><a class="btn btn-sm btn-info" href="">Ver más</a></td>
                <td><a class="btn btn-sm btn-primary" href="">Editar</a></td>
                <td><a class="btn btn-sm btn-danger" href="">Eliminar</a></td>
            </tr>
        </tbody>
    </table>
@endsection
