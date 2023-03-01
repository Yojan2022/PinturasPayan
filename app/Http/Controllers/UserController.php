<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //se creo el controlador con php artisan make:controller nombreController
  public function create() 
  {
    return view('users.create');//entra a la carpeta luego a la vista
  } 
  //se crea la funcion para enviar datos 
  public function store(Request $request) 
  {
    User::create($request->only('name','username','email')//campos de los inputs
     +[
        'password' => bcrypt($request->input('password')),//para que la contraseña se envia en tipo password
     ]);
    return redirect()->back();
  }
  
}
