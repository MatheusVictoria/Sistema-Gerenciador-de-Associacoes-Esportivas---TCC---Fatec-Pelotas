<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mensalidade_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function gerar_mensalidade($data_vencimento, $parcelas, $aluno_id, $turma_id, $valor) {

        $dataExplode = explode("/", $data_vencimento);

        $dia = $dataExplode[0];
        $mes = $dataExplode[1];
        $ano = $dataExplode[2];

        for ($i = 0; $i <= $parcelas; $i++) {
            if ($mes > 12) {
                $mes = 1;
                $ano++;
            }

            // faz o insert
            $dados = [
                'turma_has_aluno_aluno_id' => $aluno_id,
                'turma_has_aluno_turma_id' => $turma_id,
                'data_vencimento' => date("Y-d-m", mktime(0, 0, 0, $dia, $mes, $ano)),
                'valor' => $valor
            ];

            // aqui faz o insert do codeigniter, só descomentar e colocar tua tabela certa
            $this->db->insert('mensalidade', $dados);


            $mes++;
        }
        
        $hora = time("H:i:s");
        $usuario = $this->session->nome;
        $acao = "usuário gerou as mensalidades do aluno " . $dados['nome'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_acao, hora_acao) VALUES (' $acao ','$usuario', NOW(), $hora)");
    }

    /**
     * Método para buscar os alunos referentes a uma determinada turma selecionado pelo ususario.
     * 
     * @param  $dados recebe o id referente a cor a turma selecionada no campo do formulario
     * @param  $slq recebe o comando Select responçavel por fazer a busca dos alunos que correspondam ao id 
     * da turma selecionado pelo usuário atraves da clausula LIKE.
     * @return $query-result()
     * retorna os resultado encontrados pelo query 
     */
    public function pesquisa_alunos_turma() {
        $dados = $this->input->post('turma_id');

        $sql = "SELECT a.nome, t.horario, t.id, ta.aluno_id, m.valor FROM aluno a INNER JOIN turma_has_aluno ta ON a.id = ta.aluno_id "
                . "INNER JOIN turma t ON t.id = ta.turma_id "
                . "INNER JOIN modalidade m ON m.id = t.modalidade_id WHERE a.id = ta.aluno_id AND t.id = $dados ORDER BY a.nome  ";

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function selecionar($id) {


        $sql = "SELECT a.nome, ta.aluno_id, m.valor, men.id, men.data_vencimento, men.data_pagamento FROM mensalidade men  
                INNER JOIN aluno a ON a.id = men.turma_has_aluno_aluno_id 
                INNER JOIN turma_has_aluno ta ON a.id = ta.aluno_id 
                INNER JOIN turma t ON t.id = ta.turma_id 
                INNER JOIN modalidade m ON m.id = t.modalidade_id 
                WHERE men.data_pagamento IS NULL
                AND men.turma_has_aluno_aluno_id = $id
                AND men.data_vencimento < now() ORDER BY men.data_vencimento ";
        
        $query = $this->db->query($sql);
        
        
        return $query->result();
    }
    
    public function encontrar($id) {


        $sql = "SELECT a.nome, ta.aluno_id, m.valor, men.id, men.data_vencimento, men.data_pagamento FROM mensalidade men  
                INNER JOIN aluno a ON a.id = men.turma_has_aluno_aluno_id 
                INNER JOIN turma_has_aluno ta ON a.id = ta.aluno_id 
                INNER JOIN turma t ON t.id = ta.turma_id 
                INNER JOIN modalidade m ON m.id = t.modalidade_id 
                WHERE men.id = $id ";
        
        $query = $this->db->query($sql);
        
        
        return $query->row();
    }
    
    function atualiza($registro) {
        
        $hora = time("H:i:s");
        $usuario = $this->session->nome;
        $acao = "usuário lançou o pagamento do aluno " . $registro['nome'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_acao, hora_acao) VALUES (' $acao ','$usuario', NOW(), $hora)");

        $this->db->where('id', $registro['id']);
        return $this->db->update('mensalidade', $registro);
    }
    
    

}
