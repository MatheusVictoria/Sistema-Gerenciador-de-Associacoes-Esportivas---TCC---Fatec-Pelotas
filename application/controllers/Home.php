<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function verifica_sessao() {
        if (!$this->session->logado) {
            redirect('home/login');
        }
    }

    public function index() {
        
        $this->verifica_sessao();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
    
    
    public function login() {
        $this->load->view('login');
    }

    public function logar() {
        // habilita a exibição de um conjunto de informações da execução deste método
        //$this->output->enable_profiler(TRUE);
        
        // carrega a model com os métodos da tabela usuarios
        $this->load->model('Usuario_Model', 'usuariosM');
        
        // obtém os dados do form
        $nome = $this->input->post('nome');
        $senha = $this->input->post('senha');
        
        $verifica = $this->usuariosM->verificaUsuario($nome, $senha);
        
        if (isset($verifica)) {
            $sessao['nome'] = $verifica->usuario;
            $sessao['id'] = $verifica->id;
            $sessao['logado'] = true;
            $this->session->set_userdata($sessao);
        }
        redirect();
    }
    
    public function sair() {
        $this->session->sess_destroy();
        redirect();
    }
    

}
