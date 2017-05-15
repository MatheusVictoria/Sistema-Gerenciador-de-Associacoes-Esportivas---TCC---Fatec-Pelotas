<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Centro_de_Treinamento extends CI_Controller{
    
    
    public function index(){
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_centro_treinamento');
        $this->load->view('templates/footer');
        
    }
    
    
}


