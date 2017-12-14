<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Relatórios
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Relatórios </a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Pagamentos </a></li>
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

                        <form role="form" method="post" action="<?= base_url('Relatorios/gera_grafico_pagamento_men') ?>" enctype="multipart/form-data">

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

                                <div class="form-group col-lg-6 ">
                                    <label for="data_inicio">Data de inicio:</label>
                                    <input type="date" class="form-control timepicker" id="data_inicio" name="data_inicio" value="<?= set_value('data_inicio') ?>" />
                                </div>
                                
                                <div class="form-group col-lg-6 ">
                                    <label for="data_final">Data final:</label>
                                    <input type="date" class="form-control timepicker" id="data_final" name="data_final" value="<?= set_value('data_final') ?>" />
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