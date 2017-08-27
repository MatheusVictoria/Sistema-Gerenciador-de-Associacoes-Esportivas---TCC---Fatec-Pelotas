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
         
         $this->form_validation->set_rules('nome', 'Nome', 'required|trim', array('required'=> 'Preencha o campo nome'));
         $this->form_validation->set_rules('rg', 'RG', 'required', array('required'=> 'Preencha o campo rg'));
         $this->form_validation->set_rules('cpf', 'CPF', 'required', array('required'=> 'Preencha o campo cpf'));
         $this->form_validation->set_rules('email', 'E-mail', 'required|trim', array('required'=> 'Preencha o campo e-mail'));
         $this->form_validation->set_rules('cep', 'Cep', 'required', array('required'=> 'Preencha o campo cep'));
         $this->form_validation->set_rules('rua', 'Rua', 'required|trim', array('required'=> 'Preencha o campo rua'));
         $this->form_validation->set_rules('bairro', 'Bairro', 'required|trim', array('required'=> 'Preencha o campo bairro'));
        
        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            $uploadFoto = $this->uploadImagem('foto');

            if ($uploadFoto['error']) {

                $dados['error'] = $uploadFoto['message'];
            } else {

                $this->professorM->inserir($dados);
                redirect('listar_professor');
            }
        }
        
        $dados ['graduacao']= $this->graduacaoM->selecionar();
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
    
    
    public function editar($id){
        
        $dados ['professor'] = $this->professorM->encontrar($id);
        $dados ['graduacao'] = $this->graduacaoM->selecionar();        
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_alt_professor', $dados);
        $this->load->view('templates/footer');
        
    }
    
    public function grava_alteracao(){
        
        $dados = $this->input->post();
        $this->professorM->atualiza($dados);
        
        redirect('listar_professor');
        
        
    }
    
    public function uploadImagem($nomeArquivo) {

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

            if (!$this->upload->do_upload($nomeArquivo)) {
                $dados['error'] = false;
                $dados['message'] = $this->upload->diaplay_errors();
            } else {

                $dados['error'] = false;
                $dados['foto'] = $this->upload->data();
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
