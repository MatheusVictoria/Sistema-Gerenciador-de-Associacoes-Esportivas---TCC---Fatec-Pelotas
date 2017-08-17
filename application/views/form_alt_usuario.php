<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="<?= base_url('assets/js/script.js') ?>"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cadastro de alteração de dados do aluno
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas </a></li>
            <li><a href="#">Usuários</a></li>
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

                        <form role="form" method="post" action="<?= base_url('Usuario/grava_alterecao') ?>" enctype="multipart/form-data">

                            <div class="box-body">

                                <input type="hidden" id="id" name="id" value="<?= $usuario->id ?>"/>

                                <div class="form-group col-lg-6 ">
                                    <label for="usuario">Usuário:</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" value="<?= $usuario->usuario ?>"/>
                                </div>
                                <div class="form-group col-lg-6 ">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= $usuario->email ?>"/>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="tipo">Tipo de Usuário:</label>
                                    <select name="tipo_id" id="tipo_id" class="form-control" >
                                        <?php
                                        foreach ($tipos as $tipo) {
                                            ?>
                                            <option value="<?= $tipo->id ?>">
                                                <?= $tipo->id == $usuario->tipo_id ? 'selected' : '' ?>
                                                <?= $tipo->tipo ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="ativo">Ativo:</label>
                                    <select class="form-control" name="ativo" id="ativo">
                                        <option value="1" >Sim</option>
                                        <option value="2">Não</option>
                                    </select>
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
                            <!--<div class="col-lg-12">
                                <?php if ($erro): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?= $erro ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>-->
                        </form>

                    </div>
                </div>
            </div>
    </div>
    <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>



