<div class="col-lg-10 conteudo">

    <div class="col-lg-12">
        <h1>
            Lista de Graduações
        </h1>

        <hr class="col-lg-12 media btn-primary" />

    </div>

    <table class="table col-lg-12">
        <thead>
            <tr>
                <th>#</th>
                <th>Cor da Faixa</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($graduacao as $grad) { ?>
                <tr>
                    <td><?= $grad->id ?></td>
                    <td><?= $grad->cor ?></td>
                    <td><?= $grad->descricao ?></td>
                    <td><a href="<?= base_url('graduacao/editar/' . $grad->id) ?>" >
                            <span class="glyphicon glyphicon-edit"></span></a>
                    </td>

                <?php } ?>
            </tr>

        </tbody>
    </table>


</div>

