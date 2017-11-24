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

                        <form role="form" method="post" action="<?= base_url('Mensalidade/index') ?>" enctype="multipart/form-data">

                            <div class="box-body">

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

                                            <div class="box-footer col-lg-offset-2 ">
                                                <div class="col-lg-6">
                                                    <button type="submit" class="btn btn-primary btn-flat col-xs-4">Pesquisar</button>
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


