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
            <a href= "{{ route('listGames') }}" type="submit" class="btn btn-primary btn-lg btn-block">Lista de juegos</a>
        </div>
        <br><br>
        <div class ="row">
            <a href= "{{ route('newGame') }}" type="submit" class="btn btn-primary btn-lg btn-block">Agregar Juegos</a>
        </div>
       
    </div>


@endsection