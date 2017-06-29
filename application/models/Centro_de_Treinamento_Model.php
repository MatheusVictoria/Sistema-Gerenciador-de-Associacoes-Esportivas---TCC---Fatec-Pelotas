<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Centro_de_Treinamento_Model extends CI_Model {

    /**
     * Construtor carrega Cidade_Model
     * parent::__construct carrega o construtor da classe pai CI_Model
     */
    public function __construct() {
        parent::__construct();

        $this->load->model('Cidade_Model', 'cidadeM');
        $this->load->model('Estado_Model', 'estadoM');
    }

    /**
     * Método inserir utiliza uma transação para salvar os dados em duas tabelas,
     * endereço e centro_treinamento.
     * @param $dados recebe os valores do formulário e divide nas duas tabelas para inserção
     * 
     */
    function inserir($dados) {

        $this->db->trans_start();
        $cidade_id = $this->cidadeM->busca_cidades($dados['cidade']);
        $this->db->query("INSERT INTO endereco(rua, numero,complemento, cep, bairro, cidade_id)
          VALUES('{$dados['rua']}', {$dados['numero']}, '{$dados['complemento']}', '{$dados['cep']}', '{$dados['bairro']}', $cidade_id)");
        $this->db->query("INSERT INTO centro_treinamento(nome, endereco_id)
          values('{$dados['nome']}', (select LAST_INSERT_ID()));");
        $this->db->trans_complete();
    }

    /**
     * Busca os valores existentes na tabela centro_treinamento
     */
    function selecionar() {

        $sql_selecionar = "SELECT ct.id, ct.nome, en.rua as endereco_id, en.numero, "
                . "en.complemento, en.cep, en.bairro, c.nome as cidade_id, "
                . "est.nome as estado_id, p.nome as pais_id FROM `centro_treinamento` ct "
                . "LEFT JOIN endereco en ON ct.endereco_id = en.id"
                . " LEFT JOIN cidade c ON en.cidade_id = c.id"
                . " LEFT JOIN estado est ON c.estado_id = est.id"
                . " LEFT JOIN pais p ON est.pais_id = p.id ORDER BY ct.id ";

        $query = $this->db->query($sql_selecionar);
        return $query->result();
    }
    

    /**
     * 
     * Atualiza os dados na tabela centro_treinamento através do id
     * alterando somente os dados que sejam deste id
     * @param $dados recebe os valores do formulário
     * 
     */
    function atualiza($dados) {

        $this->db->trans_start();
        $cidade_id = $this->cidadeM->busca_cidades($dados['cidade']);
        $endereco_id = $this->busca_id_endereco($dados['id_endereco']);
        $this->db->query("UPDATE endereco SET rua = '{$dados['rua']}', numero = {$dados['numero']} ,complemento = '{$dados['complemento']}', cep = '{$dados['cep']}', bairro = '{$dados['bairro']}', cidade_id = $cidade_id WHERE id = $endereco_id");
        $this->db->query("UPDATE centro_treinamento SET nome = '{$dados['nome']}' WHERE id = {$dados['id']}");
        $this->db->trans_complete();
    }
    
    /**
     * 
     * Faz uma busca através do id solicitado
     * @param $id recebe o id solicitado na pagina lista_centro_de _treinamento
     * 
     */
    function encontrar($id) {

        $sql_encontrar = "SELECT ct.id, ct.nome, en.id as id_endereco, en.rua as endereco_id, en.numero, "
                . "en.complemento, en.cep, en.bairro, c.nome as cidade_id, "
                . "est.nome as estado_id, p.nome as pais_id FROM `centro_treinamento` ct "
                . "LEFT JOIN endereco en ON ct.endereco_id = en.id"
                . " LEFT JOIN cidade c ON en.cidade_id = c.id"
                . " LEFT JOIN estado est ON c.estado_id = est.id"
                . " LEFT JOIN pais p ON est.pais_id = p.id WHERE ct.id = $id ";

        $query = $this->db->query($sql_encontrar);
        return $query->row();
    }


    
     public function busca_id_endereco($id){
        
        $query = $this->db->query("select id as endereco_id from endereco where id = '{$id}'");
        $linha = $query->row();
        return $linha->endereco_id;
        
        
    }
}
