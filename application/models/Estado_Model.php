<?php

class Estado_Model extends CI_Model{
    
    /**
     * 
     * Traz todos os estados cadastrados no banco de dados.
     * 
     */
    public function busca_estados(){
        
        
        return $this->db->order_by('sigla')
                ->get('estado');
        
    }
    
    
    /**
     * 
     * Cria o select referente aos estados.
     * 
     */
    public function seleciona_estados(){
        
        $opicao = "<option value=''>Selecione o Estado</option>";
        
        $estados = $this->busca_estados();
        
        foreach ($estados->result() as $estado) {
            
            $opicao .= "<option value='{$estado->id}'>{$estado->sigla}</option>";
            
        }
        
        return $opicao;
                
    }
    
}

