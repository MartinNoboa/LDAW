@extends('plantillas/mainPlantilla')

@section('mainContent')
<br><br>
    <div class="container">
        <h4>Agregar Título</h4>
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
        
        <form action="{{ route('title.crear') }}" enctype="multipart/form-data" class="needs-validation was-validates" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label for="" class="form-label">Nombre</label>
                    <input name="nombre" type="text" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <label for="" class="form-label">Edición</label>
                    <input name="edicion" type="text" class="form-control">
                </div>

                <div class="col-sm">
                    <label for="" class="form-label">Versión</label>
                    <input name="version" type="text" class="form-control">
                </div>
            </div>
                    <br>
                
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripción</label>
                    <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div>
                <label for="formFileSm" class="form-label">Foto</label>
                <input class="form-control form-control-sm" name="imagen" type="file">
            </div>
                
            <div class="col-12">
                <br>
                <button class="btn btn-primary btn-block" type="submit">Agregar</button>
            </div>

                            
        </form>



        
    </div>



@endsection