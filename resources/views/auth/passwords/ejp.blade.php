



@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Pinturas Payan</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'><link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<section>
  
  <div class="box">
    
    <div class="square" style="--i:0;"></div>
    <div class="square" style="--i:1;"></div>
    <div class="square" style="--i:2;"></div>
    <div class="square" style="--i:3;"></div>
    <div class="square" style="--i:4;"></div>
    <div class="square" style="--i:5;"></div>
    
   <div class="container"> 
    <div class="form"> 
      <h2>Iniciar sesion</h2>
      <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <div class="inputBx">
                <input type="hidden" name="token" value="{{ $token }}" autofocus>
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

          <span>Usuario</span>
          <i class="fas fa-user-circle"></i>
        </div>
        <div class="inputBx password">
          <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <span>Contraseña</span>
          <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
          <i class="fas fa-key"></i>
        </div>
        
        <div class="inputBx">
        
          <input type="submit" value="Entra" >
        </div> 
      </form>
    </div>
  </div>
    
  </div>
</section>
<!-- partial -->
  <script  src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>