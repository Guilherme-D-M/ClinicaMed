<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Consultas_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function buscar($id)
    {
        return $this->db->get_where('consulta', array("id" => $id))
            ->row_array();
    }

    public function exibir_consultas()
    {
        $medicos = $this->db->query("SELECT consulta.id as idConsul, consulta.data, consulta.hora, consulta.valor, medico.id, medico.nome as nomeMed, paciente.id, paciente.nome as nomePac
        FROM consulta
        JOIN medico ON medico.id = consulta.medico_id
        JOIN paciente ON paciente.id = consulta.paciente_id");
        return $medicos->result_array();
    }

    public function buscar_nomeMedico($medico)
    {
        $medicos = $this->db->query("SELECT consulta.id, consulta.data, consulta.hora, consulta.valor, medico.id, medico.nome as nomeMed, paciente.id, paciente.nome as nomePac
        FROM consulta
        JOIN medico ON medico.id = consulta.medico_id
        JOIN paciente ON paciente.id = consulta.paciente_id
        WHERE medico.id = $medico");
        return $medicos->result_array();
    }

    public function buscar_nomePaciente($paciente)
    {
        $pacientes = $this->db->query("SELECT consulta.id, consulta.data, consulta.hora, consulta.valor, medico.id, medico.nome as nomeMed, paciente.id, paciente.nome as nomePac
        FROM consulta
        JOIN medico ON medico.id = consulta.medico_id
        JOIN paciente ON paciente.id = consulta.paciente_id
        WHERE paciente.id = $paciente");
        return $pacientes->result_array();
    }

    public function inserir($data)
    {
        $this->db->insert('consulta', $data);
    }

    public function inserirValor($data)
    {
        $this->db->insert('consulta', $data);
    }

    public function alterar($dados, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('consulta', $dados);
    }

    public function excluir($excluir)
    {
        $this->db->delete('Consulta', array('id' => $excluir));
    }

    public function insereValorEsp($item)
    {
        $medico =  $item['medico_id'];
        $item = $this->db->query("SELECT especialidade.valor 
        FROM medico 
        JOIN especialidade ON especialidade.id = medico.especialidade_id
        WHERE medico.id = $medico");

        return $item->result_array();
    }
}
