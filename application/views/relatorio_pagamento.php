<!DOCTYPE html>
<html>
    <body>

        <header style="text-align: center">
            <h1>Relatório de Pagamento por Periodo</h1>
        </header>

        <table style="width:100%; text-align: left; border: 1px black solid">
            <tr>
                <th style="border: 1px black solid; text-align: left; padding-bottom: 10px">Aluno</th>
                <th style="border: 1px black solid; text-align: left; padding-bottom: 10px">Data de Pagamento</th> 
                <th style="border: 1px black solid; text-align: left; padding-bottom: 10px">Valor</th>
            </tr>
                <?php foreach ($alunos as $aluno) { ?>
            <tr>
                    <td style="border: 1px black solid; text-align: left; padding-bottom: 10px"><?= $aluno->nome ?></td>
                    <td style="border: 1px black solid; text-align: left; padding-bottom: 10px"><?= $aluno->data_pagamento ?></td>
                    <td style="border: 1px black solid; text-align: left; padding-bottom: 10px"><?= $aluno->valor ?></td>
            </tr>                    
                <?php } ?>
            <tr >
                <td style="margin: 200px">Total:</b> <?= $total[0]->valor_pago ?></td>
            </tr>

        </table>

    </body>
</html>