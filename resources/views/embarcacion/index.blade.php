@extends ('template')

@section ('content')
    <h2>Lista de embarcaciones</h2>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar ...">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Buscar</button>
      </span>
    </div>
    <br/>
    <div id="accordion" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Embarcación #1
                    </a>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p><b>Código:</b> codigo</p>
                            <p><b>Tipo:</b> Pesado</p>
                            <p><b>Capacidad:</b> 100</p>
                            <p><b>Dimensiones:</b> Dimension</p>
                        </div>
                        <div class="col">
                            <p>
                                <button class="btn btn-primary">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </p>
                            <p>
                                <button class="btn btn-info">Ver lista de zarpes</button>
                            </p>
                            <p><button class="btn btn-success">Zarpar</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Embarcación #2
                    </a>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingThree">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Embarcación #3
                    </a>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="headingThree">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Embarcación #4
                    </a>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="headingThree">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Embarcación #5
                    </a>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="headingThree">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Embarcación #6
                    </a>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
@endsection
