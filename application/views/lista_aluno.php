
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

                                <div class="col-lg-12">
                                    <div class="box box-header">
                                        <div class="box-body box-profile">

                                            <form  action="<?= base_url('Aluno/pesquisar') ?>" method="post"  enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="form-group col-lg-6 ">
                                                        <label for="graduacao">Graduação:</label>
                                                        <select name="pesquisa" id="pesquisa" class="form-control" >
                                                            <option></option>
                                                            <?php
                                                            foreach ($graduacao as $graduacao) {
                                                                ?>
                                                                <option value="<?= $graduacao->id, set_value($graduacao->id) ?>">
                                                                    <?= $graduacao->cor ?> </option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-6" style="padding-top: 25px">
                                                        <div>
                                                        <button type="submit" class="btn btn-info btn-flat fa fa-search col-lg-2"> </button>
                                                        </div>
                                                        <div class="col-lg-offset-3">
                                                        <button type="button" class="btn btn-default btn-flat fa fa-trash col-lg-3"> <a href="<?= base_url('listar_aluno') ?>"> Limpar</a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>                                       
                                        <th>CPF</th>
                                        <th>E-mail</th>
                                        <th>Graduação</th>
                                        <th>Ativo</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($alunos as $aluno) { ?>
                                        <tr>
                                            <td><?= $aluno->id ?></td>
                                            <td><?= $aluno->nome ?></td>

                                            <td><?= $aluno->cpf ?></td>

                                            <td><?= $aluno->email ?></td>
                                            <td><?= $aluno->graduacao_id ?></td>
                                            <td><?php
                                                if ($aluno->ativo == 1) {
                                                    echo "sim";
                                                } else {
                                                    echo "não";
                                                }
                                                ?></td>
                                            <td>
                                                <a data-toggle="tooltip" data-placement="top" title="Editar!" href="<?= base_url('Aluno/editar/' . $aluno->id) ?>" >
                                                    <span class="fa fa-edit"></span></a>
                                                <a data-toggle="tooltip" data-placement="top" title="Visualizar!" href="<?= base_url('Aluno/visualizar/' . $aluno->id) ?>">
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