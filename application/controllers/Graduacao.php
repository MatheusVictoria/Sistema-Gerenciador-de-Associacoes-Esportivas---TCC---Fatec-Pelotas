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
    
    public function editar($id){
        
        $dados ['graduacao'] = $this->graduacaoM->encontrar($id);
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_graduacao', $dados);
        $this->load->view('templates/footer');
        
        
    }
    
    public function listar(){
        
        $dados ['graduacao'] = $this->graduacaoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_graduacao', $dados);
        $this->load->view('templates/footer');      
        
    }
    
    
}
