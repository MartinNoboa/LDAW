@extends('plantillas/mainPlantilla')

@section('mainContent')
<br><br>
    <div class="container">
        <h4>Agregar Título</h4>
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

    @error('nombre')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                El nombre es obligatorio
                
            </div>
    @enderror
    @error('edicion')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                La edicion es obligatorio
                
            </div>
    @enderror
    @error('version')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                La version es obligatorio
                
            </div>
    @enderror
    @error('descripcion')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                La descripcion es obligatorio
                
            </div>
    @enderror
    @error('imagen')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                La imagen es obligatorio
                
            </div>
    @enderror
    
        
        <form action="{{ route('title.crear') }}" enctype="multipart/form-data" class="needs-validation was-validates" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label for="" class="form-label">Nombre</label>
                    <input name="nombre" type="text" class="form-control" value="{{old('nombre')}}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <label for="" class="form-label">Edición</label>
                    <input name="edicion" type="text" class="form-control" value="{{old('edicion')}}">
                </div>

                <div class="col-sm">
                    <label for="" class="form-label">Versión</label>
                    <input name="version" type="text" class="form-control" value="{{old('version')}}">
                </div>
            </div>
                    <br>
                
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripción</label>
                    <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{old('descripcion')}}"></textarea>
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