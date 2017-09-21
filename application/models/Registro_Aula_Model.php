<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_Aula_Model extends CI_Model {

    public function inserir($registro) {

        return $this->db->insert('historico_aula', $registro);
    }

    public function selecionar() {

        $sql = 'SELECT h.id, h.data,  h.descricao, t.horario as turma_id  FROM `historico_aula` h LEFT JOIN turma t ON h.turma_id = t.id ORDER BY h.id';

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function encontrar($id) {

        $sql = "SELECT h.id, h.data, h.descricao, t.horario as turma_id  FROM `historico_aula` h LEFT JOIN turma t ON h.turma_id = t.id WHERE h.id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }
    
    public function visualizar($id) {

        $sql = "SELECT h.id, h.data, h.descricao, t.horario as turma_id  FROM `historico_aula` h LEFT JOIN turma t ON h.turma_id = t.id WHERE h.id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

}
