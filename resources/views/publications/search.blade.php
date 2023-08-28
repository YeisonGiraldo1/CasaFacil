@extends('layouts.nav')

@section('content')
<br><br><br><br>



<script src="{{asset('js/search.js')}}"></script>


<!-- Booking Start -->
<form action="{{route('property.search')}}" method="get">
<div class="container-fluid booking mt-5 pb-5">
    <div class="container pb-5">
        <div class="bg-light shadow" style="padding: 30px;">
            <div class="row align-items-center" style="min-height: 60px;">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3 mb-md-0">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" name="city" placeholder="Ciudad/Municipio"
                                        data-target="#date1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3 mb-md-0">
                                <select class="custom-select px-4"  name="property_type" style="height: 47px;">
                                    <option selected>Tipo de propiedad</option>
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
                        <div class="col-md-3">
                            <div class="mb-3 mb-md-0">
                                <select class="custom-select px-4" name="offer_type" style="height: 47px;">
                                    <option selected>Tipo de Oferta</option>
                                    <option value="venta">Venta</option>
                                    <option value="arriendo">Arriendo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary btn-block" type="submit"
                        style="height: 47px; margin-top: -2px;">Buscar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>



<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">

            <h1>Propiedades que coinciden con tu búsqueda</h1>
        </div> 
        <div class="row">
            @foreach ($filteredProperties as $publication)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                    <img  class="img-fluid"  src="{{asset('images/')}}/{{$publication->main_image}}" style="width: 400px;height: 250px;">


                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{ $publication->city }}</small>
                            </div>
                            <a class="h5 text-decoration-none" href="/detalle/{{$publication->id}}/propiedad">{{ $publication->property_type }} en {{ $publication->offer_type }}</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">${{ $publication->price }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>

@endsection