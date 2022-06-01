@extends('adminlte::page')

@section('title', 'Reporte_Inventario')

@section('content_header')
    <h1> </h1>
@stop

@section('content')
    {{-- DAtatable de muestra --}}
    <div class="container-fluid">
            
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">INVENTARIO </div>
                    <div class="card-body">
                        {{-- Filtros fechas --}}
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <div class="text-center ">Fecha de Inicio </div>
                                <input type="text" name="start_date" class="form-control start_date" readonly />
                            </div>
                            <div class="col-md-3">
                                    <div class="text-center ">Fecha de Finalización </div>
                                    <input type="text" name="end_date" class="form-control end_date" readonly />
                            </div>
                            {{-- Boton de filtrar --}}
                            <div class="col-md-1">
                                <br>
                                <button id="filtrar" class="btn btn-danger">Filtrar</button>
                            </div>
                        </div>
                        {{-- Filtros fechas David --}}
                        {{-- <div class="container mt-3">
                            <form>
                                <div class="row">
                                    <div class="col-md-3">
                                    Fecha Inicial <input type="Date" class="form-control" >
                                    </div>
                                    <div class="col-md-3">
                                    Fecha Final <input type="Date" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                         

                        <table class="table table-bordered table-striped " id='invTbl'>
                            <thead>
                                <tr>
                                    <th scope="col"> Id</th>
                                    <th scope="col"> Item</th>
                                    <th scope="col"> Tipo</th>
                                    <th scope="col"> Nombre</th>
                                    <th scope="col"> Estado_Equipo</th>
                                    <th scope="col"> Garantía</th>
                                    <th scope="col"> Estado</th>
                                    <th scope="col"> Proyecto</th>
                                    <th scope="col"> Precio</th>
                                    
                                </tr>
                            </thead>
                            
                        
                            
                        </table>
                        

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection

@section('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    {{-- DATA TABLE  --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

 
    
    {{-- Scrypt de botones --}}
        <script>
            $(function() {
                const languages = {
                    'es': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                };
                $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
                    className: 'btn btn-sm'
                })
                $.extend(true, $.fn.dataTable.defaults, {
                    responsive: true,
                    language: {
                        url: languages['es']
                    },
                    pageLength: 15,
                    dom: 'lBfrtip',
                    buttons: [{
                            extend: 'copy',
                            className: 'btn-light',
                            text: 'Copiar',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'csv',
                            className: 'btn-light',
                            text: 'CSV',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'excel',
                            className: 'btn-light',
                            text: 'Excel',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'pdf',
                            className: 'btn-light',
                            text: 'PDF',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'print',
                            className: 'btn-light',
                            text: 'Imprimir',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'colvis',
                            className: 'btn-light',
                            text: 'Visibilidad Columnas',
                            exportOptions: {
                                columns: ':visible'
                            }
                        }
                    ]
                });
            });
        </script> 
    {{-- Llamado de datos  --}}
        <script>
            $(document).ready(function() {
                $(".start_date").flatpickr();
                $(".end_date").flatpickr();

                $('#invTbl').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    ajax: "{{route('reportes/inventario')}}",
                    dataType: 'json',
                    type: "POST",
                    columns: [
                        {
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'item',
                            name: 'item',
                        },
                        {
                            data: 'type',
                            name: 'type'
                        },
                        {
                            data: 'name',
                            name: 'name',
                        },
                        {
                            data: 'status_item',
                            name: 'status_item',
                            
                        },
                        {
                            data: 'warranty',
                            name: 'warranty',
                            
                        },
                        {
                            data: 'status_name',
                            name: 'status_name',
                            
                        },
                        {
                            data: 'project_id',
                            name: 'proyectos.name',
                            
                        },
                        {
                            data: 'price',
                            name: 'price',
                            
                        },
                    
                    ],
                })

                $('#filtrar').click(function(){
                table.draw()
                })
            })
        </script>   

    
@endsection