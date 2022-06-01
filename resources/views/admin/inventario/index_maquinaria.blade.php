@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
<h3>Inventario maquinaria y equipo</h3> 
@stop

@section('content')
 <!-- Inicio de modal de agregar -->
 <div class="container mt-3">
        {{-- <h3>Inventario de Materiales</h3> <br>   --}}
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Agregar Materiales
        </button>
    </div>

<!-- El Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
     <div class="modal-content">

        <!-- Encabezado del modal -->
        <div class="modal-header">
            <h4 class="modal-title">Agregar Material</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Fin Encabezado del modal -->

        <!-- Cuerpo del modal Modal -->
        <div class="modal-body">

          <!-- inicio  -->
       <div class="container mt-3">
         
          <form>
             <div class="row">
                 <div class="col">
                 <label for="">ITEM</label>
                   <input type="text" class="form-control" name="txtPrecio_Compra" required value="" placeholder="" id="txtPrecio_Compra"   >
                 </div>
                 <div class="col">
                 <label for="">Categoria de Material</label>
                    <select name="txtMetodo_Compra" class="form-control" required="true">
                    <option  value="">Seleccione Tipo Articulo</option>
                    <option  value="">Motor</option>
                    <option  value="">Electrico</option>
                    <option  value="">ETC</option>       
                   </select>
                 </div>
             </div>
         </form>
        </div>
        
        <!-- fin fin -->    
        <br>
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="txtPrecio_Compra" required value="" placeholder="" id="txtPrecio_Compra"   >
        <br>
          

         <!-- inicio  -->
       <div class="container mt-3">         
         <form>
            <div class="row">
                <div class="col">
                <label for="">Descripción del modelo</label>
        <input type="text" class="form-control" name="txtPrecio_Compra" required value="" placeholder="" id="txtPrecio_Compra"   >
                </div>
                <div class="col">
                <label for="">Estado del Equipo</label>
                    <select name="txtMetodo_Compra" class="form-control" required="true">
                    <option  value="">Seleccione el estado</option>
                    <option  value="">Dar Mantenimiento</option>
                    <option  value="">Reparado por garantia</option>
                    <option  value="">En uso</option>
                    <option  value="">Disponible</option>
                    <option  value="">Dañado</option>       
                    </select>
                </div>
            </div>
        </form>
       </div>
       <!-- fin fin -->

         <!-- inicio  -->
         <div class="container mt-3">         
         <form>
            <div class="row">
                <div class="col">
                <label for="">Garantia</label>
                    <input type="text" class="form-control" name="txtPrecio_Compra" required value="" placeholder="" id="txtPrecio_Compra"   >
                </div>
                <div class="col">
                <label for="">Proyecto</label>
                    <select name="txtMetodo_Compra" class="form-control" required="true">
                    <option  value="">Seleccione el Proyecto</option>
                    <option  value="">Agua Caliente</option>
                    <option  value="">Valle</option>
                    <option  value="">Santa Ana</option>       
                    </select>
                </div>
            </div>
        </form>
       </div>
       <!-- fin fin -->
       <br>
       <label for="">Asignado</label>
	     <select name="txtMetodo_Compra" class="form-control" required="true">
	    <option  value="">Asignar</option>
        <option  value="">Ninguna</option>
        <option  value="">David</option>
        <option  value="">Samuel</option>       
       </select><br>
        <!-- inicio  -->
         <div class="container mt-3">         
         <form>
            <div class="row">
                <div class="col">
                <label for="">Lugar compra</label>
                  <input type="text" class="form-control" name="txtPrecio_Compra" required value="" placeholder="" id="txtPrecio_Compra"   >
                </div>
                <div class="col">
                <label for="">Precio</label>
                   <input type="text" class="form-control" name="txtPrecio_Compra" required value="" placeholder="" id="txtPrecio_Compra"   >
                </div>
            </div>
        </form>
       </div>
       <!-- fin fin -->
             
        <br>
        <label for="">Fecha Compra</label>
        <input type="Date" class="form-control" name="txtfecha_nacimiento" required value="" placeholder="" id="txtfecha_nacimiento" require="">
        <br>
       <label for="">Imagen:</label> 
        <input type="file" class="form-control" accept="image/*"  name="" placeholder="" id="txtFoto" require="">
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
            <th>Imagen</th>
            <th>ITEM</th>
            <th>Categoria Material</th>
            <th>Nombre</th>
            <th>Descripcion modelo</th>
            <th>Estado del Equipo</th>
            <th>Garantia</th>
            <th>Proyecto</th>
            <th>Asignado</th>
            <th>Lugar compra</th>
            <th>Precio</th>
            <th>Fecha Compra</th>
            <th>Acciones</th>
            </tr>
          </thead>
              <tbody id="myTable">
                 <tr>
                        <td>1</td>
                        <td>Imagen</td>
                        <td>EM-CC1</td>
                        <td>Motor</td>
                        <td>taladro</td>
                        <td>concretera cipsa cap. 2 bolsas motor honda | mdsm200901</td>
                        <td>Dar Mantenimiento</td>
                        <td>N|A</td>
                        <td>AGUA CALIENTE</td>
                        <td>ROGER CANACA</td>
                        <td>TECUN HN</td>
                        <td>L85,655.79</td>        
                        <td>21/04/2021</td>
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
                 <tr>
                 <td>2</td>
                        <td>Imagen</td>
                        <td>EM-CC1</td>
                        <td>Motor</td>
                        <td>taladro</td>
                        <td>concretera cipsa cap. 2 bolsas motor honda | mdsm200901</td>
                        <td>Dar Mantenimiento</td>
                        <td>N|A</td>
                        <td>AGUA CALIENTE</td>
                        <td>ROGER CANACA</td>
                        <td>TECUN HN</td>
                        <td>L85,655.79</td>        
                        <td>21/04/2021</td>
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
                 <tr>
                 <td>3</td>
                        <td>Imagen</td>
                        <td>EM-CC1</td>
                        <td>Motor</td>
                        <td>pulidora</td>
                        <td>concretera cipsa cap. 2 bolsas motor honda | mdsm200901</td>
                        <td>Dar Mantenimiento</td>
                        <td>N|A</td>
                        <td>AGUA CALIENTE</td>
                        <td>ROGER CANACA</td>
                        <td>TECUN HN</td>
                        <td>L85,655.79</td>        
                        <td>21/04/2021</td>
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