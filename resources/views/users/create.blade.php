@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')
<form action="{{ route('users.store') }}" method="post" >
  @csrf
<div class="apps-card">
      <div class="app-card">
       <span>
        Ingrese el nuevo usuario
       </span>
       <div class="app-card__subtext">
        <label for="name" >Nombre</label>
        <input type="text" class="products" name="name" placeholder="ingrese su nombre" autofocus required>
        <label for="username">Nombre del usuario</label>
        <input type="text" class="form-control" name="username" placeholder="ingrese su usuario" required>
        <label for="email" class="">Correo@</label>
        <input type="email" class="col-sm-12 col-form-label" name="email" placeholder="ingrese su Correo" required>
        <label for="password" class="col-sm-12 col-form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="ingrese su contraseña" required>
       </div>
       <div class="app-card-buttons">
       <button type="submit" class="content-button status-button">Agregar usuario</button>
       </div>
      </div>
</form>

@include('/layouts/scripts')