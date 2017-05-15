<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller{
    
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_aluno');
        $this->load->view('templates/footer');
    }
    
    
}

