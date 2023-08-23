@extends('layouts.nav')

@section('content')


<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carrusel.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Casa Facil</h4>
                        <h1 class="display-3 text-white mb-md-4">Tu hogar, tu felicidad. Bienvenido a CasaFacil.</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Publicar ahora</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carrusel3.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Casa Facil</h4>
                        <h1 class="display-3 text-white mb-md-4">Tu hogar, tu felicidad. Bienvenido a CasaFacil.</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Publicar ahora</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- Booking Start -->
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
                                    <input type="text" class="form-control p-4 datetimepicker-input"
                                        placeholder="Ubicacion" data-target="#date1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3 mb-md-0">
                                <select class="custom-select px-4" style="height: 47px;">
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
                                <select class="custom-select px-4" style="height: 47px;">
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
<!-- Booking End -->


<!-- Packages Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Propiedades</h6>
            <h1>Propiedades publicadas</h1>
        </div> 
        <div class="row">
            @foreach ($publications as $publication)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                    <img  class="img-fluid"  src="{{asset('images/')}}/{{$publication->main_image}}" style="width: 400px;height: 250px;">


                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{ $publication->city }}</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">{{ $publication->property_type }} en {{ $publication->offer_type }}</a>
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
<!-- Packages End -->




<!-- Feature Start -->
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                        style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-money-check-alt text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Competitive Pricing</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                        style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-award text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Best Services</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                        style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-globe text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Worldwide Coverage</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->




<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
            <h1>Tours & Travel Services</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                    <h5 class="mb-2">Travel Guide</h5>
                    <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet
                        labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                    <h5 class="mb-2">Ticket Booking</h5>
                    <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet
                        labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                    <h5 class="mb-2">Hotel Booking</h5>
                    <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet
                        labore</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->





</body>

</html>


@include('layouts.footer') <!-- Incluir el footer aquí -->

@endsection