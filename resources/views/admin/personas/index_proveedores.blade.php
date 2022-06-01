@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')

@stop

@section('content')
<!-- Inicio de modal de agregar -->
<div class="container mt-3">
        <h3>Proveedores</h3> <br>  
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Agregar Proveedor
        </button>
    </div>

<!-- El Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
     <div class="modal-content">

        <!-- Encabezado del modal -->
        <div class="modal-header">
            <h4 class="modal-title">Agregar Datos</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Fin Encabezado del modal -->

        <!-- Cuerpo del modal Modal -->
        <div class="modal-body">
        		<label for="id" class="form-label">Id:</label>
   				<input type="id" class="form-control" id="id" placeholder="Ingrese id" name="id">
        		<br>
                <label for="codigo" class="form-label">Codigo:</label>
   				<input type="codigo" class="form-control" id="codigo" placeholder="Ingrese Codigo" name="codigo">
        		<br>
                <label for="nombreproveedor" class="form-label">Nombre del Proveedor:</label>
   				 <input type="nombreproveedor" class="form-control" id="nombreproveedor" placeholder="Ingrese Nombre del Proveedor" name="nombreproveedor">
        		<br>
        		<label for="sectorcomercial" class="form-label">Sector Comercial:</label>
   				 <input type="sectorcomercial" class="form-control" id="sectorcomercial" placeholder="Ingrese Sector Comercial" name="sectorcomercial">
        		<br>
                <label for="direccion" class="form-label">Direccion:</label>
   				 <input type="direccion" class="form-control" id="direccion" placeholder="Ingrese Direccion" name="direccion">
       			<br>
                <label for="telefono" class="form-label">Telefono:</label>
   				 <input type="telefono" class="form-control" id="telefono" placeholder="Ingrese Numero Telefono" name="telefono">
                <br>
                <label for="email" class="form-label">Correo Electronico:</label>
   				 <input type="email" class="form-control" id="email" placeholder="Ingrese Correo Electronico" name="email">
                <br>
       			<label for="">Imagen:</label> 
        		<input type="file" class="form-control" accept="image/*"  name="" placeholder="" id="txtFoto" require="">
         		<br>
        </div>
        <!-- Fin Cuerpo del modal Modal -->

        <!-- pie del modal -->
        <div class="modal-footer">
      	<button type="button" class="btn btn-primary" data-bs-dismiss="modal">AGREGAR</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CERRAR</button>
      </div>
        <!-- Fin pie del modal -->

     </div>
   </div>
 </div>
<!-- Fin  de modal de agregar --> <br>
    <!-- Inicio de la tabla -->
  <div class="container" style="margin-top: 10px;padding: 5px">
     <table id="tablax" class="table table-responsive table-bordered table-striped">
          <thead>
            <tr>
            <th>Id</th>
            <th>Codigo</th>
            <th>Fotografia</th>
            <th>Nombre Proveedor</th>
        	<th>Sector Comercial</th>
        	<th>Direccion</th>
        	<th>Telefono</th>
        	<th>Correo</th>
        	<th>Acciones</th>
            </tr>
          </thead>
              <tbody id="myTable">
                 <tr>
                        <td>1</td>
                        <td>C1</td>
                        <td> </td>
                        <td>La Mundial</td>
        				<td>Articulos para el Hogar</td>
        				<td>Boulevar Suyapa</td>
        				<td>9646-8543</td>
        				<td>lamundial@gmail.com</td>
                        <td> 
                            <form action="" method="post">               
                        
                                <button  value="Seleccionar" name="accion" 
                                    class="btn btn-warning" data-id="19">
                                    <i class="fa fa-pencil"></i>
                                    Editar
                                </button>
                                
                                <button  value="btnEliminar" name="accion" 
                                    onclick="return confirm('¿Quieres eliminar este dato?')"
                                    type="submit" class="btn btn-danger " data-id="19">
                                    <i class="fa fa-times fa fa-white"></i>
                                    Eliminar
                                </button>
                    
                            </form>  
                        </td>
                 </tr>        
               </tbody>        
     </table>
  </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
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
@stop