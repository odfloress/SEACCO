@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
 
@stop

@section('content')
       <!-- inicio rango de fechas -->
       <div class="container mt-3">
         
        <center><h1>Bitacora</h1></center>
        <br>
       <form>
            <div class="row">
                <div class="col">
                Fecha Inicial <input type="Date" class="form-control" >
                </div>
                <div class="col">
                Fecha Final <input type="Date" class="form-control">
                </div>
            </div>
        </form>
       </div>
       
       <!-- fin rangos de fechas -->
    <!-- Inicio de la tabla -->
  <div class="container" style="margin-top: 10px;padding: 5px">
     <table id="tablax" class="table table-bordered table-striped">
          <thead>
            <tr>
            <th>Fecha</th>
            <th>Usuario</th>
            <th>Acción</th>
            </tr>
          </thead>
              <tbody id="myTable">
                 <tr>
                        <td>5/8/2022 7:00am</td>
                        <td>Empleado</td>
                        <td>Modificar fotografia</td>                        
                 </tr>  
                 <tr>
                        <td>8/10/2022 7:07am</td>
                        <td>Admin</td>
                        <td>Agrego usuario</td>                        
                 </tr> 
                 <tr>
                        <td>10/4/2022 7:14am</td>
                        <td>Admin</td>
                        <td>elimino usuario</td>                        
                 </tr>       
               </tbody>        
     </table>
  </div>
 <!-- Fin Inicio de la tabla -->
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

   
    
@stop

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