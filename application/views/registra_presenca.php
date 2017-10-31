<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Registro de presença do aluno
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

                        <form role="form" method="post" action="<?= base_url('Turma/registra_presenca') ?>" enctype="multipart/form-data">

                            <div class="box-body">

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
                                <div class="form-group col-lg-6" style="padding-top: 25px">
                                    <div>
                                        <button type="submit" class="btn btn-info btn-flat fa fa-search col-lg-2"> </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>  



