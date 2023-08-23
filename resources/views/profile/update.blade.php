<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif
    <form action="{{route('update.data')}}" method="post">



        @foreach ($datos as $user)
        @csrf


        <input type="hidden" name="id" value="{{ $user->id }}">

        <h2>Datos personales</h2>
        <div class="col-md-10 mb-3">
            <label for="city">Nombre Completo</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name}}">
        </div>

        <div class="col-md-10 mb-3">
            <label for="city">Correo Electronico</label>
            <input type="text" class="form-control" name="email" value="{{ $user->email}}">
        </div>


        <button type="submit" class="btn btn-success">Actualizar Datos</button>
        @endforeach

    </form>
</body>
</html>