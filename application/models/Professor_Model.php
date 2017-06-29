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
     * Faz uma busca através do id solicitado
     * @param $id recebe o id solicitado na pagina lista_professor
     * 
     */
    public function encontrar($id) {

        $sql = "SELECT * FROM professor WHERE id = $id ";

        $query = $this->db->query($sql);

        return $query->row();
    }
    
    
     /**
     * 
     * Atualiza os dados na tabela professor através do id
     * alterando somente os dados que sejam deste id
     * @param $registro recebe os valores do formulário
     * 
     */
    public function atualiza($registro) {
        
        $this->db->where('id', $registro['id']);
        return $this->db->update('professor', $registro);
        
    }

}
