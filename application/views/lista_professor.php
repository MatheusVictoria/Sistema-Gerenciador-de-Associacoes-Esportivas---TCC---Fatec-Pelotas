<div class="col-lg-10 conteudo">

    <div class="col-lg-12">
        <h1>
            Lista de Professores
        </h1>

        <hr class="col-lg-12 media btn-primary" />

    </div>

    <table class="table col-lg-12">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>RG</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Sexo</th>
                <th>Graduação</th>
                <th>Rua</th>
                <th>Numero</th>
                <th>Complemento</th>
                <th>Cep</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Pais</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($professor_edita as $p) { ?>
                <tr>
                    <td><?= $p->id ?></td>
                    <td><?= $p->nome ?></td>
                    <td><?= $p->rg ?></td>
                    <td><?= $p->cpf ?></td>
                    <td><?= $p->telefone ?></td>
                    <td><?= $p->email ?></td>
                    <td><?= $p->sexo ?></td>
                    <td><?= $p->graduacao_id ?></td>
                    <td><?= $p->endereco_id ?></td>
                    <td><?= $p->numero ?></td>
                    <td><?= $p->complemento ?></td>  
                    <td><?= $p->cep ?></td>  
                    <td><?= $p->bairro ?></td>  
                    <td><?= $p->cidade_id ?></td>  
                    <td><?= $p->estado_id ?></td>  
                    <td><?= $p->pais_id ?></td>
                    <td><?php
                        if ($p->ativo == 1) {
                            echo "sim";
                        } else {
                            echo "não";
                        }
                        ?></td></td>
                    <td>
                        <a href="<?= base_url('professor/editar/' . $p->id) ?>" >
                            <span class="glyphicon glyphicon-edit"></span></a>
                    </td>

                <?php } ?>
            </tr>

        </tbody>
    </table>


</div>



