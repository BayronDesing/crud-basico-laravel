<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-danger">
  <a class="navbar-brand text-white" href="#">AVON</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{route('users.index')}}">incio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('products.create')}}">Crear productos</a>
          <a class="dropdown-item" href="{{route('products.products')}}">Ver productos</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('users.create')}}">Crear usuarios</a>
          <a class="dropdown-item" href="{{route('users.users')}}">Ver usuarios</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
    <br><br>
        <div class="row">
            <div class="">
                <table class="table table-bordered ">
                    <thead>
                        <tr class="bg-danger text-white">
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <form action="{{route('users.destroy',$user->id_user)}}" method="post"> 
                                @csrf
                                @method('DELETE')
                                <td>{{$user -> names}}</td>
                                <td>{{$user -> lastnames}}</td>
                                <td>{{$user -> age}}</td>
                                <td>{{$user -> email}}</td>
                                <td class="center">
                                    <button class="btn bg-success"><i class="material-icons text-white">add</i></button>
                                    <button type="submit" class="btn bg-danger"><i class="material-icons text-white">delete</i></button>
                                    <a class="btn bg-dark" href="{{route('users.edit',$user->id_user)}}"><i class="material-icons text-light">settings</i></a>
                                </td>
                            </form>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn bg-danger text-white border-50" href="{{route('users.create')}}">REGISTRAR</a>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
</body>
</html>