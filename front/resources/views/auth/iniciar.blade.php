@extends('plantillas/mainPlantilla')

@section('mainContent')

<br><br>
    <div class="container">
    <h4>Log in</h4>
    <hr size="4px" color="black"> 
    </div>
    


    <div class="container">
    
        <form action="">
            
            <div class="row">
                <label for="" class="form-label">Usuario</label>
                <input type="text" class="form-control">
            </div>

            <div class="row">
                <label for="" class="form-label">Contraseña</label>
                <input type="password " class="form-control">
            </div>
            <br><br>
            <div class="row">
                
                <input type="button" value="Aceptar" class="btn btn-primary">
            </div>
    
        </form>
    </div>


@endsection
