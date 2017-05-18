<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Graduacao_Model extends CI_Model {
    
    function inserir ($registro){
        
        return $this->db->insert('graduacao', $registro);
        
    }
    
    
}