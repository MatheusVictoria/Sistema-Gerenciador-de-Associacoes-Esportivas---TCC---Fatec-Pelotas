<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->logado) {
            redirect('home/logar');
        }

        $this->load->model('Aluno_Model', 'alunoM');
        $this->load->model('Graduacao_Model', 'graduacaoM');
        $this->load->model('Mensalidade_Model', 'mensalidadeM');
        $this->load->model('Centro_de_Treinamento_Model', 'ctM');
    }

    public function index() {
        
    }

    public function periodo_pagamento() {

        $dados ['erro'] = null;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');

        $dados = $this->input->post();

        $this->form_validation->set_rules('data_inicio', 'Data de inicio ', 'trim|required', array('required' => 'Preencha o campo data de inicio '));
        $this->form_validation->set_rules('data_final', 'Data final', 'trim|required', array('required' => 'Preencha o campo data final'));

        if ($this->form_validation->run() === FALSE) {

            $dados['erro'] = validation_errors('<li>', '</li>');
        } else {

            $this->mensalidadeM->relatorio_pagamento_periodo($dados);
            redirect('relatorio_pagamento');
        }

        $this->load->view('form_relatorio_pagamento', $dados);
        $this->load->view('templates/footer');
    }

    public function gera_relatorio_pagamento() {

        $dados = $this->mensalidadeM->relatorio_pagamento_periodo();

        $titulo = "Relatório de Pagamento por Periodo";

        $html = $this->load->view('relatorio_pagamento', $dados, TRUE);

        $config = [
            'format' => 'A4-L'
        ];
        $mpdf = new \Mpdf\Mpdf($config);

        $mpdf->WriteHTML($html);
        $mpdf->Output('Relatorio de Pagamento.pdf', 'D');
    }
    
    public function periodo_pagamento_ct() {

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
            redirect('relatorio_pagamento_ct');
        }
        $dados['ct'] = $this->load->ctM->selecionar();
        $this->load->view('form_relatorio_pagamento_ct', $dados);
        $this->load->view('templates/footer');
    }

    public function gera_relatorio_pagamento_ct() {

        $dados = $this->mensalidadeM->relatorio_pagamento_ct();

        $titulo = "Relatório de Pagamento por Centro de Treinamento";

        $html = $this->load->view('relatorio_pagamento_ct', $dados, TRUE);

        $config = [
            'format' => 'A4-L'
        ];
        $mpdf = new \Mpdf\Mpdf($config);

        $mpdf->WriteHTML($html);
        $mpdf->Output('Relatorio de Pagamento.pdf', 'D');
    }

}
