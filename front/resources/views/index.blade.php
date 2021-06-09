@extends('plantillas/mainPlantilla')

@section('title',"Home")
<!-- @section('nav'); -->


@section('mainContent')




    <!-- Aqui comienza el cuerpo de la pagina  -->
<div class="container">

   
    <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($titles as $title)
        <div class="col">
            <div class="card h-100">
                <img src="{{ $title['path'] }}" class="card-img-top" alt="..." style="width:250px; height:250px">
                <div class="card-body">
                    <h5 class="card-title">{{$title['nombre']}}</h5>
                    <p class="card-text">{{ $title['descripcion'] }}</p>
                </div>
            </div>
        </div>
        @endforeach   
    </div>
    
</div>



@endsection

