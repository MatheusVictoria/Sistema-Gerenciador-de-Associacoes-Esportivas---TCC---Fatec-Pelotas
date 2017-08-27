<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="<?= base_url('assets/js/script.js') ?>"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cadastro de alteração de dados do professor
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas </a></li>
            <li><a href="#">Professores</a></li>
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

                        <form method="post" action="<?= base_url('Professor/grava_alteracao') ?>" enctype="multipart/form-data">

                            <div class="box-body">

                                <input type="hidden" id="id" name="id" value="<?= $usuario->id ?>">

                                <input type="hidden" id="id_endereco" name="id_endereco" value="<?= $usuario->id_endereco ?>">

                                <div class="form-group col-lg-6 ">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $usuario->nome ?>" />
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="rg">RG:</label>
                                    <input type="text" class="form-control" id="rg" name="rg" value="<?= $usuario->rg ?>" />
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="cpf">CPF:</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?= $usuario->cpf ?>" />
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="telefone">Telefone:</label>
                                    <input type="tel" class="form-control" id="telefone" name="telefone" value="<?= $usuario->telefone ?>"  />
                                </div>


                                <div class="form-group col-lg-6 ">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" id="enail" name="email" value="<?= $usuario->email ?>"/>
                                </div>

                                <div class="form-group col-lg-6 ">

                                    <label for="cep">Cep:</label>
                                    <input type="text" class="form-control" id="cep" name="cep" value="<?= $usuario->cep ?>"/>

                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="rua">Rua:</label>
                                    <input type="text" class="form-control" id="rua" name="rua" value="<?= $usuario->endereco_id ?>"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="Bairro">Bairro:</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $usuario->bairro ?>"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="complemento">Complemento:</label>
                                    <input type="text" class="form-control" id="complemento" name="complemento" value="<?= $usuario->complemento ?>"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="numero">Numero:</label>
                                    <input type="text" class="form-control" id="numero" name="numero" value="<?= $usuario->numero ?>"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="cidade">Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $usuario->cidade_id ?>"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="uf">Estado:</label>
                                    <input type="text" class="form-control" id="uf" name="uf" value="<?= $usuario->estado_id ?>"/>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="pais">Pais:</label>
                                    <input type="text" class="form-control" id="pais" name="pais" value="<?= $usuario->pais_id ?>"/>
                                </div>



                                <div class="form-group col-lg-6">
                                    <label for="graduacao">Graduação:</label>
                                    <select name="graduacao_id" id="graduacao_id" class="form-control" >
                                        <option> Selecione a Graduação do aluno </option>
                                        <?php
                                        foreach ($graduacao as $graduacao) {
                                            ?>
                                            <option value="<?= $graduacao->id ?>" <?= $usuario->graduacao_id == $graduacao->id ? "selected = selected" : "" ?>>
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
                                        <label class="checkbox-inline "><input type="radio" value="M" name="sexo" id="sexo" <?= $usuario->sexo == "M" ? "checked" : "" ?>>Masculino</label>
                                        <label class="checkbox-inline "><input type="radio" value="F" name="sexo" id="sexo" <?= $usuario->sexo == "F" ? "checked" : "" ?>>Feminino</label>
                                    </div>
                                </div>

                                <div class="form-group col-lg-4 ">
                                    <label for="foto">Foto:</label>
                                    <input type="file" id="foto" name="foto" accept=".gif,.jpg,.png"/>
                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="ativo">Ativo:</label>
                                    <select class="form-control" id="ativo" name="ativo" id="ativo">
                                        <option value="1" <?= $usuario->ativo == 1 ? " selected = \"selected\"" : "" ?>>Sim</option>
                                        <option value="0" <?= $usuario->ativo == 1 ? " selected = \"selected\"" : "" ?>>Não</option>
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