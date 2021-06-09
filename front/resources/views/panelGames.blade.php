@extends('plantillas/mainPlantilla')

@section('mainContent')

<br><br>
    <div class="container">
    <h4>Panel de Juegos</h4>
    <hr size="4px" color="black"> 
    </div>


<br><br>
    <div class="container">
        <div class ="row">
            <a href= "{{ route('listGames') }}" type="submit" class="btn btn-primary btn-lg btn-block">Mis juegos</a>
        </div>
        <br><br>
        <div class ="row">
            <a href= "{{ route('newGame') }}" type="submit" class="btn btn-primary btn-lg btn-block">Agregar juegos</a>
        </div>
        <br><br>
        <div class ="row">
            <a href= "{{ route('sugerirTitulo') }}" type="submit" class="btn btn-primary btn-lg btn-block">Sugerir titulo</a>
        </div>
       
    </div>


@endsection