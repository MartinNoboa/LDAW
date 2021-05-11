@extends('plantillas/mainPlantilla')

@section('title',"Home")
<!-- @section('nav'); -->


@section('mainContent')




    <!-- Aqui comienza el cuerpo de la pagina  -->
<div class="container main">
    <label for="">Filtro</label>
    <input type="text">
    <hr size="4px" color="black">
    
</div>


<div class="container">


    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            @foreach($catalogo as $key)
            <div class="card h-100">
                <img src="" class="card-img-top" alt="..." style="width:250px; height:250px">
                <div class="card-body">
                    <h5 class="card-title">Hola</h5>
                    <p class="card-text">Hola</p>
                </div>
            </div>
            @endforeach
            

        </div>
        


    
    </div>

</div>

@endsection

