<?php

defined('BASEPATH') OR exit('No direct script access allowed');

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
        
        $usuario = $this->session->nome;
        $acao = "usuário inseriu o aluno " . $dados['nome'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_hora_acao) VALUES (' $acao ','$usuario', NOW())");
        
        $cidade_id = $this->cidadeM->busca_cidades($dados['cidade']);
        $this->db->query("INSERT INTO endereco(rua, numero,complemento, cep, bairro, cidade_id)
          VALUES('{$dados['rua']}', '{$dados['numero']}', '{$dados['complemento']}', '{$dados['cep']}', '{$dados['bairro']}', $cidade_id)");
        $this->db->query("INSERT INTO aluno(nome, rg, cpf, telefone, email, sexo, graduacao_id, foto, ativo, endereco_id)
          values('{$dados['nome']}', {$dados['rg']}, {$dados['cpf']}, '{$dados['telefone']}','{$dados['email']}', '{$dados['sexo']}', {$dados['graduacao_id']}, '{$dados['foto']}', '{$dados['ativo']}', (select LAST_INSERT_ID()));");
        $this->db->query("INSERT INTO aluno_has_patologia(patologia_id, aluno_id)
          values({$dados['patologia']}, (select LAST_INSERT_ID()));");

        $this->db->trans_complete();
    }

    /**
     * Busca os valores existentes na tabela aluno
     */
    public function selecionar() {

        $sql = "SELECT a.id, a.nome, a.rg, a.cpf, a.telefone, a.email, a.sexo, 
            a.foto, a.ativo, g.cor as graduacao_id, en.rua as endereco_id, en.numero, 
            en.complemento, en.cep, en.bairro, c.nome as cidade_id, 
            est.nome as estado_id, p.nome as pais_id FROM aluno a 
            LEFT JOIN endereco en ON a.endereco_id = en.id
            LEFT JOIN cidade c ON en.cidade_id = c.id
            LEFT JOIN estado est ON c.estado_id = est.id
            LEFT JOIN pais p ON est.pais_id = p.id
            LEFT JOIN graduacao g ON a.graduacao_id = g.id
            WHERE a.ativo = 1 ORDER BY a.id";

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

        $sql = "SELECT a.id, a.nome, a.rg, a.cpf, a.telefone, a.email, a.sexo, 
            a.foto, a.ativo, a.graduacao_id, en.id as id_endereco, en.rua as endereco_id, en.numero, 
            en.complemento, en.cep, en.bairro, c.nome as cidade_id, 
            est.nome as estado_id, p.nome as pais_id FROM aluno a 
            LEFT JOIN endereco en ON a.endereco_id = en.id
            LEFT JOIN cidade c ON en.cidade_id = c.id
            LEFT JOIN estado est ON c.estado_id = est.id
            LEFT JOIN pais p ON est.pais_id = p.id
            LEFT JOIN graduacao g ON a.graduacao_id = g.id WHERE a.id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

    /**
     * 
     * Atualiza os dados na tabela aluno através do id
     * alterando somente os dados que sejam deste id
     * @param $dados recebe os valores do formulário
     * 
     */
    public function atualiza($dados) {

        $this->db->trans_start();
        
        $usuario = $this->session->nome;
        $acao = "usuário atualizou o cadastro do aluno " . $dados['nome'];
        $this->db->query("INSERT INTO log (acao,nome_usuario, data_hora_acao) VALUES (' $acao ','$usuario', NOW())");
        
        $cidade_id = $this->cidadeM->busca_cidades($dados['cidade']);
        $endereco_id = $this->busca_id_endereco($dados['id_endereco']);
        $this->db->query("UPDATE endereco SET rua = '{$dados['rua']}', numero = '{$dados['numero']}' ,complemento = '{$dados['complemento']}', cep = '{$dados['cep']}', bairro = '{$dados['bairro']}', cidade_id = $cidade_id WHERE id = $endereco_id");
        $this->db->query("UPDATE aluno SET nome = '{$dados['nome']}', rg = {$dados['rg']}, cpf = {$dados['cpf']}, telefone = '{$dados['telefone']}', email = '{$dados['email']}', sexo = '{$dados['sexo']}', graduacao_id = {$dados['graduacao_id']}, ativo = '{$dados['ativo']}' WHERE id = {$dados['id']}");
        $this->db->trans_complete();
    }

    /**
     *
     * Busca do id do endereço e compara com o id que esta vindo da view from_alt_centro_de_treinamento
     * @param $id recebe o id da view form_alt_centro_de_treinamento
     *
     */
    public function busca_id_endereco($id) {

        $query = $this->db->query("select id as endereco_id from endereco where id = '{$id}'");
        $linha = $query->row();
        return $linha->endereco_id;
    }

    /**
     * 
     * Faz uma busca através do id solicitado 
     * @param  $id recebe o id solicitado na pagina lista_aluno
     * @return  retorna os dados encontrados no banco referente ao id solicitado
     * 
     */
    public function visualizar($id) {

        $sql = "SELECT a.id, a.nome, a.rg, a.cpf, a.telefone, a.email, a.sexo, 
            a.foto, a.ativo, g.cor as graduacao_id, en.id as id_endereco, en.rua as endereco_id, en.numero, 
            en.complemento, en.cep, en.bairro, c.nome as cidade_id, 
            est.nome as estado_id, p.nome as pais_id FROM aluno a 
            LEFT JOIN endereco en ON a.endereco_id = en.id
            LEFT JOIN cidade c ON en.cidade_id = c.id
            LEFT JOIN estado est ON c.estado_id = est.id
            LEFT JOIN pais p ON est.pais_id = p.id
            LEFT JOIN graduacao g ON a.graduacao_id = g.id WHERE a.id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

    /**
     * Seleciona a potologia do aluno existente na tablea aluno_has_patologia
     * @param  $id do aluno selecionado na lista de alunas ao clicar no botão visualizar aluno
     * @return $query->row() retorna uma unica linha refente ao aluno encontrado
     */
    public function seleciona_patologia($id) {

        $sql = "SELECT a.id, pat.patologia as patologia_id FROM aluno a 
            INNER JOIN aluno_has_patologia apat ON a.id = apat.aluno_id
            INNER JOIN patologia pat ON apat.patologia_id = pat.id WHERE a.id = $id";

        $query = $this->db->query($sql);

        return $query->row();
    }

    /**
     * Método para buscar os alunos referentes a uma determinada graduação selecionado pelo ususario.
     * 
     * @param  $dados recebe o id referente a cor da graduação selecionada no campo do formulario
     * @param  $slq recebe o cmando Select responçavel por fazer a busca dos alunos que correspondam ao id 
     * da graduação selecionado pelo usuário.
     * @return $query-result()
     * retorna os resultado encontrados pelo query 
     */
    public function pesquisa_graduacao() {
        $dados = $this->input->post('pesquisa');

        $sql = "SELECT a.id, a.nome, a.rg, a.cpf, a.telefone, a.email, a.sexo, 
            a.foto, a.ativo, g.cor as graduacao_id FROM aluno a 
            LEFT JOIN graduacao g ON a.graduacao_id = g.id WHERE a.graduacao_id = $dados";

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function busca_aluno($turma_id) {

        $sql = "SELECT a.nome, ta.aluno_id FROM aluno a INNER JOIN turma_has_aluno ta ON a.id = ta.aluno_id "
                . "INNER JOIN turma t ON t.id = ta.turma_id WHERE a.id = ta.aluno_id AND t.id = $turma_id ORDER BY a.nome";
        
        $query = $this->db->query($sql);
        
        return $query->result();
    }
    
    public function seleciona_aluno($turma_id){
        
        $alunos = $this->busca_aluno($turma_id);
        
        $options = "<option ></option>";
        
        foreach ($alunos->result() as $aluno){
            $options .= "<option value='{$aluno->id}'>$aluno->nome</option>".PHP_EOL;
        }
        
        return $options; 
        
    }

}
