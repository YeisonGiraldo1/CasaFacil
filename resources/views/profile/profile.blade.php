<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/profile.css')}}">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <title>Perfil</title>
</head>
<body>
  <div class="user-container">
    <div class="user-box">
      <div class="user-icon">
        <i class="fa fa-user"></i>
      </div>
      <div class="user-info">
        <h3>Datos personales</h3>
        <p>Actualiza tu información</p>
      </div>
     <a href="{{route('update.profile')}}"><button class="btn">Actualizar</button></a> 
    </div>

    <div class="user-box">
      <div class="user-icon">
        <i class="fa fa-user"></i>
      </div>
      <div class="user-info">
        <h3>Mis publicaciones</h3>
        <p></p>
      </div>
      <a href="{{route('list.publications')}}"><button class="btn">Ver mis publicaciones</button></a> 
    </div>
    
    <div class="user-box">
      <div class="user-icon">
        <i class="fa fa-user"></i>
      </div>
      <div class="user-info">
        <h3>Datos personales</h3>
        <p>Actualiza tu información</p>
      </div>
      <button class="btn">Actualizar</button>
    </div>
   
  </div>
</body>
</html>
