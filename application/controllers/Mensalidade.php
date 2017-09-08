<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mensalidade extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/logar');
        }


        $this->load->model('Mensalidade_Model', 'mensalidadeM');
        $this->load->model('Aluno_Model', 'alunoM');
    }
    
    public function index(){
        
        $dados['aluno'] = $this->alunoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lanca_pagamento', $dados);
        $this->load->view('templates/footer');
        
    }

}
