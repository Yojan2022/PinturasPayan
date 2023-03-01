@include('/layouts/head')

<!-- partial:index.partial.html -->

@include('/layouts/nav')
@include('/layouts/menu')

<div class="container">
  <div class="card">
    <div class="card-body">
        <table id="miTabla" class="table"> 
          <thead>
            <tr>
              <th>#</th>
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Descuento</th>
              <th>Categoria</th>
              <th>Acciones</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($product as $p)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $p->code }}</td>
              <td>{{ $p->name }}</td>
              <td>{{ $p->price }}</td>
              <td>{{ $p->discount }}</td>
              <td>{{ $p->category }}</td> 
              <td>
                <a href="{{ route('product.edit', $p->id) }}" class="btn btn-warning btn-sm">Editar</a> 
              </td>
              <td>                
                <form action="{{ route('product.destroy', $p->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
</div> 
@include('/layouts/scripts')