@extends('plantillas/ejemploPlantilla')

@section('seccion')


<!-------------------------------------------- Falta agregar css para landing ------------------------------------------>
    <div id = "body" class = "container">
        <div class="row justify-content-center ">
            <h2 id = "titulo" class = "row justify-content-center">Miembros del equipo 7 </h2>
            <table>
                <tbody>
                   <a href = "{{ route ('samuel') }}" class = "btn btn-outline-dark" type= "button">Samuel Gonzalez</a>
                   &nbsp
                   <a href = "{{ route ('martin') }}" class = "btn btn-outline-dark" type= "button">Martin Noboa</a>
                   &nbsp
                </tbody> 
            </table>
        </div>
    </div>

@endsection

