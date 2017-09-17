<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Turma_Model extends CI_Model {

    public function inserir($registro) {

        return $this->db->insert('turma', $registro);
    }

    public function selecionar() {

        $sql = "SELECT t.id, t.horario, p.nome as professor_id, c.nome as centro_treinamento_id, m.modalidade as modalidade_id  FROM turma t "
                . "LEFT JOIN professor p ON t.professor_id = p.id "
                . "LEFT JOIN modalidade m ON t.modalidade_id = m.id "
                . "LEFT JOIN centro_treinamento c ON t.centro_treinamento_id = c.id ";

        $query = $this->db->query($sql);

        return $query->result();
    }
    
    /**
     * 
     * Faz uma busca através do id solicitado
     * @param $id recebe o id solicitado na pagina lista_turma
     * 
     */
    public function encontrar($id) {

        $sql = "SELECT t.id, t.horario, p.nome as professor_id, c.nome as centro_treinamento_id, m.modalidade as modalidade_id  FROM turma t "
                . "LEFT JOIN professor p ON t.professor_id = p.id "
                . "LEFT JOIN modalidade m ON t.modalidade_id = m.id "
                . "LEFT JOIN centro_treinamento c ON t.centro_treinamento_id = c.id "
                . " WHERE t.id = $id ";
           

        $query = $this->db->query($sql);

        return $query->row();
    }
    
    
    /**
     * 
     * Recebe os dados do formulário de alteração de turma e atualiza os dados 
     * na tabela do banco. 
     * @param type $registro
     * @return type
     */
     function atualiza($registro){
        
        $this->db->where('id', $registro['id']);
        return $this->db->update('turma', $registro);
        
    }

}
