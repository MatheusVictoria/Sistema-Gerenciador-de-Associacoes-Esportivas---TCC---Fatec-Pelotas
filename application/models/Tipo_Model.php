<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_Model extends CI_Model{
    
    public function inserir($dados){
        
        return $this->db->insert('tipo', $dados);        
        
    }
    
    public function selecionar(){
        
        $sql = "SELECT * FROM tipo";
        
        $query = $this->db->query($sql);
        
        return $query->result();
        
    }
    
    public function encontrar($id){
        
        $sql = "SELECT * FROM tipo WHERE id = $id";
        
        $query = $this->db->query($sql);
        
        return $query->row();
        
    }
    
    public function atualiza($registro) {
     
        $this->db->where('id', $registro['id']);
        return $this->db->update('tipo', $registro);
    }
    
    
    
    
}

