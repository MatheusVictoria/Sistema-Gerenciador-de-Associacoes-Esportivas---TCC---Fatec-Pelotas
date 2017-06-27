<?php

class Cidade_Model extends CI_Model{
    
      /**
         * 
         * Busca as cidades pelo estado.
         * 
         */
    public function busca_cidades($estado_id){
        
        return $this->db->where('estado_id', $estado_id)
                ->order_by('nome')
                ->get('cidade');
        
    }
    
    public function seleciona_cidade($estado_id = null){
        
        $cidades = $this->busca_cidades($estado_id);
        
        $opicao = "<option>Seleciona a cidade</option>";
        
        foreach ($cidades->result() as $cidade){
            
            $opicao .= "<option value='{$cidade->id}'>'{$cidade->nome}'</option>";
            
        }
        
        return $opicao;
        
    }
    
    
    
    
}
