<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/login');
        }

        $this->load->model('Aluno_Model', 'alunoM');
        $this->load->model('Graduacao_Model', 'graduacaoM');
    }

    public function index() {
        $dados ['error'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        
        $dados = $this->input->post();

        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[4]', array('required' => 'Preencha o campo nome', 'min_length' => 'O nome não pode conter menos de quatro letras'));
        $this->form_validation->set_rules('rg', 'RG', 'trim|required', array('required' => 'Preencha o campo RG'));
        $this->form_validation->set_rules('rg', 'RG', 'trim|required' , array('required' => 'Preencha o campo CPF'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<br/><li>', '</li>');
        } else {
            $uploadFoto = $this->uploadImagem('foto');

            if ($uploadFoto['error']) {

                $dados['error'] = $uploadFoto['message'];
            } else {

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

        $dados = $this->input->post();

        $this->alunoM->atualiza($dados);

        redirect('listar_aluno');
    }

    public function uploadImagem($nomeArquivo) {

        // carrega a library upload
        $this->load->library('upload');
        // @$path recebe o caminho onde será armazenada a imagem
        $path = "./fotos";
        //define as configurações para armazenar a foto
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000;
        $config['max_width'] = 1624;
        $config['max_height'] = 768;
        $config['encrypt_name'] = true;

        if (!is_dir($path)) {
            mkdir($path, 0777, $recursive = true);

            $this->upload->initialize($config);

            if (!$this->upload->do_upload($nomeArquivo)) {
                $dados['error'] = false;
                $dados['message'] = $this->upload->diaplay_errors();
            } else {

                $dados['error'] = false;
                $dados['foto'] = $this->upload->data();
            }

            return $dados;
        }
    }

}
