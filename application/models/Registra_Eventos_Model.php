<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registra_Eventos_Model extends CI_Model {

    public function inserir($registro) {

        return $this->db->insert('evento', $registro);
    }
    
        public function selecionar() {

        $sql = 'SELECT e.id, e.nome,  e.data, e.local, m.modalidade as e.modalidade_id  FROM evento e LEFT JOIN modalidade m  ON  m.id = e.modalidade_id ORDER BY e.id';

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function encontrar($id) {

        $sql = "SELECT h.id, h.data, h.descricao, t.horario as turma_id  FROM `historico_aula` h LEFT JOIN turma t ON h.turma_id = t.id WHERE h.id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

}
