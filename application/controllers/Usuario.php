<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/logar');
        }

        $this->load->model('Usuario_Model', 'usuarioM');
        $this->load->model('Tipo_Model', 'tipoM');
    }

    /**
     * O método index monta e chama a estrutura da pagina de cadastro de usuário;
     * a variavel $dados é um arrei de tipos que recebe os dados da tabela tipos através do método selecionar,
     * para preencher o campo combobox do formulario.
     * recebe através do input->post os dados do formulário, verificando através da library validation e  insere os 
     * dados na tabela usuario pelo método inserir da Model Usuario;
     */
    public function index() {

        /**
         * @dados['erro'], inicializando nula, recebe as mensagens de erro de validação
         *  
         */
        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();

        $this->form_validation->set_rules('usuario', 'Usuário', 'trim|required|min_length[4]', array('required' => 'Preencha o campo nome do usuário', 'min_length' => 'Nome do usuário não pode menor que 4 caraquiteres'));
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required', array('required' => 'Preencha o campo e-mail do usuário'));
        $this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[4]', array('required' => 'Preencha o campo senha do usuário', 'min_length' => 'Senha não pode ser menor que 4 caraquiteres'));
        $this->form_validation->set_rules('tipo_id', 'Tipo de Usuário', 'required', array('required' => 'Escolha um tipo de usuário'));
        $this->form_validation->set_rules('ativo', 'Ativo', 'required');

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $this->usuarioM->inserir($dados);
            redirect('listar_usuario');
        }


        $dados['tipos'] = $this->tipoM->selecionar();
        $this->load->view('form_usuario', $dados);
        $this->load->view('templates/footer');
    }

    public function editar($id) {

        $dados['usuario'] = $this->usuarioM->encontrar($id);
        $dados['tipos'] = $this->tipoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_usuario', $dados);
        $this->load->view('templates/footer');
    }

    
    /**
     * Lista os usuario existentes na tabela "usuario",
     * atraves do método selecionar da model usuario_model
     */
    public function listar() {

        $dados['usuario'] = $this->usuarioM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_usuario', $dados);
        $this->load->view('templates/footer');
    }

    public function grava_alteracao() {

        $dados = $this->input->post();
        $this->usuarioM->atualiza($dados);

        redirect(base_url('listar_usuario'));
    }

}
