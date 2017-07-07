<div class="col-lg-10 conteudo">

    <div class="col-lg-12">
        <h1>
            Lista de Tipos de Usuário
        </h1>

        <hr class="col-lg-12 media btn-primary" />

    </div>

    <table class="table col-lg-12">
        <thead>
            <tr>
                <th>#</th>
                <th>Tipo de Usuário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipo as $tp) { ?>
                <tr>
                    <td><?= $tp->id ?></td>
                    <td><?= $tp->tipo ?></td>
                    <td>
                        <a href="<?= base_url('tipo/editar/' . $tp->id) ?>" >
                            <span class="glyphicon glyphicon-edit "></span></a>
                    </td>

                <?php } ?>
            </tr>

        </tbody>
    </table>


</div>



