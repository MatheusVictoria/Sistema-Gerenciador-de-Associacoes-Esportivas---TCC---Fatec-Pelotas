<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="<?= base_url('assets/js/script.js') ?>"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cadastro de alunos
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Cadastros </a></li>
            <li><a href="#">Aluno</a></li>
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

            <form role="form" method="post" action="<?= base_url('Aluno/index') ?>" enctype="multipart/form-data">

             <div class="box-body">

                 <div class="form-group col-lg-6 ">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?= set_value('nome') ?>" placeholder="Nome"/>
                 </div>

                <div class="form-group col-lg-6 ">
                    <label for="rg">RG:</label>
                    <input type="text" class="form-control" id="rg" name="rg" value="<?= set_value('rg') ?>" placeholder="RG"/>
                </div>

                <div class="form-group col-lg-6 ">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?= set_value('cpf') ?>" placeholder="CPF"/>
                </div>

                <div class="form-group col-lg-6 ">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="<?= set_value('telefone') ?>" placeholder="Telefone"/>
                </div>

                <div class="form-group col-lg-6 ">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="enail" name="email" value="<?= set_value('email') ?>" placeholder="E-mail"/>
                </div>

                <div class="form-group col-lg-6 ">

                    <label for="cep">Cep:</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="<?= set_value('cep') ?>" placeholder="Cep"/>

                </div>

                <div class="form-group col-lg-6 ">
                    <label for="rua">Rua:</label>
                    <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua"/>
                </div>

                <div class="form-group col-lg-6 ">
                    <label for="Bairro">Bairro:</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro"/>
                </div>

                <div class="form-group col-lg-6 ">
                    <label for="complemento">Complemento:</label>
                    <input type="text" class="form-control" id="complemento" name="complemento" value="<?= set_value('complemento') ?>" placeholder="Complemento"/>
                </div>

                <div class="form-group col-lg-6 ">
                    <label for="numero">Numero:</label>
                    <input type="text" class="form-control" id="numero" name="numero" value="<?= set_value('numero') ?>" placeholder="Numero"/>
                </div>

                <div class="form-group col-lg-6 ">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade"/>
                </div>

                <div class="form-group col-lg-6 ">
                    <label for="uf">Estado:</label>
                    <input type="text" class="form-control" id="uf" name="uf" placeholder="Estado"/>
                </div>

                <div class="form-group col-lg-6 ">
                    <label for="pais">Pais:</label>
                    <input type="text" class="form-control" id="pais" name="pais" value="<?= set_value('pais') ?>" placeholder="Pais"/>
                </div>



                <div class="form-group col-lg-6">
                    <label for="graduacao">Graduação:</label>
                    <select name="graduacao_id" id="graduacao_id" class="form-control" >
                        <option>Selecione a Graduação</option>
                        <?php
                        foreach ($graduacao as $graduacao) {
                            ?>
                            <option value="<?= $graduacao->id, set_value($graduacao->id) ?>">
                                <?= $graduacao->cor ?> </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class=" form-group col-lg-4">
                    <div>
                        <label for="sexo">Sexo:</label>
                    </div>
                    <div>
                        <label class="checkbox-inline "><input type="checkbox" id="sexo" name="sexo" value="M">Masculino</label>
                        <label class="checkbox-inline "><input type="checkbox" id="sexo" name="sexo" value="F">Feminino</label>
                    </div>
                </div>

                <div class="form-group col-lg-4 ">
                    <label for="foto">Foto:</label>
                    <input type="file" id="foto" name="foto"/>
                </div>

                <div class="form-group col-lg-4">
                    <label for="ativo">Ativo:</label>
                    <select class="form-control" id="ativo" name="ativo" value="<?= set_value('ativo') ?>">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
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
                <div class="col-lg-12">
                    <?php if ($erro): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?= $erro ?>
                            </ul>
                        </div>
                    <?php endif; ?>
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