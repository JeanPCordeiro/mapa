@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark"><B>Cellulose</B> Reports</h1>
@stop

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{!!$factory!!} Breakdown Rate for line {!!$line!!}</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="lineChartSHL"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->

@stop

@section('js')

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function() {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------


    var lineChartCanvasSHL = $('#lineChartSHL').get(0).getContext('2d')

    var lineChartDataSHL = {
        labels: {!!$month!!},
        datasets: [{
                label: 'Monthly rate',
                fill: false,
                borderColor: 'orange',
                data: {!!$data!!}
            },
            {
                label: 'YTD rate',
                fill: false,
                borderColor: 'cyan',
                borderDash: [5, 2],
                pointRadius: false,
                data: {!!$dataYTD!!}
            },

            {
                label: 'target',
                fill: false,
                borderColor: 'red',
                borderDash: [5, 5],
                pointRadius: false,
                data: {!!$targetrate!!}
            },
            
        ]
    }

    var lineChartOptionsSHL = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
            display: true
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: true,
                }
            }],
            yAxes: [{
                gridLines: {
                    display: true,
                }
            }]
        }
    }

    // This will get the first returned node in the jQuery collection.
    var lineChartSHL = new Chart(lineChartCanvasSHL, {
        type: 'line',
        data: lineChartDataSHL,
        options: lineChartOptionsSHL
    })





})
</script>

@stop