
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Listas

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas</a></li>
            <li><a href="#">Turmas</a></li>
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
                                <h3 class="box-title">Lista de Turmas</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Descrição</th>
                                            <th>Data</th>
                                            <th>Turma</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($resgistro_aula as $ra) { ?>
                                            <tr>
                                                <td><?= $ra->id ?></td>
                                                <td><?= $ra->descricao ?></td>
                                                <td><?= date('d/m/y', strtotime($ra->data)) ?></td>
                                                <td><?= $ra->turma_id ?></td>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar!" href="<?= base_url('registro_aula/visualizar/' . $ra->id) ?>">
                                                        <span class="fa fa-vcard"></span></a>
                                                </td>

                                            <?php } ?>
                                        </tr>
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
</div>

