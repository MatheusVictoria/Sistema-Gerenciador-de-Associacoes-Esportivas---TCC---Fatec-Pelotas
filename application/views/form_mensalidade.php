<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Gerar Mensalidades
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Registros e Pagamentos </a></li>
            <li><a href="#">Gerar Mensalidades</a></li>

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

                            <form role="form" method="post" action="<?= base_url('Mensalidade/gerar_mensalidade') ?>">
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
                                        <button type="default" class="btn btn-flat fa fa-trash col-xs-4"><a href="<?= base_url('gerar_mensalidade') ?>" style="padding: 5px">Apagar Lista</a></button>
                                    </div>

                                    <div class="col-lg-12">                               
                                        <label >Lista de Presença</label>
                                        <div class="box box-primary">
                                            <div class="box-body box-profile">
                                                <div class="form-group col-lg-6">
                                                    <label for="aluno">Aluno:</label>
                                                    <select name="aluno_id" id="aluno_id" class="form-control" >
                                                        <option> Selecione um aluno </option>
                                                        <?php
                                                        foreach ($lista as $aluno) {
                                                            ?>
                                                            <option value="<?= $aluno->aluno_id, set_value($aluno->aluno_id) ?>">
                                                                <?= $aluno->nome ?> </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>                                        
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Data:</label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="datetime" class="form-control" name="data_vencimento" id="data_vencimento" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="<?= set_value('data_vencimento') ?>">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                                <!-- /.form group -->
                                                <div class="form-group col-lg-6">
                                                    <label>Quantidade de Parcelas:</label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-times-rectangle-o"></i>
                                                        </div>
                                                        <input type="number" class="form-control" name="parcelas" id="parcelas"  value="<?= set_value('parcelas') ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Valor:</label>

                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-dollar"></i>
                                                        </div>
                                                        <input type="number" class="form-control" name="valor" id="valor" placeholder="99,99" value="<?= set_value('valor') ?>"/>
                                                    </div>
                                                </div>


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