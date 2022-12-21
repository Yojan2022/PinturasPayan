@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Pinturas Payam</title>
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
      <form method="POST" action="{{ route('login') }}">
      @csrf
        <div class="inputBx">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
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
        
          <input type="submit" value="Entrar" >
        </div>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Olvido su contraseña?') }}
            </a>
          @endif 
      </form>
    </div>
  </div>
    
  </div>
</section>
<!-- partial -->
  <script  src="{{ asset('js/script.js') }}"></script>

</body>
</html>
