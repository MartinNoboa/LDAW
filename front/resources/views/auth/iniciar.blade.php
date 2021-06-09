@extends('plantillas/mainPlantilla')

@section('mainContent')

<br><br>
    <div class="container">
    <h4>Log in</h4>
    <hr size="4px" color="black"> 
    </div>
    


    <div class="container">
    
        <form action="{{ route('auth.check') }}" method="POST">
        @csrf
        <div class="result">
            @if (Session::get('fail'))
                <div class = "alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
        </div>            
            <div class="row">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}">
                <span class="text-danger"> @error('email') {{$message}} @enderror </span>
            </div>

            <div class="row">
                <label for="" class="form-label">Contraseña</label>
                <input type="password " class="form-control"id="password" name="password" value="{{old('password')}}">
                <span class="text-danger"> @error('password') {{$message}} @enderror </span>
            </div>
            <br><br>
            <div class="px-4">
                
                <input type="submit" class="btn btn-primary">
            </div>
    
        </form>
    </div>


@endsection
