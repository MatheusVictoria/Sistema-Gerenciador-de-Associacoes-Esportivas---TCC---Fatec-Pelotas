<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Centro_de_Treinamento_Model extends CI_Model {

    function inserir() {

        /* SET AUTOCOMMIT=0;
          START TRANSACTION;
          INSERT INTO endereco(rua, numero,complemento, cep, bairro, cidade_id)
          VALUES();
          INSERT INTO centro_treinamento(nome, endereco_id)
          values(nome, (select LAST_INSERT_ID()));
          COMMIT;
          SET AUTOCOMMIT=1;
         */

        return $this->db->insert('centro_treinamento');
    }

    function selecionar() {

        $sql = "SELECT * FROM centro_treinamento";

        $query = $this->db->query($sql);

        return $query->result();
    }

    function encontrar($id) {

        $sql = "SELECT * FROM centro_treinamento WHERE id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

    function atualiza($registro) {

        $this->db->where('id', $registro['id']);
        return $this->db->update('centro_treinamento', $registro);
    }

}
