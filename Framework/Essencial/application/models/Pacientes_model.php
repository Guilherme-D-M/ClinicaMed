<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pacientes_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function exibir_paciente()
    {
        $pacientes = $this->db->query("SELECT id,nome, cpf, email, telefone  FROM paciente");
        return $pacientes->result_array();
    }

    public function inserir($data)
    {
        $this->db->insert('paciente', $data);
    }

    public function buscar($id)
    {
        return $this->db->get_where('paciente', array("id" => $id))
            ->row_array();
    }

    public function listar()
    {
        return $this->db->get('paciente')->result_array();
    }


    public function alterar($dados, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('paciente', $dados);
    }


    public function buscar_nome($paciente)
    {
        $pacientes = $this->db->query("SELECT id,nome, cpf, email, telefone  FROM paciente WHERE paciente.nome=  '$paciente'");
        return $pacientes->result_array();
    }


    public function verificar_buscar($pacientes)
    {
        $this->db->select('*');
        $this->db->from('paciente');
        $this->db->where('nome', $pacientes);

        $query = $this->db->get();

        if ($query->num_rows() != 0)
            return $query->row_array();
        else
            return false;
    }

    public function excluir($excluir)
    {
        $this->db->delete('paciente', array('id' => $excluir));
    }
}
