<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/logar');
        }

        $this->load->model('Aluno_Model', 'alunoM');
        $this->load->model('Graduacao_Model', 'graduacaoM');
    }

    public function index() {
        $dados ['error'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();
  

        $this->form_validation->set_rules('nome', 'Nome', 'trim|required', array('required' => 'Preencha o campo nome', 'min_length' => 'O nome não pode conter menos de quatro letras'));
        $this->form_validation->set_rules('rg', 'RG', 'trim|required', array('required' => 'Preencha o campo RG'));
        $this->form_validation->set_rules('cpf', 'Cpf', 'trim|required', array('required' => 'Preencha o campo CPF'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $uploadFoto = $this->uploadImagem();

            if ($uploadFoto['error']) {

                $dados['error'] = $uploadFoto['message'];
            } else {
                $dados['foto'] = $uploadFoto['foto'];
                $this->alunoM->inserir($dados);
                redirect('listar_aluno');
            }
        }

        $dados ['graduacao'] = $this->graduacaoM->selecionar();
        $this->load->view('form_aluno', $dados);
        $this->load->view('templates/footer');
    }

    public function listar() {

        $dados['aluno'] = $this->alunoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('lista_aluno', $dados);
        $this->load->view('templates/footer');
    }

    public function editar($id) {

        $dados ['aluno'] = $this->alunoM->encontrar($id);
        $dados ['graduacao'] = $this->graduacaoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_aluno', $dados);
        $this->load->view('templates/footer');
    }

    public function grava_alteracao() {

         $idFoto = $this->input->post('id');
        $professor = $this->alunoM->encontrar($idFoto);
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
        $alt = $this->alunoM->atualiza($dados);
        
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
        redirect('listar_aluno');
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
        $config['max_width'] = 1624;
        $config['max_height'] = 768;
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

        $dados['aluno'] = $this->alunoM->visualizar($id);
        $dados['graduacao'] = $this->graduacaoM->selecionar();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('visualizar_aluno', $dados);
        $this->load->view('templates/footer');
    }

}
