<div class="col-lg-10">

    <div class="col-lg-12">
        <h1>
            Lista de Usuários
        </h1>

        <hr class="col-lg-12 media btn-primary" />

    </div>

    <table class="table col-lg-12">
        <thead>
            <tr>
                <th>#</th>
                <th>Usuário</th>
                <th>Senha</th>
                <th>Tipo de Usuário</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuario as $us) { ?>
                <tr>
                    <td><?= $us->id ?></td>
                    <td><?= $us->usuario ?></td>
                    <td><?= $us->senha ?></td>
                    <td><?= $us->tipo_id ?></td>
                    <td><?php
                        if ($us->ativo == 1) {
                            echo "sim";
                        } else {
                            echo "não";
                        }
                        ?></td>
                    <td>  
                        <a href="<?= base_url('usuario/editar/' . $us->id) ?>" >
                            <span class="glyphicon glyphicon-edit"></span></a>
                    </td>

                <?php } ?>
            </tr>

        </tbody>
    </table>


</div>



