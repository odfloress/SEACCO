@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
<h3></h3>  
@stop

@section('content')
        <!-- Inicio de modal de agregar -->
    <div class="container mt-3">
        <h3>Cotizaciones de proyectos</h3> <br>  
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Cotizar
        </button>
    </div>

<!-- El Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
     <div class="modal-content">

        <!-- Encabezado del modal -->
        <div class="modal-header">
            <h4 class="modal-title">Agregar Categoria</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Fin Encabezado del modal -->

        <!-- Cuerpo del modal Modal -->
        <div class="modal-body">
        <label for="">Codigo</label>
        <input type="text" class="form-control" name="txtPrecio_Compra" required value="" placeholder="" id="txtPrecio_Compra"   >
        <br>
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="txtPrecio_Compra" required value="" placeholder="" id="txtPrecio_Compra"   >
        <br>
        
        </div>
        <!-- Fin Cuerpo del modal Modal -->

        <!-- pie del modal -->
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs- dismiss="modal">Agregar</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
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
            <th>ID</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Proyecto</th>
            <th>Especificar</th>            
            <th>Lugar de Proyecto</th>
            <th>Acciones</th>
            </tr>
          </thead>
              <tbody id="myTable">
                 <tr>
                        <td>1</td>
                        <td>David</td>
                        <td>123423435</td>
                        <td>asfdf@gmail.com</td>
                        <td>Planos</td>
                        <td>palnos de casa</td>
                        <td>Agua caliente</td>
                        <td> 

                                <button  value="btnEliminar" name="accion" 
                                    onclick="return confirm('¿Desea aceptar la solicitud?')"
                                    type="submit" class="btn btn-warning " data-id="19">
                                    <i class="fa fa-pencil"></i>
                                    Aceptar
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