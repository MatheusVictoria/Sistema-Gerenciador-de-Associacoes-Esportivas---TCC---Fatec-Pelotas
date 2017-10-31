
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Listas

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas</a></li>
            <li><a href="#">Usuários</a></li>
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
                                <h3 class="box-title">Lista de Usuários</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Usuário</th>
                                        <th>E-mail</th>
                                        <th>Tipo de Usuário</th>
                                        <th>Ativo</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($usuario as $tp) { ?>
                                    <tr>
                                        <td><?= $tp->id ?></td>
                                        <td><?= $tp->usuario ?></td>
                                        <td><?= $tp->email ?></td>
                                        <td><?= $tp->tipo_id ?></td>
                                        <td><?php
                                            if ($tp->ativo == 1) {
                                                echo "sim";
                                            } else {
                                                echo "não";
                                            }
                                            ?></td>
                                        <td>
                                            <a data-toggle="tooltip" data-placement="top" title="Editar!" href="<?= base_url('usuario/editar/' . $tp->id) ?>" >
                                                <span class="glyphicon glyphicon-edit "></span></a>
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