@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    
@stop

@section('content')
<br>
<body >
	<div class="container">
            <!-- Database List -->
            <div class="row">
                <div class="col-lg-4 offset-lg-4 o_database_list">
                    <img src="https://scontent.ftgu1-2.fna.fbcdn.net/v/t1.6435-9/58380416_658896734541698_2611083414362652672_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeEIAIufNg--8hNvz9tsKJGx2CwOM0yzM3PYLA4zTLMzc43WW68H1Dwzt7LMw8TIYFcKr_5J8X7ALZk2k9P135Uq&_nc_ohc=YAHHqZXxgq8AX-iKLee&_nc_ht=scontent.ftgu1-2.fna&oh=00_AT_lTjcZpSdlQ2XJ4UQYIJvBrIdSY09BH38JVrgYiVWIUw&oe=6278069F" class="img-fluid d-block mx-auto"/>
                    <br>
                    <div class="shadow-lg p-4 mb-4 bg-white">
                        <div class="container mt-3 ">
                        <div class="btn-group btn-group-sm d-grid gap-3">
                                            
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Respaldar Base de Datos
                            </button>
                        </div>

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Respaldar Base de Datos</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label">Nombre de la Base de Datos</label>
                                                        <input id="dbname_backup" type="text" name="name" class="form-control" required="required" readonly="readonly"/>
                                                    </div>
                                                        <div class="form-group">
                                                            <label for="backup_format" class="col-form-label">Formato</label>
                                                            <select id="backup_format" name="backup_format" class="form-control" required="required">
                                                                <option value="zip">zip (incluye almacén de archivos)</option>
                                                                <option value="dump">pg_dump custom format (without filestore)</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                                
                                                <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                	    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Continuar</button>
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                    </div>
                                            </div>
                        </div>
                    </div>
                    


                    </div>
                        <div class="container mt-3 ">
                            <div class="btn-group btn-group-sm d-grid gap-3">
                                            
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
                                              Restaurar Base de Datos
                                            </button>
                                          </div>

                                          <!-- The Modal -->
                                          <div class="modal" id="myModal2">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Restaurar Base de Datos</h4>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">

                                                                  <div class="form-group row">
                                                                      <label for="backup_file" class="col-md-4 col-form-label">Archivo</label>
                                                                      <div class="col-md-8">
                                                                          <input id="backup_file" type="file" name="backup_file" class="required"/>
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row">
                                                                      <label for="name" class="col-md-4 col-form-label">Nombre de la Base de Datos</label>
                                                                      <div class="col-md-8">
                                                                          <input id="dbname_backup" type="text" name="name" class="form-control" required="required" pattern="^[a-zA-Z0-9][a-zA-Z0-9_.-]+$" title="Solo se permiten caracteres alfanuméricos, guiones bajos, guiones y puntos."/>
                                                                      </div>
                                                                  </div>
                                                                  <BR> 
                                                                  <div class="form-group row">
                                                                      <label for="name2" class="col-md-4 col-form-label">Servidor Local</label>
                                                                      <div class="col-md-8">
                                                                          <input id="dbname_restore" type="text" name="name" class="form-control" required="required" pattern="^[a-zA-Z0-9][a-zA-Z0-9_.-]+$" title="Solo se permiten caracteres alfanuméricos, guiones bajos, guiones y puntos."/>
                                                                      </div>
                                                                  </div>
                                                                   <BR>

                                                          

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                	<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Continuar</button>
                                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                </div>

                                              </div>
                                            </div>


                                        </div>
                                    
                                </div>
                            
                        </div>
                    
                </div>
            </div>
        </div>
        
        
        
</body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
 
@stop