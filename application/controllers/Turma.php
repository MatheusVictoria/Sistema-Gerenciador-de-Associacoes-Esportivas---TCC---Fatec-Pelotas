<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Turma extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/logar');
        }

        $this->load->model('Turma_Model', 'turmaM');
        $this->load->model('Centro_de_Treinamento_Model', 'ctM');
        $this->load->model('Professor_Model', 'professorM');
        $this->load->model('Modalidade_Model', 'modalidadeM');
        $this->load->model('Aluno_Model', 'alunoM');
    }

    public function index() {

        /**
         * @dados['erro'], inicializando nula, recebe as mensagens de erro de validação
         *  
         */
        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();

        $this->form_validation->set_rules('horario', 'Horário', 'trim|required', array('required' => 'Preencha o campo horário'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $this->turmaM->inserir($dados);
            redirect('listar_turma');
        }

        $dados['ct'] = $this->ctM->selecionar();
        $dados['professor'] = $this->professorM->selecionar();
        $dados['modalidade'] = $this->modalidadeM->selecionar();
        $this->load->view('form_turma', $dados);
        $this->load->view('templates/footer');
    }

    public function listar() {

        $dados ['centro_treinamento'] = $this->ctM->selecionar();
        $dados['turma'] = $this->turmaM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_turma', $dados);
        $this->load->view('templates/footer');
    }

    public function editar($id) {


        $dados['turma'] = $this->turmaM->encontrar($id);
        $dados['ct'] = $this->ctM->selecionar();
        $dados['modalidade'] = $this->modalidadeM->selecionar();
        $dados['professor'] = $this->professorM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_turma', $dados);
        $this->load->view('templates/footer');
    }

    public function grava_alteracao() {

        $dados = $this->input->post();

        $this->turmaM->atualiza($dados);

        redirect('listar_turma');
    }

    public function vincula_aluno() {


        /**
         * @dados['erro'], inicializando nula, recebe as mensagens de erro de validação
         *  
         */
        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();

        $this->form_validation->set_rules('turma_id', 'Turma', 'required', array('required' => 'Selecione uma turma'));
        $this->form_validation->set_rules('aluno_id', 'Aluno', 'required', array('required' => 'Selecione um aluno(a)'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $this->turmaM->vincular_aluno($dados);
            redirect('form_vincula_aluno_turma');
        }


        $dados['alunos'] = $this->alunoM->selecionar();
        $dados['turmas'] = $this->turmaM->selecionar();
        $this->load->view('form_vincula_aluno_turma', $dados);
        $this->load->view('templates/footer');
    }

    public function escolhe_turma() {

        $dados['turmas'] = $this->turmaM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('registra_presenca', $dados);
        $this->load->view('templates/footer');
    }

    public function registra_presenca() {
        /**
         * @dados['erro'], inicializando nula, recebe as mensagens de erro de validação
         *  
         */
        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();

        $this->form_validation->set_rules('alunos[]', 'Presença', 'trim|required', array('required' => 'selecione se o aluno está presente ou ausente'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $this->turmaM->registrar_presenca($dados);
            redirect();
        }

        $dados['lista'] = $this->turmaM->pesquisa_alunos();
        $this->load->view('form_registra_presenca', $dados);
        $this->load->view('templates/footer');
    }
    
     public function pesquisar() {

                  
        $dados['turma'] = $this->turmaM->pesquisa_graduacao();
        $dados['centro_treinamento'] = $this->ctM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_turma', $dados);
        $this->load->view('templates/footer');
        
    }
    
     public function pesquisa_presenca() {

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_presenca_data');
        $this->load->view('templates/footer');
        
    }
    
     public function lista_presenca() {

                  
        $dados['presenca'] = $this->turmaM->lista_presenca();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_presenca', $dados);
        $this->load->view('templates/footer');
        
    }

}
