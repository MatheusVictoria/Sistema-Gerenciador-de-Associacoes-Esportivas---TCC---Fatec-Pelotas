<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Centro de Treinamento');
        data.addColumn('number', 'Total');
        
        <?php foreach ($mensalidades as $mensalidade) { ?>
           data.addRows([['<?= $mensalidade->nome ?>', <?= $mensalidade->valor_pago ?>]]);     
        <?php } ?>

        var options = {
            title: 'Gráfico Valor Total de Centros de Treinamento'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

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
            <li><a href="#"><i class="fa fa-dashboard"></i> Graficos e Relatórios </a></li>
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

                            <!-- DONUT CHART -->
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Gráfico Valor Total de Centros de Treinamento</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="piechart" style="height: 500px"></div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
</div>
