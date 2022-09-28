<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Especialidades_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function inserir($data)
    {
        $this->db->insert('especialidade', $data);
    }

    public function listar()
    {
        return $this->db->get('especialidade')->result_array();
    }

    public function alterar($dados, $id)
    {

        $this->db->where('id', $id);
        $this->db->update('especialidade', $dados);
    }

    public function buscar($especialidade)
    {
        return $this->db->get_where('especialidade', array("id" => $especialidade))
            ->row_array();
    }

    public function buscarNome($especialidade)
    {
        $especialidades = $this->db->query("SELECT id,nome,valor FROM especialidade WHERE nome= '$especialidade'");
        return $especialidades->result();
    }

    public function verificar_buscar($dados)
    {
        $this->db->select('*');
        $this->db->from('especialidade');
        $this->db->where('especialidade.nome', $dados);

        $query = $this->db->get();

        if ($query->num_rows() != 0)
            return true;
        else
            return false;
    }

    public function excluir($excluir)
    {
        $this->db->delete('especialidade', array('id' => $excluir));
    }
}
