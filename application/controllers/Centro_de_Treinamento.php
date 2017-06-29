<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Centro_de_Treinamento extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //  if (!$this->session->logado) {
        //    redirect("home/login");
        //}
        $this->load->model('Centro_de_Treinamento_Model', 'ctM');
    }

    public function index() {

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_centro_treinamento');
        $this->load->view('templates/footer');
    }

    public function cadastrar() {

        $dados = $this->input->post();

        $this->ctM->inserir($dados);

        redirect(base_url('listar_ct'));
    }

    public function listar() {

        $dados['centro'] = $this->ctM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_centro_de_treinamento', $dados);
        $this->load->view('templates/footer');
    }
    
    
    public function editar($id){
        
        $dados ['ct'] = $this->ctM->encontrar($id);
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_centro_de_treinamento', $dados);
        $this->load->view('templates/footer');
        
    }
    
    public function grava_alteracao(){
        
        $dados = $this->input->post();
        $this->ctM->atualiza($dados);
        
        redirect(base_url('listar_ct'));
        
    }
    
}
