<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Patologia_Model extends CI_Model {
    
    
    
    /**
     * Método selecionar busca todos os dados existentes na tabela patologia.
     * @param  $sql recebe o comando sql 'select' para buscar os dados da tabela patologia
     * e ordena pelo campo patologia.
     * @return $query tras o resultado da busca realizada.
     */
     public function selecionar() {

        $sql = 'SELECT * FROM patologia ORDER BY patologia';

        $query = $this->db->query($sql);

        return $query->result();
    }
}

