

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


            <!-- FIRST ROW (WARNING DATA) -->
            <h5 >DATOS DEL AVISO</h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="offer_type">Tipo de oferta</label>
                    <select class="form-select" name="offer_type" id="offer_type">
                        <option value="venta">Venta</option>
                        <option value="arriendo">Arriendo</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="property_type">Tipo de Inmueble</label>
                    <select class="form-select" name="property_type" id="property_type">
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
                </div>
            </div>
            <br>



            <!-- ANOTHER ROW (LOCATION) -->

            
            <h5>UBICACION</h5>
            <div class="row">
            <div class="col-md-4 mb-3">
                <label for="city">Ciudad/Municipio</label>
                <input type="text" class="form-control" name="city">
            </div>


            <div class="col-md-4 mb-3">
            <label for="neighborhood">Barrio</label><br>
            <input type="text"  class="form-control" name="neighborhood"><br>
        </div>

        <div class="col-md-4 mb-3">
        <label for="address">Direccion</label><br>
        <input type="text"  class="form-control" name="address"><br>
        </div>
    </div>
    <br>


     <!-- ANOTHER ROW (VALUE AND STATE) -->

    <h5>VALOR Y ESTADO</h5>
    <div class="row">
        <div class="col-md-4 mb-3">
        <label for="price">Precio</label><br>
        <input type="number" class="form-control" name="price"><br>
    </div>

    <div class="col-md-4 mb-3">
        <label for="">Estrato</label><br>
        <select class="form-select" name="stratum" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
    </div>

    <div class="col-md-4 mb-3">
    <label for="status">Estado</label><br>
    <select class="form-select" name="status" id="">
        <option value="Menos de 1 año">Menos de 1 año</option>
        <option value="1 año a 8 años">1 año a 8 años</option>
        <option value="9 a 15 años">9 a 15 años</option>
        <option value="16 a 30 años">16 a 30 años</option>
        <option value="Más de 30 años">Más de 30 años</option>
    </select>
</div>
</div>
<br>


     <!-- ANOTHER ROW (SIZES AND SPACES) -->

<h5>TAMAÑOS Y ESPACIOS</h5>
 <div class="row">

<div class="col-md-4 mb-3">
    <label for="size">tamaño en (m2)</label><br>
    <input type="number"  class="form-control" name="size"><br><br>
</div> 

<div class="col-md-4 mb-3">
    <label for="number_rooms">Numero de habitaciones</label><br>
    <select class="form-select" name="number_rooms" id="">
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
</div>

<div class="col-md-4 mb-3">
<label for="number_bathrooms">Numero de Baños</label><br>
<select class="form-select"  name="number_bathrooms" id="">
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
</div>
 </div>
<br>



     <!-- ANOTHER ROW (DESCRIPTION) -->
<h5>Descripcion</h5>
<div class="row">
    <div class="col-12 mb-3">
        <label for="description">Descripción</label>
        <textarea class="form-control" name="description" rows="4"></textarea>
    </div>
</div>
<br>



     <!-- ANOTHER ROW (MAIN IMAGE) -->
<h5>Imagenes de la propiedad</h5>
<div class="row">
    <div class="col-md-12 mb-3">
    <label for="main_image">Imagen principal</label><br>
    <input type="file" class="form-control" name="main_image"><br><br>
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


 <!-- ANOTHER ROW (CONTACT) -->
 <h5>Datos de contacto</h5>
 <div class="row">
    <div class="col-md-3 mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email"><br><br>
</div>

<div class="col-md-3 mb-3">
<label for="name">Nombre</label>
<input type="text"  class="form-control" name="name"><br><br>
</div>




<div class="col-md-3 mb-3">
<label for="lastname">Apellido</label>
<input type="text"  class="form-control" name="lastname"><br><br>
</div>


<div class="col-md-3 mb-3">
<label for="phone">Telefono</label>
<input type="number"  class="form-control" name="phone"><br><br>
</div>


 </div><br>


           




            <button type="submit" class="btn btn-success mt-4">Publicar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>

