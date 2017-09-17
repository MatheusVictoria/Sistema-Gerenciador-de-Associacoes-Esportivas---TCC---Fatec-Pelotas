<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Lançamento de pagamento
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Registros e Pagamentos </a></li>
            <li><a href="#">Lançar Pagamento</a></li>
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

                        <form role="form" method="post" action="<?= base_url('Lanca_Pagamento/index') ?>" enctype="multipart/form-data">

                            <div class="box-body">

                                <!--                                <div class="col-lg-12">
                                <?php if ($erro): ?>
                                                                                        <div class="alert alert-danger alert-dismissable">
                                                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                                            <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
                                                                                            <ul>
                                    <?= $erro ?>
                                                                                            </ul>
                                                                                        </div>
                                <?php endif; ?>
                                                                </div>-->
                                <div class="col-lg-9" style="margin-left: 10%">
                                    <div class="box box-body">
                                        <div class="box-body box-profile">
                                            <div class="form-group col-lg-6">
                                                <label for="aluno">Aluno:</label>
                                                <select name="aluno_id" id="aluno_id" class="form-control" >
                                                    <option>Selecione o Aluno</option>
                                                    <?php
                                                    foreach ($aluno as $a) {
                                                        ?>
                                                        <option value="<?= $a->id, set_value($a->id) ?>">
                                                            <?= $a->nome ?> </option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Date:</label>

                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control pull-right" id="datepicker" name="data_pagamento">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->


                                            <div class="box-footer col-lg-offset-2 ">
                                                <div class="col-lg-6">
                                                    <button type="submit" class="btn btn-primary btn-flat col-xs-4">Enviar</button>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button type="reset" class="btn btn-primary btn-flat col-xs-4">Limpar</button>
                                                </div>
                                            </div>
                                        </div>
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


