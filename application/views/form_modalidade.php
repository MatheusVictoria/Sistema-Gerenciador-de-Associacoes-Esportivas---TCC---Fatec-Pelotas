<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cadastro de modalidade
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Cadastros </a></li>
            <li><a href="#">Modalidade</a></li>
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

                        <form role="form" method="post" action="<?= base_url('Modalidade/index') ?>" enctype="multipart/form-data">

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
                                    <label for="modalidade">Modalidade:</label>
                                    <input type="text" class="form-control" id="modalidade" name="modalidade" value="<?= set_value('modalidade') ?>" placeholder="modalidade"/>
                                </div>
                                <div class="form-group col-lg-6 ">
                                    <label for="valor">Valor da modalidade:</label>
                                    <input type="number" class="form-control" id="valor" name="valor" value="<?= set_value('valor') ?>" placeholder="99,99"/>
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
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    
    <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
