<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller
{
    /*
    * Funcion para manejar el login
    */
    
    function login(){
        return view("auth.iniciar");
    }


    /*
    * Funcion para validar datos de inicio de sesion
    */
    function check(Request $request){
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required', 
        ]);
        
        //recuperar mail y contraseña
        $usuario = DB::table('users')
                ->where('email', '=', $request->email)
                ->first();
        
        
        //verificar si usuario existe en la base de datos
        if($usuario){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $request->session()->put('sesionUsuario', $usuario->id);
                return redirect()->intended('panel');
            }else{
                return back()->with('fail','El usuario o la contraseña están incorrectos.');
            }
        }else{
            return back()->with('fail','El usuario o la contraseña están incorrectos.');
        }

        
        
    }


    function panel(){
        dd(auth()->user());
        return view('panelGestion');

    }

    function logout(){
        if(session()->has('sesionUsuario')){
            session()->pull('sesionUsuario');
            return redirect('login');
        }
    }
}
