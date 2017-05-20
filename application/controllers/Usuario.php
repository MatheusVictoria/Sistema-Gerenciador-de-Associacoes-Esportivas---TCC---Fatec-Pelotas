<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //  if (!$this->session->logado) {
        //    redirect("home/login");
        //}
        $this->load->model('Usuario_Model', 'usuarioM');
        $this->load->model('Tipo_Model', 'tipoM');
    }

    public function index() {

       
        $this->load->view('templates/header');
        $this->load->view('templates/menu'); 
        $dados['tipos'] = $this->tipoM->selecionar();
        $this->load->view('form_usuario', $dados);
        $this->load->view('templates/footer');
    }

    public function cadastrar() {

        $dados = $this->input->post();
        
        $this->usuarioM->inserir($dados);
        
        redirect(base_url());
    }

}
