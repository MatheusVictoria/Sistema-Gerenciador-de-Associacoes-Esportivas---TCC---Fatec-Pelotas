<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //  if (!$this->session->logado) {
        //    redirect("home/login");
        //}
        $this->load->model('Aluno_Model', 'alunoM');
        $this->load->model('Graduacao_Model', 'graduacaoM');
    }

    public function index() {


        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $dados ['graduacao'] = $this->graduacaoM->selecionar();
        $this->load->view('form_aluno', $dados);
        $this->load->view('templates/footer');
    }

    public function cadastrar() {

        $dados = $this->input->post();

        $this->alunoM->inserir($dados);

        redirect(base_url('listar_aluno'));
    }

    public function listar() {

        $dados['aluno'] = $this->alunoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_aluno', $dados);
        $this->load->view('templates/footer');
    }
    
    
    public function editar($id){
        
        $dados ['aluno'] = $this->alunoM->encontrar($id);
        $dados ['graduacao'] = $this->graduacaoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_aluno', $dados);
        $this->load->view('templates/footer');
        
    }
    
    public function grava_alteracao(){
        
        $dados = $this->input->post();
        
        $this->alunoM->atualiza($dados);
        
        redirect('lista_aluno');
        
    }

}
