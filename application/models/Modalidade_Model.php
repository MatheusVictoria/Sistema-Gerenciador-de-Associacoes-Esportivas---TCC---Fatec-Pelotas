<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modalidade_Model extends CI_Model{
    
    public function inserir($dados){
        
        $usuario = $this->session->nome;
        $acao = "usuário inseriu a modalidade " . $dados['modalidade'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_hora_acao) VALUES (' $acao ','$usuario', NOW())");
        
        return $this->db->insert('modalidade', $dados);        
        
    }
    
    public function selecionar(){
        
        $sql = "SELECT * FROM modalidade";
        
        $query = $this->db->query($sql);
        
        return $query->result();
        
    }
    
    public function encontrar($id){
        
        $sql = "SELECT * FROM modalidade WHERE id = $id";
        
        $query = $this->db->query($sql);
        
        return $query->row();
        
    }
    
    public function atualiza($registro) {
     
        
        $usuario = $this->session->nome;
        $acao = "usuário atualizou o valor da modalidade " . $registro['nome'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_hora_acao) VALUES (' $acao ','$usuario', NOW())");
        
        $this->db->where('id', $registro['id']);
        return $this->db->update('modalidade', $registro);
    }
    
    
    
    
}



