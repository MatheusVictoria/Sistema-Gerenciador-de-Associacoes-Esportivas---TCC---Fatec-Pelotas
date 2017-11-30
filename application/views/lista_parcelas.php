
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Listas

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas</a></li>
            <li><a href="#">Alunos</a></li>
            <li><a href="#">Mensalidade</a></li>
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
                                <h3 class="box-title">Lista de mensalidade do aluno</h3>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Data do Vencimento</th>                                       
                                        <th>Valor da Parcela</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mensalidades as $mensalidade) { ?>
                                        <tr>
                                            <td><?= $mensalidade->id ?></td>
                                            <td><?= $mensalidade->data_vencimento ?></td>

                                            <td><?= $mensalidade->valor ?></td>
                                            <td>
                                                <a data-toggle="tooltip" data-placement="top" title="Editar!" href="<?= base_url('Mensalidade/editar/' . $mensalidade->id) ?>" >
                                                    <span class="fa fa-edit"></span></a>
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
