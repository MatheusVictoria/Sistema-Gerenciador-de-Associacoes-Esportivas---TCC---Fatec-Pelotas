<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Mes');
        data.addColumn('number', 'Total');

<?php foreach ($mensalidades as $mensalidade) { ?>
            data.addRows([['<?= $mensalidade->mes ?>', <?= $mensalidade->valor_pago ?>]]);
<?php } ?>

        var options = {
            title: 'Valor Total Geral por Mes',
            hAxis: {title: 'Mes', titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Graficos e Relatórios
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Graficos e Relatórios </a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Grafico Pagamento CT </a></li>
        </ol>
    </section>
    <!-- right col -->
    <div>
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div >
                    <!-- general form elements -->
                    <div class="box box-primary">

                        <div class="box-body">

                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">GRafico de valor total por mes</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="chart">
                                        <div id="chart_div" style="width: 100%; height: 500px;"></div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                        </div>

                    </div>
                </div>
            </div>
    </div>
    <!-- /.row (main row) -->

</section>
<!-- /.content -->

