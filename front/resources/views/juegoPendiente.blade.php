@extends('plantillas/mainPlantilla')

@section('mainContent')

<br><br>
    <div class="container">
    <h4>Juegos Pendientes</h4>
    <hr size="4px" color="black"> 
    </div>

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
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



@endsection