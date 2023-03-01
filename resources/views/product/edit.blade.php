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
            <h1 class="m-0">Editar Producto</h1>
          </div><!-- /.col -->
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a style="color: black !important;" href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" style="color: black;">Course</li>
              <li class="breadcrumb-item active" style="color: black;">Add</li>
            </ol>
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
                <h3 class="card-title">Quick Example</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <form action="{{ route('product.update', $product->id) }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="code">codigo</label>
                    <input type="text" class="form-control" id="code" name="code" required value="{{$product->code}}">
                  </div>
                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required value="{{$product->name}}">
                  </div>
                
                <div class="form-group">
                    <label for="name">precio</label>
                    <input type="text" class="form-control" id="price" name="price" required value="{{$product->price}}">
                  </div>
                  <div class="form-group">
                    <label for="name">Descuento</label>
                    <input type="text" class="form-control" id="discount" name="discount" required value="{{$product->discount}}">
                  </div>
                  <div class="form-group">
                    <label for="name">Categoria</label>
                    <input type="text" class="form-control" id="category" name="category" required value="{{$product->category}}">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    <!-- /.card -->

<!-- /.content -->
</div>
            
<!-- /.content-wrapper -->
@include('/layouts/scripts')