<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modalidade extends CI_Controller {

    public function __construct() {
        parent::__construct();
         if (!$this->session->logado) {
            redirect('home/logar');
        }

        
        $this->load->model('Modalidade_Model', 'modalidadeM');
    }

    function index() {

        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        
        $dados = $this->input->post();
       
        $this->form_validation->set_rules('modalidade', 'Modalidade', 'trim|required', array('required' => 'Preencha o campo modalidade'));
        

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {

            $this->modalidadeM->inserir($dados);
            redirect('listar_modalidade');
            
        }
        
        $this->load->view('form_modalidade', $dados);
        $this->load->view('templates/footer');
        
    }

    public function editar($id) {

        $dados ['modalidade'] = $this->modalidadeM->encontrar($id);
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_modalidade', $dados);
        $this->load->view('templates/footer');
    }

    public function listar() {

        $dados ['modalidade'] = $this->modalidadeM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_modalidade', $dados);
        $this->load->view('templates/footer');
    }

    public function grava_alteracao() {

        $dados = $this->input->post();
        $this->modalidadeM->atualiza($dados);

        redirect('listar_modalidade');
    }

}

