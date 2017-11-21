<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Eventos_Participados extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/logar');
        }

        $this->load->model('Registra_Eventos_Model', 'reM');
        $this->load->model('Modalidade_Model','modalidadeM');
        
    }
    
    
    public function index(){
        
    }
    
    
    public function registra_eventos(){
        
                /**
         * @dados['erro'], inicializando nula, recebe as mensagens de erro de validação
         *  
         */
        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();

        $this->form_validation->set_rules('data', 'Data', 'required', array('required' => 'Preencha o campo data'));
        $this->form_validation->set_rules('nome', 'Nome', 'required', array('required' => 'È obrigatótio preencher o nome do evento '));
        $this->form_validation->set_rules('modalidade_id', 'Modalidade', 'required', array('required' => 'Escolha uma modalidade'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $this->reM->inserir($dados);
            redirect('listar_eventos');
        }

        $dados['modalidade'] = $this->modalidadeM->selecionar();
        $this->load->view('form_registra_eventos', $dados);
        $this->load->view('templates/footer');
        
    }
    
     public function listar() {

        $dados['eventos'] = $this->reM->selecionar();
        $dados['modalidade'] = $this->modalidadeM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_eventos', $dados);
        $this->load->view('templates/footer');
    }
    
    
}
