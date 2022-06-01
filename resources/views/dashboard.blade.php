@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 > DASHBOARD HOME</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">     
        <div class="row">
                {{-- 1ra card --}}
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150 </h3>
                            <sup style="font-size: 20px"></sup>
                            <p>Cotizaciones</p>
                        </div>    
                        <div class="icon ">
                            <i class="fa-solid fa-square-poll-horizontal"></i>  
                            {{-- fa-solid fa-square-poll-horizontal --}}
                            {{-- fa-solid fa-square-poll-horizontal --}}

                        </div>
                        <a class="small-box-footer" href="/proj/cot">
                                More info
                                <i class="fas fa-arrow-circle-right"></i>
                        </a>

                    </div>
                </div>
                {{-- 2da card --}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3> 53
                                    <sup style="font-size: 20px"></sup>
                                </h3>
                                <p>Solicitudes</p>
                            </div>
                            <div class="icon "  > 
                                <i class="fa-solid fa-envelope  "> </i>   
                            </div>
                            <a class="small-box-footer" href="proj/sempl">
                                More Info
                            <i class="fas fa-arrow-circle-right"></i>   
                            </a>
                            <a ></a>
                        </div>
                    </div>
                {{-- 3a card --}}
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>44
                                    <sup style="font-size: 20px"></sup>  
                                    </h3>
                                    <p>Usuarios registrados</p>
                                </div>
                                <div class="icon " > 
                                    <i class="fa-solid fa-user " > </i>
                                       
                                </div>
                                <a class="small-box-footer" href="/personas/admin">
                                    More Info
                                    <i class="fas fa-arrow-circle-right"></i>   
                                </a>
                                <a ></a>
                            </div>
                        </div>
                {{-- 4 card --}}
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>65</h3>
                                        <p>Proyectos</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-diagram-project"></i>
                                    </div>
                                    <a href="/proj/act" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-6">
                {{-- Grafico de barras --}}
                <canvas id="myChartbarras" width="500%" height="400px"></canvas>
            </div>
            <div class="col-lg-6 col-6">
                <div id="myChart" style="width:500%; max-width:500px; height:400px;">
                </div>
            </div>

        </div>
                
                


    </div>  
</section>

    
@stop

@section('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    
@endsection

@section('js')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script> console.log('Hi!'); </script>
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.js?v=3.2.0"></script>
    <script src="dist/js/demo.js"></script>
    <script src="dist/js/pages/dashboard3.js"></script>

    {{-- // Graficos de barras  --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script> console.log('Hi!'); </script>
        {{-- chartjs barra --}}
        <script>
            const ctx = document.getElementById('myChartbarras').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                    datasets: [{
                        label: '# Proyectos por mes ', 
                        data: [12, 19, 3, 5, 2, 3, 14, 10, 5, 20, 1, 19],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(54, 162, 235, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

        </script>
        {{-- chart donut --}}
        <script>
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
             
            function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Departamento', 'Mhl'],
              ['Fco Morazán',54.8],
              ['El paraíso ',48.6],
              ['Comayagua',44.4],
              ['Atlantida',23.9],
              ['Valle',23.9],
            ]);
             
            var options = {
              title:'Cotizaciones por ubicación',
              is3D:true
            };
             
            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
              chart.draw(data, options);
            }
            </script>
    
@endsection


