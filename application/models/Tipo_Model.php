<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_Model extends CI_Model{
    
    public function inserir($registro){
        
        return $this->db->insert('tipo', $registro);        
        
    }
    
    public function selecionar(){
        
        $sql = "SELECT * FROM tipo";
        
        $query = $this->db->query($sql);
        
        return $query->result();
        
    }
    
    
}

