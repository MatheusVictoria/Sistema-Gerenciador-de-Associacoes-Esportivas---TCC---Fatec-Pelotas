<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Graduacao_Model extends CI_Model {

    function inserir($registro) {

        $hora = time("H:i:s");
        $acao = "usuário $this->session->id inserio a graduação " . $registro['cor'];
        $this->db->query("INSERT INTO log (acao, data_acao, hora_acao) VALUES (' $acao ', NOW(), $hora)");

        return $this->db->insert('graduacao', $registro);
    }

    function selecionar() {

        $sql = "SELECT * FROM graduacao";

        $query = $this->db->query($sql);

        return $query->result();
    }

    function encontrar($id) {

        $sql = "SELECT * FROM graduacao WHERE id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

    function atualiza($registro) {
        
        $hora = time("H:i:s");
        $usuario = $this->session->nome;
        $acao = "usuário alterou a graduação " . $registro['cor'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_acao, hora_acao) VALUES (' $acao ', '$usuario', NOW(), $hora)");

        $this->db->where('id', $registro['id']);
        return $this->db->update('graduacao', $registro);
    }

}
