<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Turma_Model extends CI_Model {

    public function inserir($registro) {
        
        return $this->db->insert('turma', $registro);
        
    }

}
