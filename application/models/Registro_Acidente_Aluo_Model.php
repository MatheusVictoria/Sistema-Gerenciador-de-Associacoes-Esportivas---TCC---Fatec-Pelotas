<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_Acidente_Aluo_Model extends CI_Model {

    public function inserir($registro) {

        return $this->db->insert('historico_aluno', $registro);
    }

    public function selecionar() {

        $sql = 'SELECT h.id, h.data, h.descricao,h.lesao, a.nome as aluno_id, m.modalidade as modalidade_id  FROM `historico_aluno` h '
                . 'LEFT JOIN aluno a ON h.aluno_id = a.id'
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

}
