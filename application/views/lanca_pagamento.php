<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Lançar pagamento do aluno
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas </a></li>
            <li><a href="#">Alunos</a></li>
            <li><a href="#">Mensalidades</a></li>
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

                        <form role="form" method="post" action="<?= base_url('Mensalidade/grava_alteracao') ?>" enctype="multipart/form-data">

                            <div class="box-body">

                                <input type="hidden" id="id" name="id" value="<?= $mensalidade->id ?>"/>

                                <div class="form-group col-lg-6 ">
                                    <label for="data_pagamento">Data:</label>
                                    <input type="date" class="form-control" id="data_pagamento" name="data_pagamento" value="<?= $mensalidade->data_pagamento ?>"/>
                                </div>
                                <div class="form-group col-lg-6 ">
                                    <label for="valor_pago">Valor da mensalidade:</label>
                                    <input type="number" class="form-control" id="valor_pago" name="valor_pago" value="<?= $mensalidade->valor ?>"/>
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