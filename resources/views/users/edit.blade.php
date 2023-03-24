@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')

<form action="{{ route('users.update', $user->id) }}" method="post" >
  @csrf
      <input type="hidden" name="id" value="{{$user->id}}" required>
      <div class="una">
       <span>
        Editar usuarios 
       </span>
       <div class="app-card__subtext">
        <label for="name" >Nombre</label>
        <input type="text" class="products" id="name" name="name" value="{{ $user->name}}">
        <label for="email" class="">Correo</label>
        <input type="email" class="products" id="email" name="email" value="{{ $user->email}}">
       </div>
       <div class="app-card-buttons">
       <button type="submit" class="content-button status-button">Agregar usuario</button>
       </div>
</form>

@include('/layouts/scripts')