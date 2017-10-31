/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(function lista_presenca () {
    $("#turma_id").change(function () {
        var turma = $("#turma_id").val();
        $.ajax({
            url: "model/Turma_Model/pesquisa_aluno", // Metodo de buscar juros
            type: "POST",
            data: {turma_id: turma},
            success: function (data) {
                $("#alunos").val(data);
            }
        });
    });
});
