<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registra_Eventos_Model extends CI_Model {

    public function inserir($registro) {
        
        $hora = time("H:i:s");
        $usuario = $this->session->nome;
        $acao = "usuário insereiu o evento " . $registro['evento'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_acao, hora_acao) VALUES (' $acao ','$usuario', NOW(), $hora)");

        return $this->db->insert('evento', $registro);
    }
    
        public function selecionar() {

        $sql = 'SELECT e.id, e.nome,  e.data, e.local, m.modalidade as modalidade_id  FROM evento e LEFT JOIN modalidade m  ON  m.id = e.modalidade_id ORDER BY e.id';

        $query = $this->db->query($sql);

        return $query->result();
    }

}
