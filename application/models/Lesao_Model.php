<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lesao_Model extends CI_Model {
    
    
    
    /**
     * Método selecionar busca todos os dados existentes na tabela tipo_lesao.
     * @param  $sql recebe o comando sql 'select' para buscar os dados da tabela tipo_lesao
     * e ordena pelo id.
     * @return $qeury tras o resultado da busca realizada.
     */
     public function selecionar() {

        $sql = 'SELECT * FROM tipo_lesao ORDER BY id';

        $query = $this->db->query($sql);

        return $query->result();
    }
}

