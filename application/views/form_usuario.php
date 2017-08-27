<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cadastro de usuários
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Cadastros </a></li>
            <li><a href="#">Usuário</a></li>
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

                        <form role="form" method="post" action="<?= base_url('Usuario/index') ?>" enctype="multipart/form-data">

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
                                    <label for="usuario">Usuário:</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" value="<?= set_value('usuario') ?>"  placeholder="usuario"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>"  placeholder="e-mail"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="senha">Senha:</label>
                                    <input type="password" class="form-control" id="senha" name="senha" value="<?= set_value('senha') ?>" placeholder="senha"/>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="tipo">Tipo de Usuário:</label>
                                    <select name="tipo_id" id="tipo_id" class="form-control" >
                                        <option> Selecione o tipo de usuário </option>
                                        <?php
                                        foreach ($tipos as $tipo) {
                                            ?>
                                            <option value="<?= $tipo->id, set_value($tipo->id) ?>">
                                                <?= $tipo->tipo ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="ativo">Ativo:</label>
                                    <select class="form-control" name="ativo" id="ativo" value="<?= set_value('ativo') ?>">
                                        <option>Selecione sim ou não para o campo ativo</option>
                                        <option value="1 " >Sim</option>
                                        <option value="2 " >Não</option>
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
                        </form>

                    </div>
                </div>
            </div>
    </div>
    <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>