<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Visualizar Registro de Aula
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas </a></li>
            <li><a href="#">Professores</a></li>
            <li><a href="#">Visualizar</a></li>
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

                        <div class="box-body">

                            <input type="hidden" id="id" name="id" value="<?= $registro_aula->id ?>">


                            <div class="col-lg-12">
                                <div class="box box-primary">
                                    <div class="box-body box-profile">
                                        <div class="form-group">
                                            <div class="col-lg-6 form-grop">
                                                <strong><i class="fa fa-clock-o margin-r-5"></i> Horario </strong>

                                                <p class="text-muted"> <?= $registro_aula->turma_id ?> </p>
                                            </div>
                                            
                                            <div class="col-lg-6 form-grop">
                                                <strong><i class="fa fa-calendar margin-r-5"></i> Data </strong>

                                                <p class="text-muted"> <?= date('d/m/y', strtotime($registro_aula->data)) ?> </p>
                                            </div>
                                           
                                            <div class="col-lg-12 form-group" style="margin-top: 20px;">
                                                <strong><i class = "fa fa-book margin-r-5"></i> Descrição</strong>

                                                <p class = "text-muted"><?= $registro_aula->descricao ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                        <a href="<?= base_url('listar_registros_aulas') ?>" class="btn btn-primary btn-block"><b>Voltar para lista</b></a>
                    </div>

                </div>
            </div>
    </div>
    <!-- /.row (main row) -->

</section>
<!-- /.content -->