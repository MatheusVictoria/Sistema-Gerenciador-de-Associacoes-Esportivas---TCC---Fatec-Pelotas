<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect("home/login");
        }
        $this->load->model('Professor_Model', 'professorM');
        $this->load->model('Graduacao_Model', 'graduacaoM');
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

        $this->form_validation->set_rules('nome', 'Nome', 'required|trim', array('required' => 'Preencha o campo nome'));
        $this->form_validation->set_rules('rg', 'RG', 'required', array('required' => 'Preencha o campo rg'));
        $this->form_validation->set_rules('cpf', 'CPF', 'required', array('required' => 'Preencha o campo cpf'));
        $this->form_validation->set_rules('email', 'E-mail', 'required|trim', array('required' => 'Preencha o campo e-mail'));
        $this->form_validation->set_rules('cep', 'Cep', 'required', array('required' => 'Preencha o campo cep'));
        $this->form_validation->set_rules('rua', 'Rua', 'required|trim', array('required' => 'Preencha o campo rua'));
        $this->form_validation->set_rules('bairro', 'Bairro', 'required|trim', array('required' => 'Preencha o campo bairro'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $uploadFoto = $this->uploadImagem('foto');

            if ($uploadFoto['error']) {

                $dados['error'] = $uploadFoto['message'];
            } else {
                $dados['foto'] = $uploadFoto['foto'];
                $this->professorM->inserir($dados);
                redirect('listar_professor');
            }
        }

        $dados ['graduacao'] = $this->graduacaoM->selecionar();
        $this->load->view('form_professor', $dados);
        $this->load->view('templates/footer');
    }

    public function listar() {

        $dados['professor_edita'] = $this->professorM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_professor', $dados);
        $this->load->view('templates/footer');
    }

    public function editar($id) {

        $dados ['professor'] = $this->professorM->encontrar($id);
        $dados ['graduacao'] = $this->graduacaoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_professor', $dados);
        $this->load->view('templates/footer');
    }

    public function grava_alteracao() {

        $idFoto = $this->input->post('id');
        $professor = $this->professorM->encontrar($idFoto);
        //recebe os dados do form
        $dados = $this->input->post();
        
//        $mensa = "";
        if (isset($_FILES['foto'])) {
           $uploadFoto = $this->uploadImagem('foto');

            if ($uploadFoto['error']) {

                $dados['error'] = $uploadFoto['message'];
                $tipo = "0";
                $mensa = "Erro... Arquivo Inválido " . $this->upload->display_errors();
            } else {
                $dados['foto'] = $uploadFoto['foto'];
            }
        }

        //altera o registro na tabela de produtos
        $alt = $this->professorM->atualiza($dados);
        
         // verifica se alterou
        if ($alt) {
            $tipo = "1";
            $mensa .= "Ok! Produto Corretamente Alterado";
        } else {
            $tipo = "0";
            $mensa .= "Erro... Produto não foi alterado";
        }

        // define a variaavel de sessao com a mensagem exibida
        $this->session->set_flashdata('tipo', $tipo);
        $this->session->set_flashdata('mensa', $mensa);

        //recarrega listagem de veículos
        redirect('listar_professor');
    }

    public function uploadImagem() {

        // carrega a library upload
        $this->load->library('upload');
        // @$path recebe o caminho onde será armazenada a imagem
        $path = "fotos";
        //define as configurações para armazenar a foto
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000;
        $config['max_width'] = 2000;
        $config['max_height'] = 2000;
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto')) {
            $dados['error'] = false;
            $dados['message'] = $this->upload->display_errors();
        } else {

            $dados['error'] = false;
            $dados['foto'] = $this->upload->data()['file_name'];
        }

        return $dados;
    }

    /**
     * Recebe o id solicitado através do botão visualizar na lista de professores
     * @param type $id 
     */
    public function visualizar($id) {

        $dados['professor'] = $this->professorM->visualizar($id);
        $dados['graduacao'] = $this->graduacaoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('visualizar_professor', $dados);
        $this->load->view('templates/footer');
    }

}
