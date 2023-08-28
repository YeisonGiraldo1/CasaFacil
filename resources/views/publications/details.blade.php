@extends('layouts.nav')

@section('content')

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <h3 class="title">CASA EN ARRIENDO</h3>
    <script src="{{ asset('js/detail.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" href="{{asset('css/details.css')}}">





<div class="property-details">
    <div class="slider-container">
        <div class="slider">
            @foreach ($additionalImages as $image)
                <div class="slider-item">
                    <img src="{{ $image }}" alt="Imagen" style="height: 300px; width: 600px;">
                </div>
            @endforeach
        </div>
    </div>
    @foreach ($publications as $publication)
    <div class="property-info">
       <h5>Precio total(COP)</h5>
        <p>${{ $publication->price }}</p>
        <h5>Contacto:</h5>
        <p>{{ $publication->name }}{{ $publication->lastname }}</p>
        <p>{{ $publication->email }}</p>
        <p>{{ $publication->phone}}</p>
    </div>
  
</div>

<div class="description">
    <h5>Descripcion general</h5>
    <p>{{ $publication->description}}</p>
</div>

<div class="info-boxes">
    <div class="info-box">
        <h5><i class="fa fa-signal"></i>Estrato</h5>
        <p>{{ $publication->stratum }}</p>
    </div>
    <div class="info-box">
        <h5><i class="fa fa-clock"></i> Estado</h5>
        <p>{{ $publication->status }}</p>
    </div>
    <div class="info-box">
        <h5><i class="fa fa-ruler-combined"></i> Tamaño (m2)</h5>
        <p>{{ $publication->size}}</p>
    </div>
    <div class="info-box">
        <h5><i class="fa fa-shower"></i> Baños</h5>
        <p>{{ $publication->number_rooms }}</p>
    </div>
    <div class="info-box">
        <h5><i class="fa fa-bed"></i> Habitaciones</h5>
        <p>{{ $publication->number_bathrooms }}</p>
    </div>
</div>

<div class="ubication">
    <h5></i>Ubicacion</h5>
    <h6>Ciudad</h6>
    <p>{{ $publication->city }}</p>
    <h6>Barrio</h6>
    <p>{{ $publication->neighborhood}}</p>
    <h6>Direccion</h6>
    <p>{{ $publication->address}}</p>
</div>
@endforeach


@endsection