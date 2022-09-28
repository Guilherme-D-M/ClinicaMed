<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Medicos_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function inserir($data)
    {
        $this->db->insert('medico', $data);
    }


    public function alterar($dados, $id)
    {

        $this->db->where('id', $id);
        $this->db->update('medico', $dados);
    }

    public function buscar($id)
    {
        return $this->db->get_where('medico', array("id" => $id))
            ->row_array();
    }

    public function listar()
    {
        return $this->db->get('medico')->result_array();
    }

    public function exibir_medico()
    {
        $especialidade = $this->db->query("SELECT medico.id, medico.nome as nomeMedico, medico.crm, 
        especialidade.nome as nomeEsp,  medico.telefone FROM medico JOIN especialidade ON medico.especialidade_id=especialidade.id");
        return $especialidade->result_array();
    }

    public function buscar_medicoEspecialidade($especialidade)
    {
        $especialidades = $this->db->query("SELECT medico.id, medico.nome as medicoNome, medico.crm, 
        especialidade.nome as especialidadeNome,  medico.telefone FROM medico JOIN especialidade ON medico.especialidade_id=especialidade.id WHERE especialidade.id =  $especialidade");
        return $especialidades->result_array();
    }

    public function buscar_medicoNome($medico)
    {
        $medicos = $this->db->query("SELECT medico.id, medico.nome as medicoNome, medico.crm, 
        especialidade.nome as especialidadeNome,  medico.telefone FROM medico JOIN especialidade ON medico.especialidade_id=especialidade.id WHERE medico.nome=  '$medico'");
        return $medicos->result_array();
    }


    public function verificar_buscar($especialidade)
    {
        $this->db->select('e.*');
        $this->db->from('medico m');
        $this->db->join('especialidade e', 'e.id = m.especialidade_id');
        $this->db->where('e.id', $especialidade);

        $query = $this->db->get();

        if ($query->num_rows() != 0)
            return $query->row_array();
        else
            return false;
    }

    public function verificar_nome($medico)
    {

        $this->db->select('*');
        $this->db->from('medico');
        $this->db->where('medico.nome', $medico);

        $query = $this->db->get();

        if ($query->num_rows() != 0)
            return true;
        else
            return false;
    }

    public function excluir($excluir)
    {
        $this->db->delete('medico', array('id' => $excluir));
    }

    public function validarDelete($id)
    {
        $this->db->select('*');
        $this->db->from('consulta c');
        $this->db->where('c.medico_id', $id);

        $query = $this->db->get();

        if ($query->num_rows() != 0)
            return false; // possui registros
        else
            return true; // não possui registros, pode exluir
    }
}
