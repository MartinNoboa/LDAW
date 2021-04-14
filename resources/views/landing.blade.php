@extends('plantilla')

@section('seccion')


<!-------------------------------------------- Falta agregar css para landing ------------------------------------------>
    <div class = "container">
        <h2>Miembros del equipo 7 </h2>
        <table>
            <tbody>
               <a href = "{{ route ('samuel') }}" class = "btn btn-primary">Samuel Gonzalez</a>
               &nbsp
               <a href = "{{ route ('martin') }}" class = "btn btn-primary">Martin Noboa</a>
               &nbsp
            </tbody> 
        </table>
    </div>

@endsection

