<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_Model extends CI_Model {

    public function inserir($registro) {

        $registro ['senha'] = md5($registro['senha']);
        return $this->db->insert('usuario', $registro);
        
    }

    public function selecionar() {

        $sql = 'SELECT u.id, u.usuario, u.senha, u.ativo, t.tipo as tipo_id  FROM `usuario` u LEFT JOIN tipo t ON u.tipo_id = t.id ORDER BY u.id';

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function encontrar($id) {

        $sql = "SELECT u.id, u.usuario, u.senha, u.ativo, t.tipo as tipo_id  FROM `usuario` u LEFT JOIN tipo t ON u.tipo_id = t.id WHERE u.id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

    public function atualiza($registro) {
        $registro ['senha'] = md5($registro['senha']);
        $this->db->where('id', $registro['id']);
        return $this->db->update('usuario', $registro);
    }

    public function verificaUsuario($email, $senha) {
        $sql = "select * from usuario where email=? and senha=? and ativo=1";
        $query = $this->db->query($sql, array($email, md5($senha)));
        return $query->row();
    }

}
