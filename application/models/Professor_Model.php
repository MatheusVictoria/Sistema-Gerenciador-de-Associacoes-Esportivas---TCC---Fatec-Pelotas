<?php

class Professor_Model extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->model('Cidade_Model', 'cidadeM');
    }

    /**
     * Método inserir utiliza uma transação para salvar os dados em duas tabelas,
     * endereço e professor.
     * @param $dados recebe os valores do formulário e divide nas duas tabelas para inserção
     * 
     */
    public function inserir($dados) {

        $this->db->trans_start();
        $cidade_id = $this->cidadeM->busca_cidades($dados['cidade']);
        $this->db->query("INSERT INTO endereco(rua, numero,complemento, cep, bairro, cidade_id)
          VALUES('{$dados['rua']}', '{$dados['numero']}', '{$dados['complemento']}', '{$dados['cep']}', '{$dados['bairro']}', $cidade_id)");
        $this->db->query("INSERT INTO professor(nome, rg, cpf, telefone, email, sexo, graduacao_id, ativo, endereco_id)
          values('{$dados['nome']}', {$dados['rg']}, {$dados['cpf']}, '{$dados['telefone']}','{$dados['email']}', '{$dados['sexo']}', {$dados['graduacao_id']}, '{$dados['ativo']}', (select LAST_INSERT_ID()));");
        $this->db->trans_complete();
    }

    /**
     * Busca os valores existentes na tabela professor
     */
    public function selecionar() {

        $sql = "SELECT prof.id, prof.nome, prof.rg, prof.cpf, prof.telefone, prof.email, prof.sexo, 
            prof.ativo, g.cor as graduacao_id, en.rua as endereco_id, en.numero, 
            en.complemento, en.cep, en.bairro, c.nome as cidade_id, 
            est.nome as estado_id, p.nome as pais_id FROM professor prof 
            LEFT JOIN endereco en ON prof.endereco_id = en.id
            LEFT JOIN cidade c ON en.cidade_id = c.id
            LEFT JOIN estado est ON c.estado_id = est.id
            LEFT JOIN pais p ON est.pais_id = p.id
            LEFT JOIN graduacao g ON prof.graduacao_id = g.id ORDER BY p.id";

        $query = $this->db->query($sql);

        return $query->result();
    }

    /**
     * 
     * Atualiza os dados na tabela professor através do id
     * alterando somente os dados que sejam deste id
     * @param $dados recebe os valores do formulário
     * 
     */
    public function atualiza($dados) {

        $this->db->trans_start();
        $cidade_id = $this->cidadeM->busca_cidades($dados['cidade']);
        $endereco_id = $this->busca_id_endereco($dados['id_endereco']);
        $this->db->query("UPDATE endereco SET rua = '{$dados['rua']}', numero = {$dados['numero']} ,complemento = '{$dados['complemento']}', cep = '{$dados['cep']}', bairro = '{$dados['bairro']}', cidade_id = $cidade_id WHERE id = $endereco_id");
        $this->db->query("UPDATE professor SET nome = '{$dados['nome']}', rg = {$dados['rg']}, cpf = {$dados['cpf']}, telefone = '{$dados['telefone']}', email = '{$dados['email']}', sexo = '{$dados['sexo']}', graduacao_id = {$dados['graduacao_id']}, ativo = '{$dados['ativo']}' WHERE  id = {$dados['id']}");
        $this->db->trans_complete();
    }

    /**
     * 
     * Faz uma busca através do id solicitado
     * @param $id recebe o id solicitado na pagina lista_professor
     * 
     */
    public function encontrar($id) {

        $sql = "SELECT prof.id, prof.nome, prof.rg, prof.cpf, prof.telefone, prof.email, prof.sexo, 
            prof.ativo, prof.graduacao_id, en.id as id_endereco, en.rua as endereco_id, en.numero, 
            en.complemento, en.cep, en.bairro, c.nome as cidade_id, 
            est.nome as estado_id, p.nome as pais_id FROM professor prof 
            LEFT JOIN endereco en ON prof.endereco_id = en.id
            LEFT JOIN cidade c ON en.cidade_id = c.id
            LEFT JOIN estado est ON c.estado_id = est.id
            LEFT JOIN pais p ON est.pais_id = p.id
            LEFT JOIN graduacao g ON prof.graduacao_id = g.id WHERE prof.id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

    /**
     *
     * Busca do id do endereço e compara com o id que esta vindo da view from_alt_centro_de_treinamento
     * @param $id recebe o id da view form_alt_centro_de_treinamento
     * @return type retorna os dados encontrados no banco referente ao id solicitado
     */
    public function busca_id_endereco($id) {

        $query = $this->db->query("select id as endereco_id from endereco where id = '{$id}'");
        $linha = $query->row();
        return $linha->endereco_id;
    }

    /**
     * Faz uma busca através do id solicitado 
     * @param type $id recebe o id solicitado na pagina lista_professor
     * @return type retorna os dados encontrados no banco referente ao id solicitado
     */
    public function visualizar($id) {

        $sql = "SELECT prof.id, prof.nome, prof.rg, prof.cpf, prof.telefone, prof.email, prof.sexo, 
            prof.ativo, g.cor as graduacao_id, en.id as id_endereco, en.rua as endereco_id, en.numero, 
            en.complemento, en.cep, en.bairro, c.nome as cidade_id, 
            est.nome as estado_id, p.nome as pais_id FROM professor prof 
            LEFT JOIN endereco en ON prof.endereco_id = en.id
            LEFT JOIN cidade c ON en.cidade_id = c.id
            LEFT JOIN estado est ON c.estado_id = est.id
            LEFT JOIN pais p ON est.pais_id = p.id
            LEFT JOIN graduacao g ON prof.graduacao_id = g.id WHERE prof.id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

}
