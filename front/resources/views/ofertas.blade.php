@extends('plantillas/mainPlantilla')

@section('mainContent')

<br><br>
    <div class="container">
    <h4>Ofertas</h4>
    <hr size="4px" color="black"> 
    </div>


    <div class="container d-grid gap-2 col-6 mx-auto">
        <p>
            <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Ofertas Realizadas
            </a>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                Ofertas Recibidas
            </button>
        </p>
        <div class="collapse" id="collapseExample">
        <div class="container">
        <h3>Ofertas Realizadas</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Juego</th>
                <th scope="col">Usuario</th>
                <th scope="col">Status</th>
                
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Pac Man</th>
                <td>@rodo99</td>
                <td><button type="button" class="btn btn-success btn-circle btn-lg"><i class="fas fa-check"></i></button></td>
                
                </tr>
                <tr>
                <th scope="row">Fifa</th>
                <td>@monkey78</td>
                <td><button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                <th scope="row">Spiderman</th>
                <td>@luise78</td>
                <td><button type="button" class="btn btn-success btn-circle btn-lg"><i class="fas fa-check"></i></button></td>
                
                </tr>
            </tbody>
        </table>
    </div>
        </div>

        <div class="collapse" id="collapseExample2">
        <div class="container">
        <h3>Ofertas Recibidas</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Juego</th>
                <th scope="col">Nombre</th>
                <th scope="col">Aprobar</th>
                <th scope="col">Cancelar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Pac Man</td>
                <td><button type="button" class="btn btn-success btn-circle btn-lg"><i class="fas fa-check"></i></button></td>
                <td><button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Spiderman</td>
                <td><button type="button" class="btn btn-success btn-circle btn-lg"><i class="fas fa-check"></i></button></td>
                <td><button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Fifa</td>
                <td><button type="button" class="btn btn-success btn-circle btn-lg"><i class="fas fa-check"></i></button></td>
                <td><button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fas fa-times"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
        </div>
    </div>

    



@endsection