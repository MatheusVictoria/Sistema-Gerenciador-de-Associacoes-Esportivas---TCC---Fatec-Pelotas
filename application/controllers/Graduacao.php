<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Graduacao extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/logar');
        }

        
        $this->load->model('Graduacao_Model', 'graduacaoM');
    }

    function index() {

        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        
        $dados = $this->input->post();
       
        $this->form_validation->set_rules('cor', 'Cor', 'trim|required', array('required' => 'Preencha o campo cor'));
        $this->form_validation->set_rules('descricao', 'Descrição', 'trim|required', array('required' => 'Preencha o campo descrição'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {

            $this->graduacaoM->inserir($dados);
            redirect('listar_graduacao');
            
        }
        
        $this->load->view('form_graduacao', $dados);
        $this->load->view('templates/footer');
        
    }

    public function editar($id) {

        $dados ['graduacao'] = $this->graduacaoM->encontrar($id);
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_graduacao', $dados);
        $this->load->view('templates/footer');
    }

    public function listar() {

        $dados ['graduacao'] = $this->graduacaoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_graduacao', $dados);
        $this->load->view('templates/footer');
    }

    public function grava_alteracao() {

        $dados = $this->input->post();
        $this->graduacaoM->atualiza($dados);

        redirect('listar_graduacao');
    }

}
