@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')

<div class="card card-dark card-outline">
  <div class="card-body">
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
            <td><form action="{{ route('userRestore', $user->id) }}" method="GET">
                    <button type="submit">Restaurar</button>
                </form></td>
            <td>{{$loop->iteration}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
          </tr>
          
      @endforeach 
      </tbody>
    </table>
  </div>
</div>

@include('/layouts/scripts')