
<div class="col-lg-10 conteudo">

    <div class="col-lg-12">
        <h1>
            Alteração de Graduações
        </h1>

        <hr class="col-lg-12 media btn-primary" />

    </div>
    <div class="col-lg-12">

        <form method="post" action="<?= base_url('Graduacao/grava_alteracao') ?>" enctype="multipart/form-data">
            
            <input type="hidden" id="id" name="id" value="<?= $graduacao->id ?>"  >
            
            <div class="form-group col-lg-6 ">
                <label for="cor">Cor:</label>
                <input type="text" class="form-control" id="cor" name="cor" value="<?= $graduacao->cor ?>"/>
            </div>
            
            <div class="form-group col-lg-6 ">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="<?= $graduacao->descricao ?>"/>
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





