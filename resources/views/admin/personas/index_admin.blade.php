@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
<h1>PERSONAL ADMINISTRATIVO</h1>  
@stop

@section('content')
<div class="container mt-3">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    AGREGAR
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">AGREGAR DATOS</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        INGRESE DATOS PERSONALES DEL ADMINISTRADOR
        <div class="form-floating mb-3 mt-3">
  		<form action="/action_page.php">
 			 	 <div class="mb-3 mt-3">
   				 <label for="id" class="form-label">Id:</label>
   				 <input type="id" class="form-control" id="id" placeholder="Ingrese id" name="id">
 				 </div>
 			 	 <div class="mb-3 mt-3">
   				 <label for="rol" class="form-label">Rol:</label>
   				 <select name="txtMetodo_Compra" class="form-control" required="true">
            <option  value="">administrador</option>
            <option  value="">Cliente</option>
            <option  value="">Empledo</option>
           </select><br>
 				 </div>
                 <div class="mb-3 mt-3">
   				 <label for="nombre" class="form-label">Nombre Completo:</label>
   				 <input type="nombre" class="form-control" id="nombre" placeholder="Ingrese Nombre Completo" name="nombre">
 				 </div>
                 <div class="mb-3 mt-3">
   				 <label for="rtn" class="form-label">Numero de Identidad:</label>
   				 <input type="rtn" class="form-control" id="rtn" placeholder="Ingrese Numero de Identidad" name="rtn">
 				 </div>
                 <div class="mb-3 mt-3">
   				 <label for="profesion" class="form-label">Profesion:</label>
   				 <input type="profesion" class="form-control" id="profesion" placeholder="Ingrese Profesion" name="profesion">
 				 </div>
                 <div class="mb-3 mt-3">
   				 <label for="direccion" class="form-label">Direccion:</label>
   				 <input type="direccion" class="form-control" id="direccion" placeholder="Ingrese Direccion" name="direccion">
 				 </div>
                 <div class="mb-3 mt-3">
   				 <label for="celular" class="form-label">Numero Celular:</label>
   				 <input type="celular" class="form-control" id="celular" placeholder="Ingrese Numero Celular" name="celular">
 				 </div>
                 <div class="mb-3 mt-3">
   				 <label for="referencia" class="form-label">Referencia:</label>
   				 <input type="referencia" class="form-control" id="referencia" placeholder="Ingrese Referencia" name="referencia">
 				 </div>
                 <div class="mb-3 mt-3">
   				 <label for="celularreferencia" class="form-label">Numero Celular Referencia:</label>
   				 <input type="celularreferencia" class="form-control" id="celularreferencia" placeholder="Ingrese Numero Celular Referencia" name="celularreferencia">
 				 </div>
                 <div class="mb-3 mt-3">
   				 <label for="experiencia" class="form-label">Experiencia Laboral:</label>
   				 <input type="experiencia" class="form-control" id="experiencia" placeholder="Ingrese Experiencia Laboral" name="experiencia">
 				 </div>
                 <div class="mb-3 mt-3">
   				 <label for="email" class="form-label">Correo Electronico:</label>
   				 <input type="email" class="form-control" id="email" placeholder="Ingrese Correo Electronico" name="email">
 				 </div>
          <label for="">Adjuntar Curriculúm:</label>
          <input type="file" class="form-control" accept="image/*"  name="" placeholder="" id="cv" require="">
           
		</form>
	  </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" data-bs-dismiss="modal">AGREGAR</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CERRAR</button>
      </div>

    </div>
  </div>
</div> <br>
    <!-- Inicio de la tabla -->
  <div class="container" style="margin-top: 10px;padding: 5px">
     <table id="tablax" class="table table-responsive table-bordered table-striped">
          <thead>
          <tr>
        <th>ID</th>
        <th>ROL</th>
        <th>IMAGEN</th>
        <th>NOMBRE COMPLETO</th>
        <th>NUMERO IDENTIDAD</th>
        <th>PROFESION</th>
        <th>DIRECCION</th>
        <th>CELULAR</th>
        <th>REFERENCIA</th>
        <th>CEL. DE REFERENCIA</th>
        <th>EXPERIENCIA LABORAL</th>
        <th>CORREO</th>
        <th>CURRICULÚM</th>
        <th>ACCIONES</th>
      </tr>
          </thead>
              <tbody id="myTable">
              <tr>
        <td>1</td>
        <td>Administrador</td>
        <td><img src="https://www.w3schools.com/w3images/team2.jpg" alt="" width="100px" height="70px"></td>
        <td>ROGER EDGARDO</td>
        <td>0801-1993-02592</td>
        <td>LIC. ADMINISTARCION</td>
        <td>TEGUCIGALPA</td>
        <td>9865-3241</td>
        <td>ING. ARMANDO COELLO</td>
        <td>8965-4732</td>
        <td>5 AÑOS COMO GERENTE</td>
        <td>ROGER@GMAILCOM</td>
        <td>pdf</td>
        <td> <button type="button" class="btn btn-warning">Editar</button>
			 <button type="button" class="btn btn-danger">Eliminar</button> </td>
      </tr>      
               </tbody>        
     </table>
  </div>
@stop

@section('css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- para modal-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Fin para modal-->
    <!-- BOOTSTRAP Tabla-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- Fin BOOTSTRAP Tabla-->
    
@endsection

@section('js')
 <!-- inicio script de la tabla, buscador, paginado -->
 <script src="https://code.jquery.com/jquery-3.4.1.js"
         integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" 
         crossorigin="anonymous">
      </script>
     <!-- DATATABLES -->
     <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
     </script>
        <!-- BOOTSTRAP -->
          <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
          </script>
             <script>
              $(document).ready(function () {
              $('#tablax').DataTable({
                 language: {
                 processing: "Tratamiento en curso...",
                 search: "Buscar&nbsp;:",
                 lengthMenu: "Agrupar de _MENU_ items",
                 info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                 infoEmpty: "No existen datos.",
                 infoFiltered: "(filtrado de _MAX_ elementos en total)",
                 infoPostFix: "",
                 loadingRecords: "Cargando...",
                 zeroRecords: "No se encontraron datos con tu busqueda",
                 emptyTable: "No hay datos disponibles en la tabla.",
                 paginate: {
                                first: "Primero",
                                previous: "Anterior",
                                next: "Siguiente",
                                last: "Ultimo"
                            },
                    aria: {
                            sortAscending: ": active para ordenar la columna en orden ascendente",
                            sortDescending: ": active para ordenar la columna en orden descendente"
                          }
                },
               
                   lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
              });
              });
          </script>
    
     <!-- Fin inicio script de la tabla, buscador, paginado -->
@stop