@extends('layouts.nav')
@section('content')

<!-- con diseño -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">PUBLICACIONES</h1>
        <form action="{{route ('registerpublications')}}" method="post" enctype="multipart/form-data">
            @csrf

            @auth
            <!-- FIRST ROW (WARNING DATA) -->
            <h5 >DATOS DEL AVISO</h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="offer_type">Tipo de oferta</label>
                    <select class="form-select" name="offer_type" id="offer_type">
                    <option value="">Selecciona una opción</option>
                        <option value="venta">Venta</option>
                        <option value="arriendo">Arriendo</option>
                    </select>
                    @if ($errors->has('offer_type'))
        <span class="text-danger">{{ $errors->first('offer_type') }}</span>
        @endif
                </div>


                <div class="col-md-6 mb-3">
                    <label for="property_type">Tipo de Inmueble</label>
                    <select class="form-select" name="property_type" id="property_type">
                    <option value="">Selecciona una opción</option>
                        <option value="apartamento">Apartamento</option>
                        <option value="casa">Casa</option>
                        <option value="finca">Finca</option>
                        <option value="lote">Lote</option>
                        <option value="habitacion">Habitacion</option>
                        <option value="edificio">Edificio</option>
                        <option value="cabaña">Cabaña</option>
                        <option value="casa campestre">Casa campestre</option>
                        <option value="casalote">Casa lote</option>
                    </select>
                    @if ($errors->has('offer_type'))
        <span class="text-danger">{{ $errors->first('offer_type') }}</span>
        @endif
                </div>
            </div>
            <br>



            <!-- ANOTHER ROW (LOCATION) -->

            
            <h5>UBICACION</h5>
            <div class="row">
            <div class="col-md-4 mb-3">
                <label for="city">Ciudad/Municipio</label>
                <input type="text" class="form-control" name="city">
                @if ($errors->has('city'))
        <span class="text-danger">{{ $errors->first('city') }}</span>
        @endif
            </div>


            <div class="col-md-4 mb-3">
            <label for="neighborhood">Barrio</label><br>
            <input type="text"  class="form-control" name="neighborhood"><br>
            @if ($errors->has('neighborhood'))
        <span class="text-danger">{{ $errors->first('neighborhood') }}</span>
        @endif
        </div>

        <div class="col-md-4 mb-3">
        <label for="address">Direccion</label><br>
        <input type="text"  class="form-control" name="address"><br>
        @if ($errors->has('address'))
        <span class="text-danger">{{ $errors->first('address') }}</span>
        @endif
        </div>
    </div>
    <br>


     <!-- ANOTHER ROW (VALUE AND STATE) -->

    <h5>VALOR Y ESTADO</h5>
    <div class="row">
        <div class="col-md-4 mb-3">
        <label for="price">Precio</label><br>
        <input type="number" class="form-control" name="price"><br>
        @if ($errors->has('price'))
        <span class="text-danger">{{ $errors->first('price') }}</span>
        @endif
    </div>

    <div class="col-md-4 mb-3">
        <label for="">Estrato</label><br>
        <select class="form-select" name="stratum" id="">
        <option value="">Selecciona una opción</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        @if ($errors->has('stratum'))
        <span class="text-danger">{{ $errors->first('stratum') }}</span>
        @endif
    </div>

    <div class="col-md-4 mb-3">
    <label for="status">Estado</label><br>
    <select class="form-select" name="status" id="">
    <option value="">Selecciona una opción</option>
        <option value="Menos de 1 año">Menos de 1 año</option>
        <option value="1 año a 8 años">1 año a 8 años</option>
        <option value="9 a 15 años">9 a 15 años</option>
        <option value="16 a 30 años">16 a 30 años</option>
        <option value="Más de 30 años">Más de 30 años</option>
    </select>
    @if ($errors->has('status'))
        <span class="text-danger">{{ $errors->first('status') }}</span>
        @endif
</div>
</div>
<br>


     <!-- ANOTHER ROW (SIZES AND SPACES) -->

<h5>TAMAÑOS Y ESPACIOS</h5>
 <div class="row">

<div class="col-md-4 mb-3">
    <label for="size">tamaño en (m2)</label><br>
    <input type="number"  class="form-control" name="size"><br><br>
    @if ($errors->has('size'))
        <span class="text-danger">{{ $errors->first('size') }}</span>
        @endif
