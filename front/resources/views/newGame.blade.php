@extends('plantillas/mainPlantilla')

@section('mainContent')
<br><br>
    <div class="container">
        <h4>Agregar Juego</h4>
        <hr size="4px" color="black"> 
    </div>
    
    <div class="container">
        @if(session('mensaje'))

            <div class="alert alert-success">
                {{ session('mensaje')}}
            </div>

        @endif
    </div>
    <div class="container">
        
        <form action="{{ route('game.crear') }}" enctype="multipart/form-data" class="needs-validation was-validates" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label for="" class="form-label">Nombre</label>
                    <input name="nombre" type="text" class="form-control">
                </div>
            </div>

            
                
            <div class="col-12">
                <br>
                <button class="btn btn-primary btn-block" type="submit">Agregar</button>
            </div>

                            
        </form>



        
    </div>



@endsection