@extends('plantillas/mainPlantilla')

@section('mainContent')

<br><br>
    <div class="container">
    <h4>Sign up</h4>
    <hr size="4px" color="black"> 
    </div>
    

    <div class="container">
    
        <div class="col" >
            

            <form action="{{route('register')}}" class="needs-validation was-validates" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-sm">
                    <label  for="nombre" class="form-label">Nombre</label>
                    <input id="nombre" name ="nombre" type="text" class="form-control" placeholder="Nombre">
                    @if ($errors->has('nombre'))
                                <span class="text-danger">{{ $errors->first('nombre') }}</span>
                    @endif
                </div>

                <div class="col-sm">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input name = "apellido" type="text" class="form-control" placeholder= "Apellido" >
                    @if ($errors->has('apeliido'))
                                <span class="text-danger">{{ $errors->first('apellido') }}</span>
                    @endif
                </div>
                </div class="col-12">
                
                <div>
                </div class="col-12">
                    <label for="email" class="form-label">E-mail</label>
                    <input id="email" name ="email" type="text " class="form-control" placeholder= "email@gmail.com">
                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <label for="fecha" class="form-label">Fecha de nacimiento</label>
                    <input id="fecha" name ="fecha" type="date" class="form-control">
                    @if ($errors->has('fecha'))
                                <span class="text-danger">{{ $errors->first('fecha') }}</span>
                    @endif
                    <div>

                </div class="col-12">
                <label for="password" class="form-label">Contraseña</label>
                <input id="password" name ="password" type="password" class="form-control">
                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                <div>

                </div class="col-12">
                
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
