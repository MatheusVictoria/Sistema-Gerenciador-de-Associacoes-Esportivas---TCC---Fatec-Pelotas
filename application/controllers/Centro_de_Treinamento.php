<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Centro_de_Treinamento extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //  if (!$this->session->logado) {
        //    redirect("home/login");
        //}
        $this->load->model('Centro_de_Treinamento_Model', 'ctM');
        
    }
    
    public function index(){
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_centro_treinamento');
        $this->load->view('templates/footer');
        
    }
    
    public function cadastrar(){
        
        $dados = $this->input->post();
        
        $this->ctM->inserir($dados);
        
        redirect(base_url());
        
    }
    
    
}


