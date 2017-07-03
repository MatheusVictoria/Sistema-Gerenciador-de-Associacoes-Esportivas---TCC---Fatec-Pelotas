<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller {

    public function __construct() {
        parent::__construct();
         if (!$this->session->logado) {
            redirect("home/login");
        }
        $this->load->model('Professor_Model', 'professorM');
        $this->load->model('Graduacao_Model', 'graduacaoM');
    }

    public function index() {

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $dados ['graduacao']= $this->graduacaoM->selecionar();
        $this->load->view('form_professor', $dados);
        $this->load->view('templates/footer');
    }

    public function cadastrar() {

        $dados = $this->input->post();

        $this->professorM->inserir($dados);

        redirect('listar_professor');
    }

    public function listar() {

        $dados['professor_edita'] = $this->professorM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_professor', $dados);
        $this->load->view('templates/footer');
    }
    
    
    public function editar($id){
        
        $dados ['professor'] = $this->professorM->encontrar($id);
        $dados ['graduacao'] = $this->graduacaoM->selecionar();        
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_professor', $dados);
        $this->load->view('templates/footer');
        
    }
    
    public function grava_alteracao(){
        
        $dados = $this->input->post();
        $this->professorM->atualiza($dados);
        
        redirect('listar_professor');
        
        
    }

}
