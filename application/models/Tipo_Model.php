<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_Model extends CI_Model{
    
    public function inserir($dados){
        
        
        $usuario = $this->session->nome;
        $acao = "usuário inserio o tipo de usuario " . $dados['tipo'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_hora_acao) VALUES (' $acao ','$usuario', NOW())");
        
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
        $hora = time("H:i:s");
        $usuario = $this->session->nome;
        $acao = "usuário atualizou o tipo de usuario " . $registro['tipo'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_acao, hora_acao) VALUES (' $acao ','$usuario', NOW(), $hora)");
        
        $this->db->where('id', $registro['id']);
        return $this->db->update('tipo', $registro);
    }
    
    
    
    
}