</div> 

<div class="col-md-4 mb-3">
    <label for="number_rooms">Numero de habitaciones</label><br>
    <select class="form-select" name="number_rooms" id="">
    <option value="">Selecciona una opción</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    @if ($errors->has('number_rooms'))
        <span class="text-danger">{{ $errors->first('number_rooms') }}</span>
        @endif
</div>

<div class="col-md-4 mb-3">
<label for="number_bathrooms">Numero de Baños</label><br>
<select class="form-select"  name="number_bathrooms" id="">
<option value="">Selecciona una opción</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
</select>
@if ($errors->has('number_bathrooms'))
        <span class="text-danger">{{ $errors->first('number_bathrooms') }}</span>
        @endif
</div>
 </div>
<br>



     <!-- ANOTHER ROW (DESCRIPTION) -->
<h5>Descripcion</h5>
<div class="row">
    <div class="col-12 mb-3">
        <label for="description">Descripción</label>
        <textarea class="form-control" name="description" rows="4"></textarea>
        @if ($errors->has('description'))
        <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
    </div>
</div>
<br>



     <!-- ANOTHER ROW (MAIN IMAGE) -->
<h5>Imagenes de la propiedad</h5>
<div class="row">
    <div class="col-md-12 mb-3">
    <label for="main_image">Imagen principal</label><br>
    <input type="file" class="form-control" name="main_image"><br><br>
    @if ($errors->has('main_image'))
    <span class="text-danger">{{ $errors->first('main_image') }}</span>
  @endif
    </div>
</div>
   

     <!-- ANOTHER ROW (ADDITIONAL IMAGES) -->
     <label for="">Imagenes Adicionales</label>
<div class="row">
    <div class="col-md-3 mb-3">
        <input type="file" class="form-control" name="additional_image_1" multiple><br>
    </div>

    <div class="col-md-3 mb-3">
       
        <input type="file" class="form-control" name="additional_image_2" multiple><br>
    </div>

    <div class="col-md-3 mb-3">
       
        <input type="file" class="form-control" name="additional_image_3" multiple><br>
    </div>

    <div class="col-md-3 mb-3">
       
        <input type="file" class="form-control" name="additional_image_4" multiple><br>
    </div>

</div><br>


 <!-- ANOTHER ROW (ADDITIONAL IMAGES) -->
<div class="row">
<div class="col-md-4 mb-3">
        <input type="file" class="form-control" name="additional_image_5" multiple><br>
    </div>

    <div class="col-md-4 mb-3">
        <input type="file" class="form-control" name="additional_image_6" multiple><br>
    </div>

    <div class="col-md-4 mb-3">
        <input type="file" class="form-control" name="additional_image_7" multiple><br>
    </div>
</div>


 <!-- ANOTHER ROW (ADDITIONAL IMAGES) -->
 <div class="row">
<div class="col-md-4 mb-3">
        <input type="file" class="form-control" name="additional_image_8" multiple><br>
    </div>

    <div class="col-md-4 mb-3">
        <input type="file" class="form-control" name="additional_image_9" multiple><br>
    </div>

    <div class="col-md-4 mb-3">
        <input type="file" class="form-control" name="additional_image_10" multiple><br>
    </div>
</div>



 <!-- ANOTHER ROW (CONTACT) -->
 <h5>Datos de contacto</h5>
 <div class="row">
    <div class="col-md-3 mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email"><br><br>
    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
  @endif
</div>

<div class="col-md-3 mb-3">
<label for="name">Nombre</label>
<input type="text"  class="form-control" name="name"><br><br>
@if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
  @endif
</div>




<div class="col-md-3 mb-3">
<label for="lastname">Apellido</label>
<input type="text"  class="form-control" name="lastname"><br><br>
@if ($errors->has('lastname'))
    <span class="text-danger">{{ $errors->first('lastname') }}</span>
  @endif
</div>


<div class="col-md-3 mb-3">
<label for="phone">Telefono</label>
<input type="number"  class="form-control" name="phone"><br><br>
@if ($errors->has('phone'))
    <span class="text-danger">{{ $errors->first('phone') }}</span>
  @endif
</div>


 </div><br>


           




            <button type="submit" class="btn btn-success mt-4">Publicar</button>
        </form>
        @endauth
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>

@endsection