<div class="col-lg-10 conteudo">

    <div class="col-lg-12">
        <h1>
            Cadastro de Tipo de Usuário
        </h1>

        <hr class="col-lg-12 media btn-primary" />

    </div>
    <div class="col-lg-12">

        <form method="post" action="<?= base_url('Tipo/index') ?>" enctype="multipart/form-data">

            <div class="form-group col-lg-6 ">
                <label for="tipo">Tipo:</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="" />
            </div>

            <div class="col-lg-12 col-lg-offset-1 ">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary col-lg-4">Enviar</button>
                </div>
                <div class="col-lg-6">
                    <button type="reset" class="btn btn-primary col-lg-4">Limpar</button>
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





