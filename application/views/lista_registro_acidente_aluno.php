
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Listas

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas</a></li>
            <li><a href="#">Histórico de Lesões</a></li>
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
                                <h3 class="box-title">Lista de Histórico de Lesões</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Descrição</th>
                                            <th>Aluno</th>
                                            <th>Modalidde</th>
                                            <th>Data</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($registro_acidentes as $ra) { ?>
                                            <tr>
                                                <td><?= $ra->id ?></td>
                                                <td><?= $ra->descricao ?>...</td>
                                                <td><?= $ra->aluno_id ?></td>
                                                <td><?= $ra->modalidade_id ?></td>
                                                <td><?= date('d/m/y', strtotime($ra->data)) ?></td>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar!" href="<?= base_url('Registro_Acidente_Aluno/visualizar/' . $ra->id) ?>">
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

