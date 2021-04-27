@extends('plantillas/mainPlantilla')

@section('title',"Home")
<!-- @section('nav'); -->


@section('mainContent')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">GlobalGames</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><ion-icon id = "profile" name="person-circle-outline"></ion-icon></button>
       
    </form>
  </div>
</nav>


    <!-- Aqui comienza el cuerpo de la pagina  -->
<div class="container main">
    <label for="">Filtro</label>
    <input type="text">
    <hr size="4px" color="black">
</div>


<div class="container">


        <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a short card.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    </div>


    
    </div>

</div>

<div class="container">


        <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a short card.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    </div>


    
    </div>

</div>

<div class="container">


        <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a short card.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="{{ url('img/pac-man.jpg') }}" class="card-img-top" alt="..." style="width:250px; height:250px">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    </div>


    
    </div>

</div>

@endsection

