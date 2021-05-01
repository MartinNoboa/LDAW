@extends('plantillas.mainPlantilla')
@section('title','Panel administrativo')

<!-- Agregar css especifico -->
@push('styles')
    <link rel="stylesheet" href="{{ url("css/panel.css") }}">
@endpush

@section('mainContent')


<div class="container-fluid">
  <div class="row panelRow">
    <div class="col-sm panelCard">
        <a class = "linkPanel" href="#"><h3 class = "accionPanel"><i class="fas fa-edit fa-x panelIcono"></i> Editar títulos</h3></a>
    </div>
    <div class="col-sm panelCard">
    <a class = "linkPanel" href="#"><h3 class = "accionPanel"><i class="fas fa-check-circle fa-x panelIcono"></i> Aprobar títulos </h3></a>
    </div>
    <div class="col-sm panelCard">
    <a class = "linkPanel" href="#"><h3 class = "accionPanel"><i class="fas fa-user-cog fa-x panelIcono"></i> Mi cuenta</h3></a>
    </div>
  </div>
</div>

@endsection