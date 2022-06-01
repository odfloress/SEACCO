@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
    
@stop

@section('content')
 <!-- Inicio de modal de agregar -->
 <div class="container mt-3">
        <h3>Empleados</h3> <br>  
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Agregar Empleado
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
                <label for="rol" class="form-label">Rol:</label>
                <select name="txtMetodo_Compra" class="form-control" required="true">
                <option  value="">administrador</option>
                <option  value="">Cliente</option>
                <option  value="">Empledo</option>
               </select><br>
                <label for="codigo" class="form-label">Codigo:</label>
   				<input type="codigo" class="form-control" id="codigo" placeholder="Ingrese Codigo" name="codigo">
        		<br>
                <label for="nombre" class="form-label">Nombre:</label>
   				 <input type="nombre" class="form-control" id="nombre" placeholder="Ingrese Nombre" name="nombre">
        		<br>
        		<label for="apellidos" class="form-label">Apellidos:</label>
   				 <input type="apellidos" class="form-control" id="apellidos" placeholder="Ingrese Apellidos" name="apellidos">
        		<br>
                <label for="rtn" class="form-label">Numero de Identidad:</label>
   				 <input type="rtn" class="form-control" id="rtn" placeholder="Ingrese Numero de Identidad" name="rtn">
       			<br>
                <label for="telefono" class="form-label">Telefono:</label>
   				 <input type="telefono" class="form-control" id="telefono" placeholder="Ingrese Numero Telefono" name="telefono">
                <br>
                <label for="especialidad" class="form-label">Especialidad:</label>
   				 <input type="especialidad" class="form-control" id="especialidad" placeholder="Ingrese Especialidad" name="especialidad">
                <br>
                <label for="domicilio" class="form-label">Domicilio:</label>
   				 <input type="domicilio" class="form-control" id="domicilio" placeholder="Ingrese Domicilio" name="domicilio">
                <br>
                <label for="celularreferencia" class="form-label">Numero Celular Referencia:</label>
   				 <input type="celularreferencia" class="form-control" id="celularreferencia" placeholder="Ingrese Numero Celular Referencia" name="celularreferencia">
                <br>
                <label for="proyecto" class="form-label">Proyecto:</label>
   				 <input type="proyecto" class="form-control" id="proyecto" placeholder="Ingrese Proyecto en el que Trabaja" name="proyecto">
                <br>
                <label for="historial" class="form-label">Historial de Empleado:</label>
   				 <input type="historial" class="form-control" id="historial" placeholder="Ingrese Historial de Empleado" name="historial">
        		<br>
       			<label for="">Imagen:</label> 
        		<input type="file" class="form-control" accept="image/*"  name="" placeholder="" id="txtFoto" require="">
         		<br>
                 <label for="">Adjuntar Curriculúm:</label>
                <input type="file" class="form-control" accept="image/*"  name="" placeholder="" id="cv" require="">
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
     <table id="tablax" class="table  table-responsive table-bordered table-striped">
          <thead>
            <tr>
            <th>Id</th>
            <th>Rol</th>
            <th>Codigo</th>
            <th>Fotografia</th>
            <th>Nombre</th>
        	<th>Apellidos</th>
        	<th>Identidad</th>
        	<th>Telefono</th>
        	<th>Profesion</th>
        	<th>Domicilio</th>
        	<th>Contacto Referencia</th>
        	<th>Proyecto</th>
        	<th>Historial Empleado</th>
        	<th>Acciones</th>
            </tr>
          </thead>
              <tbody id="myTable">
                 <tr>
                        <td>1</td>
                        <td>Empleado</td>
                        <td>C1</td>
                        <td> </td>
                        <td>Roger</td>
        				<td>Canaca</td>
        				<td>0801-1993-02592</td>
        				<td>9646-8543</td>
        				<td>Albañileria</td>
        				<td>Direccion</td>
        				<td>Col. Iberia entrada principal</td>
        				<td>Ejecucion agua caliente</td>
        				<td>Colaborador</td>
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
 <!-- Fin Inicio de la tabla -->
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