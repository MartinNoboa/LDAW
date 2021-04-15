
@extends('plantilla')

@section('seccion')

    <div class="container">
        <div class="row justify-content-center">
        
            <h3 class="row justify-content-center">Martin Noboa</h3>
            <h3 class="row justify-content-center">A01704052</h3>
            <img src="{{ url('img/martin.jpeg') }}" alt="" style="width:300px; height:350px">
            

        </div>
    </div>
        <div class = "container">
        
        
        <div class="row justify-content-center">
           <div class="col-sm">
            </div>
            <div class="col-sm">
                <a href = "{{ route ('atras') }}" role = "button" class = "btn btn-outline-dark" >Atras</a>
            </div>
            <div class="col-sm">
            </div>
        </div>

        </div>
    

@endsection