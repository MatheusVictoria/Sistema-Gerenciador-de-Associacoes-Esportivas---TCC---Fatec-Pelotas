<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo extends CI_Controller {

    public function __construct() {
        parent::__construct();
         if (!$this->session->logado) {
            redirect('home/logar');
        }


        $this->load->model('Tipo_Model', 'tipoM');
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

        $this->form_validation->set_rules('tipo', 'Tipo de Usuário', 'trim|required|min_length[4]', array('required' => 'Preencha o campo tipo de usuário', 'min_length' => 'Tipo de usuário não pode ser menor que 4 caraquiteres'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $this->tipoM->inserir($dados);
            redirect('listar_tipo');
        }

        $this->load->view('form_tipo_usuario', $dados);
        $this->load->view('templates/footer');
    }

    public function editar($id) {

        $dados['tipo'] = $this->tipoM->encontrar($id);
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_tipo_usuario', $dados);
        $this->load->view('templates/footer');
    }

    public function listar() {

        $dados['tipo'] = $this->tipoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_tipo_usuario', $dados);
        $this->load->view('templates/footer');
    }

    public function grava_alteracao() {

        $dados = $this->input->post();
        $this->tipoM->atualiza($dados);

        redirect(base_url('listar_tipo'));
    }

}
