<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="<?= base_url('assets/js/script.js') ?>"></script>

<div class="col-lg-10 conteudo">

    <div class="col-lg-12">
        <h1>
            Cadastro de Aluno
        </h1>

        <hr class="col-lg-12 media btn-primary" />

    </div>
    <div class="col-lg-12">

        <form method="post" action="<?= base_url('Aluno/grava_alteracao') ?>" enctype="multipart/form-data">

            <input type="hidden" id="id" name="id" value="<?= $aluno->id ?>">

            <input type="hidden" id="id_endereco" name="id_endereco" value="<?= $aluno->id_endereco ?>">


            <div class="form-group col-lg-6 ">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $aluno->nome ?>"/>
            </div>

            <div class="form-group col-lg-6 ">
                <label for="rg">RG:</label>
            <input type="text" class="form-control" id="rg" name="rg" value="<?= $aluno->rg ?>"/>
            </div>

            <div class="form-group col-lg-6 ">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?= $aluno->cpf ?>"/>
            </div>

            <div class="form-group col-lg-6 ">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?= $aluno->telefone ?>"/>
            </div>

            <div class="form-group col-lg-6 ">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $aluno->email ?>"/>
            </div>

            <div class="form-group col-lg-6 ">

                <label for="cep">Cep:</label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?= $aluno->cep ?>"/>

            </div>

            <div class="form-group col-lg-6 ">
                <label for="rua">Rua:</label>
                <input type="text" class="form-control" id="rua" name="rua" value="<?= $aluno->endereco_id ?>"/>
            </div>

            <div class="form-group col-lg-6 ">
                <label for="Bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $aluno->bairro ?>"/>
            </div>

            <div class="form-group col-lg-6 ">
                <label for="complemento">Complemento:</label>
                <input type="text" class="form-control" id="complemento" name="complemento" value="<?= $aluno->complemento ?>"/>
            </div>

            <div class="form-group col-lg-6 ">
                <label for="numero">Numero:</label>
                <input type="text" class="form-control" id="numero" name="numero" value="<?= $aluno->numero ?>"/>
            </div>

            <div class="form-group col-lg-6 ">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $aluno->cidade_id ?>"/>
            </div>

            <div class="form-group col-lg-6 ">
                <label for="uf">Estado:</label>
                <input type="text" class="form-control" id="uf" name="uf" value="<?= $aluno->estado_id ?>"/>
            </div>

            <div class="form-group col-lg-6 ">
                <label for="pais">Pais:</label>
                <input type="text" class="form-control" id="pais" name="pais" value="<?= $aluno->pais_id ?>"/>
            </div>



            <div class="form-group col-lg-6">
                <label for="graduacao">Graduação:</label>
                <select name="graduacao_id" id="graduacao_id" class="form-control" >
                    
                    <option>Selecione a Graduação</option>
                    
                    <?php
                    foreach ($graduacao as $graduacao) {
                        ?>
                        <option value="<?= $graduacao->id ?>">
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
                <select class="form-control" id="ativo" name="ativo">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>

            <div class="col-lg-12 col-lg-offset-1 " style="margin-top: 10px; margin-bottom: 10px">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary col-lg-4">Enviar</button>
                </div>
                <div class="col-lg-6">
                    <button type="reset" class="btn btn-primary col-lg-4">Limpar</button>
                </div>
            </div>
        </form>

    </div>
</div>





