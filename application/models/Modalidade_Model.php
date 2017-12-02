<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modalidade_Model extends CI_Model{
    
    public function inserir($dados){
        $hora = time("H:i:s");
        $usuario = $this->session->nome;
        $acao = "usuário inseriu a modalidade " . $dados['nome'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_acao, hora_acao) VALUES (' $acao ','$usuario', NOW(), $hora)");
        
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
     
        $hora = time("H:i:s");
        $usuario = $this->session->nome;
        $acao = "usuário atualizou o valor da modalidade " . $dados['nome'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_acao, hora_acao) VALUES (' $acao ','$usuario', NOW(), $hora)");
        
        $this->db->where('id', $registro['id']);
        return $this->db->update('modalidade', $registro);
    }
    
    
    
    
}



