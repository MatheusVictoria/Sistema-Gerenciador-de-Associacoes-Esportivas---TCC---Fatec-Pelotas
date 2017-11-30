<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('captcha');
    }

    public function verifica_sessao() {
        if (!$this->session->logado) {
            redirect('home/logar');
        }
    }

    public function index() {

        $this->verifica_sessao();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('home');
        $this->load->view('templates/footer');
    }

    public function logar() {
        $dados ['erro'] = null;

        // carrega a model com os métodos da tabela usuarios
        $this->load->model('Usuario_Model', 'usuariosM');
        // obtém os dados do form
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');

        $verifica = $this->usuariosM->verificaUsuario($email, $senha);

        $this->form_validation->set_rules('email', 'E-mail', 'trim|required', array('required' => 'Preencha o campo e-mail'));
        $this->form_validation->set_rules('senha', 'Senha', 'trim|required', array('required' => 'Preencha o campo senha'));
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_checa_captcha');

        if ($this->form_validation->run() === FALSE) {
            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {
            if (isset($verifica)) {
                $sessao['nome'] = $verifica->usuario;
                $sessao['email'] = $verifica->email;
                $sessao['id'] = $verifica->id;
                $sessao['logado'] = true;
                $this->session->set_userdata($sessao);
            }
            redirect();
        }

        $dados['captcha_image'] = $this->geraCaptcha();
        $this->load->view('login', $dados);
    }

    public function sair() {
        $this->session->sess_destroy();
        redirect();
    }

    public function geraCaptcha($refresh = FALSE) {

        $vals = array(
            'img_path' => './captcha/',
            'img_url' => base_url('captcha'),
            'img_width' => '170',
            'img_height' => '50',
            'word_length'   => 6,
            'font_size'     => 25,
            'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'colors' => array(
                'background' => array(255, 255, 255),
                'border' => array(0, 0, 0),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )

        );

        $cap = create_captcha($vals);

        $this->session->set_userdata('user_captcha_value', $cap['word']);

        if($refresh){
            echo $cap['image'];
        }else {
            return $cap['image'];
        }
    }

    public function checa_captcha($captcha) {
        if ($captcha === $this->session->userdata('user_captcha_value')) {
            return TRUE;
        } else {
            $this->form_validation->set_message('checa_captcha', 'O texto informado está incorreto');
            return FALSE;
        }
    }

}
