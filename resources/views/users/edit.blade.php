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
          <form action="{{ route('users.update', $user->id) }}" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$user->id}}" required>
            <div class="box box-info padding-1">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nombre:</label>
                  <input type="text" id="name" name="name" value="{{ $user->name}}" class="form-control">
                </div><br>
                <div class="form-group">
                  <label for="email">Correo electrónico:</label>
                  <input type="email" id="email" name="email" value="{{ $user->email}}" class="form-control">
                  @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div><br>     
                  <div class="box-footer mt20">
                    <button type="submit" class="btn btn-primary">Editar usuario</button>
                  </div>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
</section>
@include('/layouts/scripts')