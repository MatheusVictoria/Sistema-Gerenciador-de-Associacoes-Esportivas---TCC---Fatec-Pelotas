<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Graduacao_Model extends CI_Model {

    function inserir($registro) {

        $hora = time("H:i:s");
        $acao = "usuário inserio a graduação " . $registro['cor'];
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

        $this->db->where('id', $registro['id']);
        return $this->db->update('graduacao', $registro);
    }

}
