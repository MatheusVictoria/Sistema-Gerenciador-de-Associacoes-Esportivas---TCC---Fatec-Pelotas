<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Registro de aula
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Registros e Pagamentos </a></li>
            <li><a href="#">Registro de aula</a></li>
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

                        <form role="form" method="post" action="<?= base_url('Registro_Aula/registra_aula') ?>" enctype="multipart/form-data">

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
                                    <label>Data:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control" name="data" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

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

                                <div class="form-group col-lg-12 ">
                                    <label for="descricao">Descrição da aula:</label>
                                    <textarea class="form-control" rows="5" id="descricao" name="descricao" value="<?= set_value('descricao') ?>" ></textarea>
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
</div>

<!-- InputMask -->
<script src="<?= base_url('assets/adminlte/plugins/input-mask/jquery.inputmask.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') ?>"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2(),

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'}),

    });
</script>
