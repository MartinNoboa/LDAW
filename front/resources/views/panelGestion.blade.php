@extends('plantillas/mainPlantilla')

@section('mainContent')

<br><br>
    <div class="container">
    <h4>Panel de Gestión</h4>
    <hr size="4px" color="black"> 
    </div>


<br><br>
    <div class="container">
        <div class ="row">
            <a href= "{{ route('title.index') }}" type="submit" class="btn btn-primary btn-lg btn-block">Títulos Pendientes</a>
        </div>
        <br><br>
        <div class ="row">
            <a href= "{{ route('titulo') }}" type="submit" class="btn btn-primary btn-lg btn-block">Agregar Título</a>
        </div>
       
    </div>


@endsection