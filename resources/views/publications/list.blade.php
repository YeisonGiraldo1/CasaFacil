

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">


<script src="{{asset('js/deletepublications.js')}}"></script>

@extends('layouts.nav')
@section('content')

<div class="container">
<br>
<h1>LISTADO DE MIS PUBLICACIONES</h1>
  <table class="ui blue table">
    <thead>
      <tr>
        <th>Tipo de Oferta</th>
        <th>Tipo de Propiedad</th>
        <th>City</th>
        <th>Neighborhood</th>
        <th>Precio</th>
        <th>Estrato</th>
        <th>Estado</th>
        <th>Tamaño</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @forelse($datos as $p)
      <tr>    
        <td>{{$p->offer_type}}</td>
        <td>{{$p->property_type}}</td>
        <td>{{$p->city}}</td>
        <td>{{$p->neighborhood}}</td>
        <td>{{$p->price}}</td>
        <td>{{$p->stratum}}</td>
        <td>{{$p->status}}</td>
        <td>{{$p->size}}</td>
        <td>
        
          <button type="button" class="btn btn-primary">Actualizar</button>
          <!-- <a href="/elimina/{{$p->id}}" >ELIMINAR<a/> -->
            <a  onclick="deletepublications({{$p->id}})">eliminar</a>
           
        </td>
      </tr>
      <br>

      


      @empty
      <th colspan="5">No hay publicaciones</th>

      @endforelse
      
    </tbody>
  </table>
  <div class="ui text-center">

  </a>
  </div>
</div><br><br><br><br><br><br><br><br><br><br>
  @endsection


  <script>
    function deletepublications(id){
    Swal.fire({
        title: '¿Está seguro?',
        text: "La dirección se eliminará permanentemente!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {
            location.href = '/elimina/'+id
        }
        })
}
$("#search").click(() => {
    $('.ui.basic.modal')
    .modal('show')
    ;


})


  </script>