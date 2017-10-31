<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Vincula aluno em uma turma
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Cadastros </a></li>
            <li><a href="#">Vincula Aluno</a></li>
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

                        <form role="form" method="post" action="<?= base_url('Turma/vincula_aluno') ?>" enctype="multipart/form-data">

                            <div class="box-body">

                                <div class="col-lg-12">
                                    <?php if ($erro): ?>
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
                                            <ul>
                                                <?= $erro ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="turma">Turma:</label>
                                    <select name="turma_id" id="turma_id" class="form-control">
                                        <option> Selecione a turma </option>
                                        <?php
                                        foreach ($turmas as $turma) {
                                            ?>
                                            <option value="<?= $turma->id, set_value($turma->id) ?>">
                                                <?= $turma->horario ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="aluno">Aluno:</label>
                                    <select name="aluno_id" id="aluno_id" class="form-control">
                                        <option> Selecione o aluno </option>
                                        <?php
                                        foreach ($alunos as $aluno) {
                                            ?>
                                            <option value="<?= $aluno->id, set_value($aluno->id) ?>">
                                                <?= $aluno->nome ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="box-footer col-lg-offset-2 ">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary btn-flat col-xs-4">Enviar</button>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="reset" class="btn btn-primary btn-flat col-xs-4">Limpar</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    </div>
    <!-- /.row (main row) -->

</section>
<!-- /.content -->

