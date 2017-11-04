
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

                            <div class="col-lg-12">
                                <div class="box box-header">
                                    <div class="box-body box-profile">

                                        <form  action="<?= base_url('Turma/pesquisar') ?>" method="post" >
                                            <div class="row">
                                                <div class="form-group col-lg-6 ">
                                                    <label for="ct">Centro de Treinamento:</label>
                                                    <select name="pesquisa" id="pesquisa" class="form-control" >
                                                        <option></option>
                                                        <?php
                                                        foreach ($centro_treinamento as $ct) {
                                                            ?>
                                                            <option value="<?= $ct->id, set_value($ct->id) ?>">
                                                                <?= $ct->nome ?> </option>
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
                                                        <button type="button" class="btn btn-default btn-flat fa fa-trash col-lg-3"> <a href="<?= base_url('listar_turma') ?>"> Limpar</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Horário</th>
                                        <th>Professor</th>
                                        <th>Centro de Treinamento</th>
                                        <th>Modalidade</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($turma as $tm) { ?>
                                        <tr>
                                            <td><?= $tm->id ?></td>
                                            <td><?= $tm->horario ?></td>
                                            <td><?= $tm->professor_id ?></td>
                                            <td><?= $tm->centro_treinamento_id ?></td>
                                            <td><?= $tm->modalidade_id ?></td>
    <!--                                        <td><?php
                                            if ($tp->ativo == 1) {
                                                echo "sim";
                                            } else {
                                                echo "não";
                                            }
                                            ?></td>-->
                                            <td>
                                                <a data-toggle="tooltip" data-placement="top" title="Editar!" href="<?= base_url('turma/editar/' . $tm->id) ?>" >
                                                    <span class="fa fa-edit "></span></a>
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
