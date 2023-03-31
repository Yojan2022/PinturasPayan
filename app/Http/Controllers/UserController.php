<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    //se creo el controlador con php artisan make:controller nombreController

  //funcion para mostrar usuarios 
  public function traer(){
    $users = User::get();
    $data = ['users'=>$users,'user'=>'users'];
    return view('users.table',$data);
  }  

  public function create() 
  {
    return view('users.create');//entra a la carpeta luego a la vista
  } 

  //se crea la funcion para enviar datos 
  public function store(Request $request) 
  {
     $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ], $messages = [
        
        'email.unique' => 'El email ya está registrado'
    ]);

    User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
    ]);

    return redirect()->back();//preguntar por que al direccionar a la visata table bota error 
  }

  //funcion para borrar usuarios
 public function delete($id){
    $users = User::findOrFail($id);
    if($users->delete()):
      return redirect()->back();
    endif;
  }

  //funcion vista historial de usuarios
  public function historial() 
  {
    $users = \DB::table('users')->select('users.*')->get();
    return view('users.historial')->with('users', $users);
  } 
 
  //funcion para restablecer usuarios borrados 
  /*public function restore($id){
    $users = User::withTrashed()->findOrFail($id); // busca el usuario, incluso si fue eliminado
    if($users->trashed()){ // verifica si el usuario fue eliminado
      $users->restore(); // restaura el usuario eliminado
    }
    return view('users.historial')->with('users',$users);
  }*/

  public function restore($id){
    $user = User::withTrashed()->findOrFail($id); // busca el usuario, incluso si fue eliminado
    if($user->trashed()){ // verifica si el usuario fue eliminado
      $user->restore(); // restaura el usuario eliminado
      return view('users.historial')->with('users',$users);
    }
    return view('users.historial')->with('users',$users);
}
  
  //funcion para editar usuarios
  public function edit($id){
    $user=User::findOrFail($id);
    return view('users.edit', compact('user'));
  }

  public function update(Request $request){
    $rules = [
      "name" => "required",
      "email" => "required",
    ];
    $messages =[
      "name.required" => "Debe de ingresar un nombre",
      "email.required" => "Debe ingresar un correo electronico",
    ];
    $validator = Validator::make($request->all(), $rules, $messages);
    if($validator->fails()):
      return back()->withErrors($validator)->with('message', 'se ha producido un error')->whit('typealert', 'danger');
    else:
      $c = User::findOrFail($request->input('id'));
      $c->name =e($request->input('name'));
      $c->email =e($request->input('email'));
      if($c->save()){
          return redirect(route('userTable'))->with('message', 'Guardado con éxito')->with('typealert', 'success');
      }
    endif;
  }
}
