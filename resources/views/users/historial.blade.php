@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')
<style type="text/css">

  .table-historial{
    width: 600px;
    position: sticky;
    overflow: auto !important;
  }    
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="table-historial">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <div style="display: flex; justify-content: space-between; align-items: center;">

            <span id="card_title">
              {{ __('Tabla restaurar usuarios') }}
            </span>

            <div class="float-right">
                                  
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
  	        <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Accionaes</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>
                      @if ($user->deleted_at)
                        <form action="{{ route('users.restore', $user->id) }}" method="POST">
                          @csrf
                          <button type="submit" class="btn btn-primary">Restaurar</button>
                        </form>
                      @endif
                    </td>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                  </tr>
               @endforeach 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('/layouts/scripts')