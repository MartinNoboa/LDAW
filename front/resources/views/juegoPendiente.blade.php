@extends('plantillas/mainPlantilla')

@section('mainContent')

    <div class="container">
    <h4>Títulos Pendientes</h4>
    <hr size="4px" color="black"> 
    </div>

    <div class="container">
        @if(session('mensaje'))

            <div class="alert alert-success alert-dismissible fade show">
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


        
        

    </div>

    <!-- Modal 
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Eliminar título 
            </div>
            <div class="modal-footer">
                <form action="{{ route('titles.eliminar', $title)}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                <button type="button" class="btn btn-danger">Eliminar</button>
                </form> 
            </div>
            </div>
        </div>
    </div>
    -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aprobar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Aprobar título 
            </div>
            <div class="modal-footer">
                
                <button  href="{{ route('titles.aprobar', $title)}}" type="button" class="btn btn-success">Aprobar</button>
            </div>
            </div>
        </div>
        </div>




@endsection