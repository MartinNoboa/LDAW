@extends('plantilla')

@section('seccion')


<!-------------------------------------------- Falta agregar css para landing ------------------------------------------>
    <div class = "container">
        <h2>Miembros del equipo</h2>
        <table>
            <tbody>
               <a href = "{{ url('samuel') }}" class = "btn btn-primary">Samuel Gonzalez</a>
               <a href = "{{ url('martin') }}" class = "btn btn-primary">Martin Noboa</a>
            </tbody> 
        </table>
    </div>

@endsection

