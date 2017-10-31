<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_Acidente_Aluno extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        if (!$this->session->logado) {
            redirect('home/logar');
        }
        
        $this->load->model('Registro_Acidente_Aluo_Model', 'raaM');
        $this->load->model('Aluno_Model', 'alunoM');
        $this->load->model('Modalidade_Model', 'modalidadeM');
        $this->load->model('Lesao_Model', 'lesaoM');
        
    }
    
    
    public function index(){
        
    }
    
    public function registra_acidente(){
        
        
        /**
         * @dados['erro'], inicializando nula, recebe as mensagens de erro de validação
         *  
         */
        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();

        $this->form_validation->set_rules('data', 'Data', 'required', array('required' => 'Preencha o campo data'));
        $this->form_validation->set_rules('descricao', 'Descrição', 'required', array('required' => 'È obrigatótio fazer o relato do acidente no campo descrição'));
            $this->form_validation->set_rules('aluno_id', 'Aluno', 'required', array('required' => 'Escolha um aluno'));
            $this->form_validation->set_rules('modalidade_id', 'Modalidade', 'required', array('required' => 'Escolha uma modalidade'));
                
        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $this->raaM->inserir($dados);
            redirect('listar_registro_acidente');
        }


        $dados['alunos'] = $this->alunoM->selecionar();
        $dados['modalidades'] = $this->modalidadeM->selecionar();
        $dados['lesoes'] = $this->lesaoM->selecionar();
        $this->load->view('registra_acidente_aluno', $dados);
        $this->load->view('templates/footer');
    }
    
   /**
     * Recebe o id solicitado através do botão visualizar na lista de acidentes
     * @param type $id 
     */
    public function visualizar($id) {

        $dados['registro_acidente'] = $this->raaM->visualizar($id);
        $dados['alunos'] = $this->alunoM->selecionar();
        $dados['modalidades'] = $this->modalidadeM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('visualizar_registro_acidente_aluno', $dados);
        $this->load->view('templates/footer');
    }
    
    /**
     * Lista os dados existentes na tabela historico aluno.
     * 
     */
    public function listar() {

        $dados['registro_acidentes'] = $this->raaM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_registro_acidente_aluno', $dados);
        $this->load->view('templates/footer');
    }
    
    
}

