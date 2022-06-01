@extends('adminlte::page')

@section('title', 'Contactos')

@section('content_header')
<h3></h3>  
@stop

@section('content')
<center><h2>Nuestros Contactos</h2></center>
<div class="modal-dialog modal-lg">
 <div >

      <!-- Modal Header -->
      <center><div  class="modal-header">
         
        </div></center>

      <!-- Modal body -->
      <div class="modal-body">
          <form>

          <label for="">Numero telefono</label>
          <input type="number" class="form-control " placeholder="Ingre su numero">
           <br>

           <label for="">Correo</label>
           <input type="text" class="form-control" placeholder="Opcional Ingrese su correo" name="email">
           <br>

           <label for="">Dirección</label>
           <input type="text" class="form-control " placeholder="Ingre su nombre">
           <br>

            <label for="">Facebook</label>
            <input type="text" class="form-control " placeholder="Ingre su nombre">
            <br>
            <label for="">Instagram</label>
            <input type="text" class="form-control " placeholder="Ingre su nombre">
            <br>       
  </form>
      </div>

      <!-- Modal footer -->
      <div  class="modal-footer">
        
       <a href="http://127.0.0.1:8000/" class="btn btn-primary" onclick="return confirm('¿Desea guardar cambios?')">Guardar</a>
        
      </div>

    </div>
  </div>
    
@stop


@section('css')
<meta charset="utf-8">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  

@endsection

@section('js')

 
@stop