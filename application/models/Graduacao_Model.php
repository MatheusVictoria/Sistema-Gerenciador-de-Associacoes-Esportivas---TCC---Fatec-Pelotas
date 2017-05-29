<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Graduacao_Model extends CI_Model {
    
    function inserir ($registro){
        
        return $this->db->insert('graduacao', $registro);
        
    }
    
    function selecionar(){
        
        $sql = "SELECT * FROM graduacao";
        
        $query = $this->db->query($sql);
        
        return $query->result();
        
    }
    
    function encontrar($id){
        
        $sql = "SELECT * FROM graduacao WHERE id = $id";
        
        $query = $this->db->query($sql);
        
        return $query->row();        
        
    }
    
    
}