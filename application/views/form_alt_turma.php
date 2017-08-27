<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cadastro de alteração de dados do turma
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas </a></li>
            <li><a href="#">Turma</a></li>
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

                        <form role="form" method="post" action="<?= base_url('turma/grava_alteracao') ?>" enctype="multipart/form-data">

                            <div class="box-body">

                                <input type="hidden" id="id" name="id" value="<?= $turma->id ?>"/>

                                <div class="form-group col-lg-6 ">
                                    <label for="horario">Horário:</label>
                                    <input type="time" class="form-control timepicker" id="horario" name="horario" value="<?= $turma->horario ?>" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="professor">Professor:</label>
                                    <select name="professor_id" id="professor_id" class="form-control" >
                                        <option> Selecione o Professor </option>
                                        <?php
                                        foreach ($professor as $prof) {
                                            ?>
                                            <option value="<?= $prof->id ?>"
                                                    <?= $turma->professor_id == $prof->id ? 'selected' : ' ' ?> >
                                                <?= $prof->nome ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="ct">Centro de Centro de Treinamento:</label>
                                    <select name="centro_treinamento_id" id="centro_treinamento_id" class="form-control" >
                                        <option> Selecione o Centro de Treinamento </option>
                                        <?php
                                        foreach ($ct as $ct) {
                                            ?>
                                            <option value="<?= $ct->id ?>"
                                                    <?= $ct->id == $turma->professor_id ? "selected == \"selected\"" : " " ?> >
                                                <?= $ct->nome ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <!--                                <div class="form-group col-lg-6">
                                                                    <label for="ativo">Ativo:</label>
                                                                    <select class="form-control" name="ativo" id="ativo">
                                                                        <option value="1"  <?= $turma->ativo == 1 ? 'selected' : '' ?>>Sim</option>
                                                                        <option value="2" <?= $turma->ativo == 2 ? 'selected' : '' ?>>Não</option>
                                                                    </select>
                                                                </div>-->



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
</div>