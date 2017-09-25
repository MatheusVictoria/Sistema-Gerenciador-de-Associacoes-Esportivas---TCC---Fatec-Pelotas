<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lesao_Model extends CI_Model {
    
     public function selecionar() {

        $sql = 'SELECT * FROM tipo_lesao ORDER BY id';

        $query = $this->db->query($sql);

        return $query->result();
    }
}

