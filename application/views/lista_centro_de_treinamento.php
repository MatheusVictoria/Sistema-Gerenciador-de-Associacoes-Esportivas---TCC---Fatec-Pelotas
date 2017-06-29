<div class="col-lg-10 conteudo">

    <div class="col-lg-12">
        <h1>
            Lista de Centro de Trinamentos
        </h1>

        <hr class="col-lg-12 media btn-primary" />

    </div>

    <table class="table col-lg-12">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Rua</th>
                <th>Numero</th>
                <th>Complemento</th>
                <th>Cep</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Pais</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($centro as $ct) { ?>
                <tr>
                    <td><?= $ct->id ?></td>
                    <td><?= $ct->nome ?></td>
                    <td><?= $ct->endereco_id ?></td>
                    <td><?= $ct->numero ?></td>
                    <td><?= $ct->complemento ?></td>  
                    <td><?= $ct->cep ?></td>  
                    <td><?= $ct->bairro ?></td>  
                    <td><?= $ct->cidade_id ?></td>  
                    <td><?= $ct->estado_id ?></td>  
                    <td><?= $ct->pais_id ?></td>
                    <td>
                        <a href="<?= base_url('centro_de_treinamento/editar/' . $ct->id) ?>" >
                            <span class="glyphicon glyphicon-edit"></span></a>
                    </td>

                <?php } ?>
            </tr>

        </tbody>
    </table>


</div>



