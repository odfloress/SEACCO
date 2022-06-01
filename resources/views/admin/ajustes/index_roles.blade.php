@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    
@stop

@section('content')

<body><br> 
<!-- Inicio de modal de agregar -->
<div class="container mt-3">
        <h3>Roles de Usuario Agregados</h3> <br>  
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Nuevo Rol
        </button>
    </div>

<!-- El Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Encabezado del modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Nuevo Rol</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Fin Encabezado del modal -->

                <!-- Cuerpo del modal Modal -->
                <div class="modal-body">
                <div class="container mt-3">
	                <label for="pwd" class="form-label">Rol:</label><br>
                    <input type="text" name="" id="">  
                </div>

              <div class="container mt-3">
<label for="pwd" class="form-label">Nuevo Acceso:</label>
<form action="/action_page.php">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
<label class="form-check-label" for="check1">Visualizar</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
<label class="form-check-label" for="check2">Guardar</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">
<label class="form-check-label" for="check3">Actualizar</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">
<label class="form-check-label" for="check4">Elimiar</label>
</div>
</form>
</div>
<div class="container mt-3">
<label for="pwd" class="form-label">Pantallas:</label>
<form action="/action_page.php">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
<label class="form-check-label" for="check1">Personas</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
<label class="form-check-label" for="check2">Catalogo</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">
<label class="form-check-label" for="check3">Inventario</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">
<label class="form-check-label" for="check4">Proyectos</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">
<label class="form-check-label" for="check4">Reportes</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">
<label class="form-check-label" for="check4">Ajustes</label>
</div>
</form>
                </div>

                <div class="container mt-3">
	                <label for="pwd" class="form-label">Estado de Rol:</label>
                    <form>
                        <select class="form-select form-select-sm mt-3">
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                    </form>    
                </div>


                </div>
                <!-- Fin Cuerpo del modal Modal -->
                <!-- pie del modal -->
                <div class="modal-footer">
      	            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
                <!-- Fin pie del modal -->
            </div>
        </div>
    </div>
    <!-- Fin  de modal de agregar --> <br>
    <!-- Inicio de la tabla -->
    <div class="container" style="margin-top: 10px;padding: 5px">
        <table id="tablax" class="table  table-bordered table-striped ">
            <thead>
                <tr>
                <th>Id</th>
                <th>Rol</th>
                <th>Estado</th>
        	    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                <td>1</td>
                <td>Administrador</td>
                <td>Activo</td>
                <td> 
                <form action="" method="post">               
                    <!-- Inicio de modal de editar -->
<div class="container mt-3">
        
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal2">
            Editar
        </button>
    </div>

<!-- El Modal -->
    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Encabezado del modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Editar Rol</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Fin Encabezado del modal -->

                <!-- Cuerpo del modal Modal -->
                <div class="modal-body">
                <div class="container mt-3">
	                <label for="pwd" class="form-label">Rol:</label><br>
                    <input type="text" name="" id="">  
                </div>

              <div class="container mt-3">
<label for="pwd" class="form-label">Nuevo Acceso:</label>
<form action="/action_page.php">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
<label class="form-check-label" for="check1">Visualizar</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
<label class="form-check-label" for="check2">Guardar</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">
<label class="form-check-label" for="check3">Actualizar</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">
<label class="form-check-label" for="check4">Elimiar</label>
</div>
</form>
</div>
<div class="container mt-3">
<label for="pwd" class="form-label">Pantallas:</label>
<form action="/action_page.php">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
<label class="form-check-label" for="check1">Personas</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
<label class="form-check-label" for="check2">Catalogo</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">
<label class="form-check-label" for="check3">Inventario</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">
<label class="form-check-label" for="check4">Proyectos</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">
<label class="form-check-label" for="check4">Reportes</label>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">
<label class="form-check-label" for="check4">Ajustes</label>
</div>
</form>
                </div>

                <div class="container mt-3">
	                <label for="pwd" class="form-label">Estado de Rol:</label>
                    <form>
                        <select class="form-select form-select-sm mt-3">
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                    </form>    
                </div>


                </div>
                <!-- Fin Cuerpo del modal Modal -->
                <!-- pie del modal -->
                <div class="modal-footer">
      	            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
                <!-- Fin pie del modal -->
            </div>
        </div>
    </div>
    <!-- Fin  de modal de Editar -->
                    <button  value="btnEliminar" name="accion" 
                        onclick="return confirm('¿Quieres eliminar este dato?')"
                        type="submit" class="btn btn-danger " data-id="19">
                        <i class="fa fa-times fa fa-white"></i>
                            Eliminar
                    </button>
                </form>  
                 
                       
            </tbody>        
        </table>
    </div>
</body>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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