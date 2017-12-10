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
                <th style="border: 1px black solid; text-align: left; padding-bottom: 10px">Valor Total Pago</th>
            </tr>
                <?php foreach ($mensalidades as $mensalidade) { ?>
            <tr>
                    <td style="border: 1px black solid; text-align: left; padding-bottom: 10px"><?= $mensalidade->nome ?></td>
                    <td style="border: 1px black solid; text-align: left; padding-bottom: 10px"><?= $mensalidade->data_pagamento ?></td>
                    <td style="border: 1px black solid; text-align: left; padding-bottom: 10px"><?= $mensalidade->valor ?></td>
                    <td style="border: 1px black solid; text-align: left; padding-bottom: 10px"><?= $mensalidade->valor_pago ?></td>
            </tr>                    
                <?php } ?>
            <tr>
                <td ><b>Total:</b></td>
            </tr>

        </table>

    </body>
</html>