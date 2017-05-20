<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_Model extends CI_Model{
    
    
    
    public function inserir($registro){
        
        return $this->db->insert('usuario', $registro);
        
    }
    
    public function selecionar(){
        
        $sql = 'SELECT u.usuario, u.senha, u.ativo, t.tipo as tipo_id  FROM `usuario` u LEFT JOIN tipo t ON u.tipo_id = t.id';
        
        $query = $this->db->query($sql);
        
        return $query->result();
        
    }
    
}


