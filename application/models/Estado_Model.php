<?php

class Estado_Model extends CI_Model{
    
   /**
     * 
     * Busca o id das cidades através do nome.
     * @param $nome recebe o nome da cidade através do formulário
     */
    public function busca_estados($rua) {

        $query = $this->db->query("select id as estado_id from estado where rua = '{$rua}'");
        $linha = $query->row();
        return $linha->id_estado;
    }

    
}

