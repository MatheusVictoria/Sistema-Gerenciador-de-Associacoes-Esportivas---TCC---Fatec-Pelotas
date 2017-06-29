<?php

class Aluno_Model extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->model('Cidade_Model', 'cidadeM');
    }

    /**
     * Método inserir utiliza uma transação para salvar os dados em duas tabelas,
     * endereço e aluno.
     * @param $dados recebe os valores do formulário e divide nas duas tabelas para inserção
     * 
     */
    public function inserir($dados) {

        $this->db->trans_start();
        $cidade_id = $this->cidadeM->busca_cidades($dados['cidade']);
        $this->db->query("INSERT INTO endereco(rua, numero,complemento, cep, bairro, cidade_id)
          VALUES('{$dados['rua']}', '{$dados['numero']}', '{$dados['complemento']}', '{$dados['cep']}', '{$dados['bairro']}', $cidade_id)");
        $this->db->query("INSERT INTO aluno(nome, rg, cpf, telefone, email, sexo, graduacao_id, ativo, endereco_id)
          values('{$dados['nome']}', {$dados['rg']}, {$dados['cpf']}, '{$dados['telefone']}','{$dados['email']}', '{$dados['sexo']}', {$dados['graduacao_id']}, '{$dados['ativo']}', (select LAST_INSERT_ID()));");
        $this->db->trans_complete();
    }

    /**
     * Busca os valores existentes na tabela aluno
     */
    public function selecionar() {

        $sql = "SELECT a.id, a.nome, a.rg, a.cpf, a.telefone, a.email, a.sexo, 
            a.ativo, g.cor as graduacao_id, en.rua as endereco_id, en.numero, 
            en.complemento, en.cep, en.bairro, c.nome as cidade_id, 
            est.nome as estado_id, p.nome as pais_id FROM aluno a 
            LEFT JOIN endereco en ON a.endereco_id = en.id
            LEFT JOIN cidade c ON en.cidade_id = c.id
            LEFT JOIN estado est ON c.estado_id = est.id
            LEFT JOIN pais p ON est.pais_id = p.id
            LEFT JOIN graduacao g ON a.graduacao_id = g.id ORDER BY a.id";

        $query = $this->db->query($sql);

        return $query->result();
    }

    /**
     * 
     * Faz uma busca através do id solicitado
     * @param $id recebe o id solicitado na pagina lista_aluno
     * 
     */
    public function encontrar($id) {

        $sql = "SELECT * FROM aluno WHERE id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

    /**
     * 
     * Atualiza os dados na tabela aluno através do id
     * alterando somente os dados que sejam deste id
     * @param $registro recebe os valores do formulário
     * 
     */
    public function atualiza($registro) {

        $this->db->where('id', $registro['id']);

        return $this->db->update('aluno', $registro);
    }

}
