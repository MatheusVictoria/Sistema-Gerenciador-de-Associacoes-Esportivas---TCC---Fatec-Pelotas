<?php

/**
 * 
 * Implementa a classe Cidade extendendo a classe CI_Controller
 * 
 * @author Matheus Silva Victória
 */

class Cidade extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
              
        $this->load->model('Cidade_Model', 'cidadeM');       
        
    }
    
    /**
     * 
     * Buscas as cidades após o usuário selecionar o estado
     * @param estado_id recebe o id do estado 
     */
    
    public function busca_cidade(){
        
        $estado_id = $this->input->post('estado_id');
        
        echo $this->cidadeM->busca_cidades($estado_id);
        
        
    }
    
    
}