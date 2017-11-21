<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Turma_Model extends CI_Model {

    public function inserir($registro) {

        return $this->db->insert('turma', $registro);
    }

    public function selecionar() {

        $sql = "SELECT t.id, t.horario, p.nome as professor_id, c.nome as centro_treinamento_id, m.modalidade as modalidade_id  FROM turma t "
                . "LEFT JOIN professor p ON t.professor_id = p.id "
                . "LEFT JOIN modalidade m ON t.modalidade_id = m.id "
                . "LEFT JOIN centro_treinamento c ON t.centro_treinamento_id = c.id ORDER BY t.horario";

        $query = $this->db->query($sql);

        return $query->result();
    }

    /**
     * 
     * Faz uma busca através do id solicitado
     * @param $id recebe o id solicitado na pagina lista_turma
     * 
     */
    public function encontrar($id) {

        $sql = "SELECT t.id, t.horario, p.nome as professor_id, c.nome as centro_treinamento_id, m.modalidade as modalidade_id  FROM turma t "
                . "LEFT JOIN professor p ON t.professor_id = p.id "
                . "LEFT JOIN modalidade m ON t.modalidade_id = m.id "
                . "LEFT JOIN centro_treinamento c ON t.centro_treinamento_id = c.id "
                . " WHERE t.id = $id ";


        $query = $this->db->query($sql);

        return $query->row();
    }

    /**
     * 
     * Recebe os dados do formulário de alteração de turma e atualiza os dados 
     * na tabela do banco. 
     * @param type $registro
     * @return type
     */
    function atualiza($registro) {

        $this->db->where('id', $registro['id']);
        return $this->db->update('turma', $registro);
    }

    public function vincular_aluno($registro) {

        return $this->db->insert('turma_has_aluno', $registro);
    }

    /**
     * Método para buscar os alunos referentes a uma determinada turma selecionado pelo ususario.
     * 
     * @param  $dados recebe o id referente a cor a turma selecionada no campo do formulario
     * @param  $slq recebe o comando Select responçavel por fazer a busca dos alunos que correspondam ao id 
     * da turma selecionado pelo usuário atraves da clausula LIKE.
     * @return $query-result()
     * retorna os resultado encontrados pelo query 
     */
    public function pesquisa_alunos() {
        $dados = $this->input->post('turma_id');

        $sql = "SELECT a.nome, t.horario, t.id, ta.aluno_id FROM aluno a 
                INNER JOIN turma_has_aluno ta ON a.id = ta.aluno_id 
                INNER JOIN turma t ON t.id = ta.turma_id WHERE a.id = ta.aluno_id AND t.id = $dados ORDER BY a.nome ";

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function registrar_presenca($dados) {


        $turma = $dados['turma_id'];

        foreach ($dados['alunos'] as $aluno_id) {
            $presenca = array(
                'aluno_id' => $aluno_id,
                'turma_id' => $turma,
                'data' => date('Y-m-d H:m:s')
            );

            $this->db->insert('presenca', $presenca);
        }
    }

    /**
     * Método para buscar os turmas referentes a um determinado centro de treinamento 
     * selecionado pelo ususario.
     * 
     * @param  $dados recebe o id referente ao nome do centro de trinamento 
     *  selecionada no campo do formulario
     * @param  $slq recebe o comando Select responçavel por fazer a busca das turmas que correspondam ao id 
     * do centro de treinamento selecionado pelo usuário.
     * @return $query-result()
     * retorna os resultado encontrados pelo query 
     */
    public function pesquisa_graduacao() {
        $dados = $this->input->post('pesquisa');

        $sql = "SELECT t.id, t.horario, p.nome as professor_id, c.nome as centro_treinamento_id, m.modalidade as modalidade_id  FROM turma t "
                . "LEFT JOIN professor p ON t.professor_id = p.id "
                . "LEFT JOIN modalidade m ON t.modalidade_id = m.id "
                . "LEFT JOIN centro_treinamento c ON t.centro_treinamento_id = c.id WHERE t.centro_treinamento_id = $dados";

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function seleciona_turma() {
        
        $turmas = $this->selecionar();
        
        $options = "<option></option>";        
        foreach ($turmas as $turma){
            $options .= "<option value='{$turma->id}'>$turma->horario</option>".PHP_EOL;
        }
        
        return $options; 
        
    }

}
