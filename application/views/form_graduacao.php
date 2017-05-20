
<div class="col-lg-10">

    <div class="col-lg-12">
        <h1>
            Cadastro de Graduações
        </h1>

        <hr class="col-lg-12 media btn-primary" />

    </div>
    <div class="col-lg-12">

        <form method="post" action="<?= base_url('Graduacao/cadastrar') ?>" enctype="multipart/form-data">
            <div class="form-group col-lg-6 ">
                <label for="cor">Cor:</label>
                <input type="text" class="form-control" id="cor" name="cor" placeholder="Cor"/>
            </div>
            
            <div class="form-group col-lg-6 ">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição"/>
            </div>
                                            
            <div class="col-lg-12 col-lg-offset-1 ">
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



