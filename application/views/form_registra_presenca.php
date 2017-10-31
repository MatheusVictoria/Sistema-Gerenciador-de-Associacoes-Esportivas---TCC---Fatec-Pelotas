<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Registro de presença do aluno
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Registros e Pagamentos </a></li>
            <li><a href="#">Registro de presença</a></li>
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

                            <form role="form" method="post" action="<?= base_url('Turma/registra_presenca') ?>">
                                <div class="col-lg-12">                                
                                    <div class="form-group col-lg-6">
                                        <label for="turma">Turma:</label>
                                        <select name="turma_id" id="turma_id" class="form-control" >

                                            <?php
                                            foreach ($lista as $turma) {
                                                ?>
                                                <option value="<?= $turma->id, set_value($turma->id) ?>">
                                                    <?= $turma->horario ?> </option>
                                                <?php
                                            }
                                            ?>
                                        </select>                                        
                                    </div>

                                    <div class=" form-group col-lg-6" style="margin-top: 25px">
                                        <button type="default" class="btn btn-flat fa fa-trash col-xs-4"><a href="<?= base_url('registra_presenca') ?>" style="padding: 5px">Apagar Lista</a></button>
                                    </div>

                                    <div class="col-lg-12">                               
                                        <label >Lista de Presença</label>
                                        <div class="box box-primary">
                                            <div class="box-body box-profile">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Nome</th>                                       
                                                            <th>Presença</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($lista as $aluno) { ?>
                                                            <tr>
                                                                <td><?= $aluno->nome ?></td>
                                                                <td>    
                                                                    <label>
                                                                        <input type="checkbox" name="alunos[]" value="<?= $aluno->aluno_id ?>">
                                                                        presente
                                                                    </label>
                                                                </td>

                                                            <?php } ?>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>