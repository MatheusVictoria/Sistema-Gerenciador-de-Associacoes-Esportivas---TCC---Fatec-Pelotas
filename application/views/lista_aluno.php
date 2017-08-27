
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Listas

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas</a></li>
            <li><a href="#">Alunos</a></li>
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
                                <h3 class="box-title">Lista de Alunos</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <!--<th>RG</th>-->
                                            <th>CPF</th>
                                            <!--<th>Tel</th>-->
                                            <th>E-mail</th>
                                            <th>Ativo</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($aluno as $prof) { ?>
                                            <tr>
                                                <td><?= $prof->id ?></td>
                                                <td><?= $prof->nome ?></td>
                                                <!--<td><?= $prof->rg ?></td>-->
                                                <td><?= $prof->cpf ?></td>
                                                <!--<td><?= $prof->telefone ?></td>-->
                                                <td><?= $prof->email ?></td>
                                                <td><?php
                                                    if ($prof->ativo == 1) {
                                                        echo "sim";
                                                    } else {
                                                        echo "não";
                                                    }
                                                    ?></td>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="top" title="Editar!" href="<?= base_url('Aluno/editar/' . $prof->id) ?>" >
                                                        <span class="fa fa-edit"></span></a>
                                                    <a data-toggle="tooltip" data-placement="top" title="Visualizar!" href="<?= base_url('Aluno/visualizar/' . $prof->id) ?>">
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