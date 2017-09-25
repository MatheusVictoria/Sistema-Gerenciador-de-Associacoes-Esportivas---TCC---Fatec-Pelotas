<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cadastro de alteração de dados de modalidade
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas </a></li>
            <li><a href="#">Modalidades</a></li>
            <li><a href="#">Editar</a></li>
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

                        <form role="form" method="post" action="<?= base_url('Modalidade/grava_alteracao') ?>" enctype="multipart/form-data">

                            <div class="box-body">

                                <input type="hidden" id="id" name="id" value="<?= $modalidade->id ?>"/>

                                <div class="form-group col-lg-6 ">
                                    <label for="modalidade">Modalidade:</label>
                                    <input type="text" class="form-control" id="modalidade" name="modalidade" value="<?= $modalidade->modalidade ?>"/>
                                </div>
                                <div class="form-group col-lg-6 ">
                                    <label for="valor">Valor da mensalidade:</label>
                                    <input type="number" class="form-control" id="valor" name="valor" value="<?= $modalidade->valor ?>"/>
                                </div>

                                <div class="box-footer col-lg-offset-2 ">
                                    <div class="col-lg-4">
                                        <button type="submit" class="btn btn-primary btn-flat col-xs-4">Enviar</button>
                                    </div>
                                    <div class="col-lg-4">
                                       <a href="<?= base_url('listar_modalidade')?>" >
                                           <button type="button" class="btn btn-primary btn-flat col-xs-4">Cancelar</button>
                                       </a>
                                    </div>
                                    <div class="col-lg-4">
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