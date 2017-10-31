<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_Aula extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/logar');
        }

        $this->load->model('Registro_Aula_Model', 'raM');
        $this->load->model('Turma_Model', 'turmaM');
    }

    public function index() {
        
    }

    public function registra_aula() {


        /**
         * @dados['erro'], inicializando nula, recebe as mensagens de erro de validação
         *  
         */
        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();

        $this->form_validation->set_rules('data', 'Data', 'required', array('required' => 'Preencha o campo data'));
        $this->form_validation->set_rules('descricao', 'Descrição', 'required', array('required' => 'È obrigatótio fazer o relato da aula no campo descrição'));
        $this->form_validation->set_rules('turma_id', 'Turma', 'required', array('required' => 'Escolha uma turma'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $this->raM->inserir($dados);
            redirect('listar_registros_aulas');
        }

        $dados['turmas'] = $this->turmaM->selecionar();
        $this->load->view('registra_aula', $dados);
        $this->load->view('templates/footer');
    }

    /**
     * Lista os registros de aula existentes na tabela "historico_aula",
     * atraves do método selecionar da model registro_aula_model.
     */
    public function listar() {

        $dados['resgistro_aula'] = $this->raM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_registro_aula', $dados);
        $this->load->view('templates/footer');
    }

    /**
     * Recebe o id solicitado através do botão visualizar na lista de turmas
     * @param type $id 
     */
    public function visualizar($id) {

        $dados['registro_aula'] = $this->raM->visualizar($id);
        $dados['turmas'] = $this->turmaM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('visualizar_registro_aula', $dados);
        $this->load->view('templates/footer');
    }

}
