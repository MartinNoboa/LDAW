@extends('plantillas/mainPlantilla')

@section('mainContent')
<br><br>
    <div class="container">
        <h4>Agregar Juego</h4>
        <hr size="4px" color="black"> 
    </div>
    
    <div class="container">
        @if(session('mensaje'))

            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('mensaje')}}
                
            </div>

        @endif
    </div>
    <div class="container">

    @error('titulo')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                El titulo es obligatorio
                
            </div>
    @enderror
    @error('consola')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                La consola es obligatorio
                
            </div>
    @enderror
    @error('condicion')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                La condicion es obligatorio
                
            </div>
    @enderror
        
        <form action="{{ route('game.crear') }}" enctype="multipart/form-data" class="needs-validation was-validates" method="POST">
            @csrf
            

            <div class="form-group">
            <label for="" class="form-label">Título</label>
                <select name="titulo" class="form-control" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                    
                        <option value="" selected>Seleccionar Título</option>
                        @foreach($titles as $title)
                        <option name="titulo" value="{{$title['id']}}{{$title['nombre']}}">{{$title['nombre']}}</option>
                        @endforeach
                    
                </select>
            </div>

            <div class="form-group">
            <label for="" class="form-label">Consola</label>
                <select name="consola" class="form-control" name="consola">
                    <option value="" selected>Seleccionar Consola</option>
                    @foreach($consoles as $console)
                    <option name="consola" value="{{$console['id']}}{{$console['consola']}}">{{$console['consola']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
            <label for="" class="form-label">Condiciones</label>
                <select name="condicion" class="form-control" name="condicion">
                    <option value="" selected>Seleccionar Condiciones</option>
                    @foreach($conditions as $condition)
                        <option name="condicion" value="{{$condition['id']}}{{$condition['condicion']}}">{{$condition['condicion']}}</option>
                    @endforeach
                </select>
            </div>
           
                
            <div class="col-12">
                <br>
                <button class="btn btn-primary btn-block" type="submit">Agregar</button>
            </div>

                            
        </form>



        
    </div>



@endsection