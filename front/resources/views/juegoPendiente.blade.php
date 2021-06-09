@extends('plantillas/mainPlantilla')

@section('mainContent')

    <div class="container">
    <h4>Títulos Pendientes</h4>
    <hr size="4px" color="black"> 
    </div>

    @if($titles)
    
    <div class="container">
        @if(session('mensaje'))

            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('mensaje')}}
            </div>

        @endif
        </div>

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Aprobar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($titles as $title)
                <tr>
                
                    <th>{{ $title['id']}}</th>
                    <th>{{ $title['nombre']}}</th>
                    <th>
                        <form action="{{ route('titles.aprobar', $title['id'])}}" method="POST" class="d-inline">
                        @method('PUT')
                        @csrf
                        <button  type="submit" class="btn btn-success btn-circle btn-lg" ><i class="fas fa-check"></i></button>
                        </form> 
                    </th>
                                       
                    <th>
                        <form action="{{ route('titles.eliminar', $title)}}" method="POST" class="d-inline">
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
        <h5>No hay titulos pendientes registrados.</h5>
        </div>
        @endif
        
        

    </div>

  


@endsection