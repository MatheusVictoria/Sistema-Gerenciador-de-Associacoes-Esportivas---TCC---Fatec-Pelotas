<?php

class Cidade_Model extends CI_Model {

    /**
     * 
     * Busca o id das cidades através do nome.
     * @param $nome recebe o nome da cidade através do formulário
     */
    public function busca_cidades($nome) {

        $query = $this->db->query("select id as id_cidade from cidade where nome = '{$nome}'");
        $linha = $query->row();
        return $linha->id_cidade;
    }

}
