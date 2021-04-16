
@extends('plantillas/ejemploPlantilla')

@section('seccion')

    
        <h3>Samuel Octavio Gonzalez Azpeitia</h3>
        <h3>A01704696</h3>
        <img src="{{ url('img/samy.jpg') }}" alt="" style="width:300px; height:350px">
        <h4>Hobbies</h4>
        <p>
            Soy una persona muy tranquila que cuando no esta en la escuela en sus tiempos 
            libres me gusta jugar futbol, salir con mis amighos y ver películas. Mis vacaciones
            siempre me gusta más ir a la playa.
        </p>
        <h4>Experiencia:</h4>
        <p>
            Tengo un año de experiencia en desarrollo web con el proyecto del
            semestre pasado de bloque 1 y ahora con bloque 2.
            Lenguages y frameworks que conozco: HTML, Javascript, CSS, PHP, Bootstrap
            y ahora en proceso de aprender Laravel
        </p>
        
        <a href = "{{ route ('atras') }}" class = "btn btn-primary">Atras</a>
    

@endsection