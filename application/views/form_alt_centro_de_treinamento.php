<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="<?= base_url('assets/js/script.js') ?>"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cadastro de alteração de dados do centro de treinamento
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas </a></li>
            <li><a href="#">Centro de Treinamento</a></li>
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

                        <form method="post" action="<?= base_url('Centro_de_Treinamento/grava_alteracao') ?>" enctype="multipart/form-data">

                            <div class="box-body">

                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $ct->id ?>"/>

                                <input type="hidden" class="form-control" id="id_endereco" name="id_endereco" value="<?= $ct->id_endereco ?>"/>

                                <div class="form-group col-lg-6 ">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $ct->nome ?>" autofocus placeholder="Nome"/>
                                </div>

                                <div class="form-group col-lg-6 ">

                                    <label for="cep">Cep:</label>
                                    <input type="text" class="form-control" id="cep" name="cep" value="<?= $ct->cep ?>" placeholder="Cep"/>

                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="rua">Rua:</label>
                                    <input type="text" class="form-control" id="rua" name="rua" value="<?= $ct->endereco_id ?>"  placeholder="Rua"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="Bairro">Bairro:</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $ct->bairro ?>" placeholder="Bairro"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="complemento">Complemento:</label>
                                    <input type="text" class="form-control" id="complemento" name="complemento" value="<?= $ct->complemento ?>" placeholder="Complemento"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="numero">Numero:</label>
                                    <input type="text" class="form-control" id="numero" name="numero" value="<?= $ct->numero ?>" placeholder="Numero"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="cidade">Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $ct->cidade_id ?>" placeholder="Cidade"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="uf">Estado:</label>
                                    <input type="text" class="form-control" id="uf" name="uf" value="<?= $ct->estado_id ?>" placeholder="Estado"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="pais">País:</label>
                                    <input type="text" class="form-control" id="pais" name="pais" value="<?= $ct->pais_id ?>" placeholder="País"/>
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