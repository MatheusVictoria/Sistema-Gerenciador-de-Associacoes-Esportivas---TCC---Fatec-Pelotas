<div class="col-lg-10 conteudo">

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
                <th>E-mail</th>
                <th>Tipo de Usuário</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuario as $tp) { ?>
                <tr>
                    <td><?= $tp->id ?></td>
                    <td><?= $tp->usuario ?></td>
                    <td><?= $tp->email ?></td>
                    <td><?= $tp->tipo_id ?></td>
                    <td><?php
                        if ($tp->ativo == 1) {
                            echo "sim";
                        } else {
                            echo "não";
                        }
                        ?></td>
                    <td>  
                        <a href="<?= base_url('usuario/editar/' . $tp->id) ?>" >
                            <span class="glyphicon glyphicon-edit "></span></a>
                    </td>

                <?php } ?>
            </tr>

        </tbody>
    </table>


</div>



