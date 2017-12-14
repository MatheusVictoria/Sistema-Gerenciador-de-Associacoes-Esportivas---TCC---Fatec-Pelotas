
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Listas
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas</a></li>
            <li><a href="#">Presenca</a></li>
            <li><a href="#">Pesquisa data</a></li>
            <li><a href="#">Lista de presença</a></li>
        </ol>
    </section>
    <section>
        <!-- right col -->
        <div>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Lista de presenças por data </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>                                        
                                            <th>Nome</th>                                        
                                            <th>Horário</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($presenca as $p) { ?>
                                            <tr>
                                                <td><?= $p->nome ?></td>
                                                <td><?= $p->horario ?></td>
                                                <td><?= date('d/m/y', strtotime($p->data)) ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

    </section>
    <!-- /.content -->