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
        $this->load->model('Turma_Model', 'turmaM');
    }

    public function index() {

        $dados['aluno'] = $this->alunoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lanca_pagamento', $dados);
        $this->load->view('templates/footer');
    }

    public function mensalidade() {

        $dados['turmas'] = $this->turmaM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('gerar_mensalidades', $dados);
        $this->load->view('templates/footer');
    }

    public function gerar_mensalidade() {

        /**
         * @dados['erro'], inicializando nula, recebe as mensagens de erro de validação
         *  
         */
        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();

        $this->form_validation->set_rules('aluno_id', 'Aluno', 'trim|required', array('required' => 'selecione o aluno(a) '));
        $this->form_validation->set_rules('turma_id', 'Horario', 'trim|required', array('required' => 'selecione a turma'));
        $this->form_validation->set_rules('valor', 'Valor da Mnesalidade', 'trim|required', array('required' => 'Preencha o valor '));
        $this->form_validation->set_rules('data_vencimento', 'Data', 'trim|required', array('required' => 'Preencha a data'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $data_vencimento = $dados['data_vencimento'];
            $parcelas = $dados['parcelas'];
            $aluno_id = $dados['aluno_id'];
            $turma_id = $dados['turma_id'];
            $valor = $dados['valor'];

            $this->mensalidadeM->gerar_mensalidade($data_vencimento, $parcelas, $aluno_id, $turma_id, $valor);
            redirect();
        }

        $dados['lista'] = $this->mensalidadeM->pesquisa_alunos_turma();
        $this->load->view('form_mensalidade', $dados);
        $this->load->view('templates/footer');
    }

}
