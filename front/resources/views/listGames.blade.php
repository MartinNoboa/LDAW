@extends('plantillas/mainPlantilla')

@section('mainContent')

    <div class="container">
    <h4>Mis Juegos</h4>
    <hr size="4px" color="black"> 
    </div>

    <div class="container">
        @if(session('mensaje'))

            <div class="alert alert-success alert-dismissible fade show">
                {{ session('mensaje')}}
            </div>

        @endif
    </div>

    @if($games)

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($games as $game)
                <tr>
                
                    <th>{{ $game['id']}}</th>
                    <th>{{ $game['nombre']}}</th>
                    <th>
                        <form action="{{ route('games.eliminar', $game)}}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                            <button type="submit" class="btn btn-danger btn-circle btn-lg" > <i class="fas fa-times"></i> </button>
                        </form> 
                    </th>             
                                   
                </tr>
                @endforeach
            </tbody>
        </table>

        @else
        <div class="container">
        <h5>No hay juegos registrados.</h5>
        </div>
        @endif 
        

    </div>

@endsection