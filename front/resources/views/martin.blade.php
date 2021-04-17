
@extends('plantilla')

@section('seccion')

    <div id = "bodyMartin" class="container-fluid">
        <div class="row justify-content-center">
        
            <h3 class="row justify-content-center">Martin Noboa</h3>
            <h3 class="row justify-content-center">A01704052</h3>
            <img src="{{ url('img/martin.jpeg') }}" alt="" style="width:300px; height:350px">
            
            <h4>Hobbies</h4>
            <ul>
                <li>Me gusta mucho leer, de todo un poco. El libro que me estoy leyendo ahora es "Existencialismo es un humanismo" de Sartre, 10/10 recomendado.</li>
                <li>Aparte de eso, cuando no estabamos en pandemia, disfrutaba salir con mis amigos.</li>
            </ul>
            <h4>Experiencia</h4>
            <ul>
                <li>Mi experiencia en desarrollo web viene de Bloque 1 y de mis proyectos personales.</li>
                <li>Por el momento, estoy cómodo desarrollando en HTML, CSS,PHP y Javascript. Los frameworks que se manejar son UIKit y un poco de Bootstrap</li>
                <li>En el futuro planeo trabajar con React, Vue Js y Angular, esto en proyectos personales solo para conocer los frameworks. Ya si me siento aventurero,usare Django para un proyecto personal igual.</li>
            </ul>
        </div>
  
        
        <div class="row justify-content-center">
           <div class="col-sm">
            </div>
            <div class="col-sm">
                <a id = "btnMartin" href = "{{ route ('atras') }}" role = "button" class = "btn btn-outline-dark mx-auto d-block" >Atras</a>
            </div>
            <div class="col-sm">
            </div>
        </div>

    </div>
    

@endsection