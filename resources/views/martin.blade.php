
@extends('plantilla')

@section('seccion')

    <div class="container">
        
        <h3>Martin Noboa</h3>
        <h3>A01704052</h3>
        <img src="{{ url('img/martin.jpeg') }}" alt="" style="width:300px; height:350px">
        <p>
            
        </p>
        
        <a href = "{{ route ('atras') }}" class = "btn btn-primary">Atras</a>

    </div>

@endsection