@extends('plantillas/mainPlantilla')

@section('mainContent')
<br><br>
    <div class="container">
        <h4>Agregar Título</h4>
        <hr size="4px" color="black"> 
    </div>
    
    
    <div class="container">
        
        
            

            <form action="" class="needs-validation was-validates" novalidate>
            
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="row">
                <div class="col-sm">
                    <label for="" class="form-label">Edición</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-sm">
                    <label for="" class="form-label">Versión</label>
                    <input type="text" class="form-control">
                </div>
                </div>
                    <br>
                
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripción</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                <br>
                <div class="col-12">
                    
                <input type="submit" class="btn btn-primary">
                </div>

                            
            </form>



        
    </div>



@endsection