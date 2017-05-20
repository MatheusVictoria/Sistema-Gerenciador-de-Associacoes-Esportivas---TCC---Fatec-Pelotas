<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Graduacao extends CI_Controller {
    
     public function __construct() {
        parent::__construct();
        //  if (!$this->session->logado) {
        //    redirect("home/login");
        //}
        $this->load->model('Graduacao_Model', 'graduacaoM');
    }
    
    
    function index (){
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_graduacao');
        $this->load->view('templates/footer');
        
    }
    
    function cadastrar(){
        
        $dados = $this->input->post();
        
        $this->graduacaoM->inserir($dados);
        
  
        redirect(base_url());
        
        
    }
    
    
}
