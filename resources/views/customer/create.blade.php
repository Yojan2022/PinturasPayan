@include('/layouts/head')

<!-- partial:index.partial.html -->

@include('/layouts/nav')
@include('/layouts/menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-12">
          <div class="col-sm-12">
            <h1 class="m-0">Agregar</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                @if($errors->any())
                  @foreach($errors->all() as $error)
                    {{$error}} <br>
                  @endforeach
                @endif
                <h3 class="card-title">Ingresa los datos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="{{route('customer.store')}}" method="post">
              
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="code">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="name">Identificacion</label>
                    <input type="number" class="form-control" id="indentification" name="identification" required>
                  </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="name">Telefono</label>
                    <input type="number" class="form-control" id="telephone" name="telephone" required>
                  </div>
                </div>
                <br>
               <input type="submit" class="btn btn-info" value="Guardar">
               <a href="{{ route('customer.index') }}" class="btn btn-darck">
                <b>cancelar</b>
            </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- /.card -->

<!-- /.content -->
</div>
            
<!-- /.content-wrapper -->
@include('/layouts/scripts')