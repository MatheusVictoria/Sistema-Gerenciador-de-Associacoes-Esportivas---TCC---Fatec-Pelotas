<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Graficos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/logar');
        }

        $this->load->model('Mensalidade_Model', 'mensalidadeM');
        $this->load->model('Centro_de_Treinamento_Model', 'ctM');
    }

    public function grafico_pagamento_men() {
        

        // obtém os registros a serem exibidos no gráfico
        $dados['mensalidades'] = $this->mensalidadeM->grafico_pagamento_men();

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('grafico_pagamento_men', $dados);
        $this->load->view('templates/footer');
    }
    
    
    public function gera_grafico_pagamento_ct(){
        
        
        
        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();

        $this->form_validation->set_rules('data_inicio', 'Data de inicio ', 'trim|required', array('required' => 'Preencha o campo data de inicio '));
        $this->form_validation->set_rules('data_final', 'Data final', 'trim|required', array('required' => 'Preencha o campo data final'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {

            $this->mensalidadeM->relatorio_pagamento_ct($dados);
            redirect('grafico_pagamento_ct');
        }
        $dados['ct'] = $this->load->ctM->selecionar();
        $this->load->view('form_grafico_pagamento_ct', $dados);
        $this->load->view('templates/footer');
        
        
    }

        public function grafico_pagamento_ct() {
        
        // obtém os registros a serem exibidos no gráfico
        $dados['mensalidades'] = $this->mensalidadeM->grafico_pagamento_ct();

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('grafico_pagamento_ct', $dados);
        $this->load->view('templates/footer');
    }
    

}
