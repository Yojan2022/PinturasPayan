@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style type="text/css">
    .card{
        width: 500px;
      }
</style>
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-default">
        <div class="card-header">
          <span class="card-title">{{ __('Agrgar Usuarios') }}</span>
        </div>
        <div class="card-body">
          <form action="{{ route('users.store') }}" method="post" >
                        @csrf
            <div class="box box-info padding-1">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nombre:</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
                </div><br>
                <div class="form-group">
                  <label for="email">Correo electrónico:</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico" required>
                  @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div><br>
                <div class="form-group">
                  <label for="password">Contraseña:</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
                </div><br>      
                  <div class="box-footer mt20">
                    <button type="submit" class="btn btn-primary">Agregar usuario</button>
                  </div>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
</section>
@include('/layouts/scripts')