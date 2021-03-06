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
    <div class="container my-5">
        <div class="row">
            <div class="col ">
                <h2 class="text-danger text-center">Registra un producto</h2>
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center align-items-center">
                     @csrf
                    <div class="col-6">
                    <label for="">Nombre</label>
                    <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleFormControlTextarea1">Descripcion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                    </div>
                    <div class="col-6">
                    <label for="">precio</label>
                    <input class="form-control" type="text" name="price">
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleFormControlFile1">Imagen</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="product_image">
                    </div>
                    <input type="hidden" name="users_id" value="4">
                    <div class="my-2 d-flex justify-content-center">
                    <a href="{{route('products.products')}}" class="btn btn-danger">Regresar al inicio</a>
                    <button class="btn btn-primary mx-2">Registrar</button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
</body>
</html>