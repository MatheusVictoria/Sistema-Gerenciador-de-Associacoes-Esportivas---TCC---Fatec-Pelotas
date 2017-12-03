<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_Acidente_Aluo_Model extends CI_Model {

    public function inserir($dados) {

        $this->db->trans_start();
        
        $usuario = $this->session->nome;
        $acao = "usuário insereriu um acidente para o aluno " . $dados['nome'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_hora_acao) VALUES (' $acao ','$usuario', NOW())");
        
        $this->db->query("INSERT INTO historico_aluno(aluno_id, descricao, modalidade_id, data)
          VALUES('{$dados['aluno_id']}', '{$dados['descricao']}', '{$dados['modalidade_id']}', '{$dados['data']}')");
        $this->db->query("INSERT INTO historico_aluno_has_tipo_lesao(tipo_lesao_id, historico_aluno_id)
         values('{$dados['lesao']}', (select LAST_INSERT_ID()));");
        $this->db->trans_complete();
    }

    public function selecionar() {

        $sql = 'SELECT h.id, h.data, SUBSTRING(h.descricao, 1, 30) AS descricao, a.nome as aluno_id, m.modalidade as modalidade_id  FROM `historico_aluno` h '
                . 'LEFT JOIN aluno a ON h.aluno_id = a.id '
                . 'LEFT JOIN modalidade m ON h.modalidade_id = m.id ORDER BY h.id';

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function encontrar($id) {

        $sql = 'SELECT h.id, h.data, h.descricao,h.lesao, a.nome as aluno_id, m.modalidade as modalidade_id  FROM `historico_aula` h'
                . ' LEFT JOIN aluno a ON h.aluno_id = a.id'
                . ' LEFT JOIN modalidade m ON h.modalidade_id = m.id WHERE u.id = $id';

        $query = $this->db->query($sql);

        return $query->row();
    }
    
     public function visualizar($id) {

        $sql = "SELECT h.id, h.data, h.descricao, m.modalidade as modalidade_id, a.nome as aluno_id   FROM `historico_aluno` h "
                . "LEFT JOIN modalidade m ON h.modalidade_id = m.id "
                . "LEFT JOIN aluno a ON h.aluno_id = a.id WHERE h.id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

}
