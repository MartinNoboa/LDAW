@extends('plantillas/mainPlantilla')

@section('nav')

<br><br>
    <div class="container">
    <h4>Sign up</h4>
    </div>
    <hr size="4px" color="black"> 

    <div class="container">
    
        <div class="col" >
            

            <form action="" class="needs-validation was-validates" novalidate>
            
            <div class="row">
                <div class="col-sm">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-sm">
                    <label for="" class="form-label">Apellido</label>
                    <input type="text" class="form-control">
                </div>
                </div class="col-12">
                <label for="" class="form-label">Usuario</label>
                <input type="text " class="form-control">
                <div>

                </div class="col-12">
                <label for="" class="form-label">E-mail</label>
                <input type="text " class="form-control">
                <div>

                </div class="col-12">
                <label for="" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control">
                <div>

                </div class="col-12">
                <label for="" class="form-label">Contraseña</label>
                <input type="text " class="form-control">
                <div>

                </div class="col-12">
                <label for="" class="form-label">Confirmar contraseña</label>
                <input type="password " class="form-control">
                <div>
                <br>
                </div class="col-12">
                
                <input type="submit" class="btn btn-primary">
                <div>

            </div>
            
            </form>



        </div>
    </div>



@endsection
