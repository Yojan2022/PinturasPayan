@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')
<form action="{{ route('users.store') }}" method="post" >
  @csrf
      <div class="una">
       <span>
        Ingrese el nuevo usuario
       </span>
       <div class="app-card__subtext">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email">
          @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">
      </div>
       <div class="app-card-buttons">
       <button type="submit" class="content-button status-button">Agregar usuario</button>
       </div>
</form>

@include('/layouts/scripts')