<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cadastro de turmas
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Cadastros </a></li>
            <li><a href="#">Turma</a></li>
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

                        <form role="form" method="post" action="<?= base_url('Turma/index') ?>" enctype="multipart/form-data">

                            <div class="box-body">

                                <div class="form-group col-lg-6 ">
                                    <label for="horario">Horário:</label>
                                    <input type="time" class="form-control timepicker" id="horario" name="horario" value="<?= set_value('horario') ?>" />
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="professor">Professor:</label>
                                    <select name="professor_id" id="professor_id" class="form-control" >
                                        <option> Selecione o Professor </option>
                                        <?php
                                        foreach ($professor as $professor) {
                                            ?>
                                            <option value="<?= $professor->id, set_value($professor->id) ?>">
                                                <?= $professor->nome ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="ct">Centro de Centro de Treinamento:</label>
                                    <select name="centro_treinamento_id" id="centro_treinamento_id" class="form-control" >
                                        <option> Selecione o Centro de Treinamento </option>
                                        <?php
                                        foreach ($ct as $ct) {
                                            ?>
                                            <option value="<?= $ct->id, set_value($ct->id) ?>">
                                                <?= $ct->nome ?> </option>
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
                            <div class="col-lg-12">
                                <?php if ($erro): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?= $erro ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    </div>
    <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>