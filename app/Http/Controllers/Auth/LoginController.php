<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;




class LoginController extends Controller
{
   // Mostrar el formulario del login
    public function form()
    {
      
        return view ('login.login');
    }

    //Logear y direccionar en caso positivo
    public function login(Request $request){
        //Auth: establecer inicio de sesion
//       if(Auth::attempt($Request->only(['correo','contraseña'])))
// {
//     echo 'autenticado';
// } else {
//     echo 'Inicio de sesion fallido';
// }
//     }

if (Auth::attempt($request->only(['correo', 'password']))) {
    echo 'autenticado';
} else {
    echo 'fallido';
}

    }


public function logout(){

}

}