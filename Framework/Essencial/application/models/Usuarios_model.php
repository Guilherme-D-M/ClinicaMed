<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function cadastrar($dados)
    {
        $this->db->insert('login', $dados);
    }

    public function listar()
    {
        return $this->db->get('login')->result_array();
    }

    public function buscar($id)
    {
        return $this->db->get_where('login', array("id" => $id))
            ->row_array();
    }

    public function alterar($dados, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('login', $dados);
    }

    public function excluir($excluir)
    {
        $this->db->delete('login', array('id' => $excluir));
    }

    public function verificar_login()
    {

        $resultado = $this->db->from('login')
            ->where('usuario', $this->input->post('text_usuario'))
            ->where('senha', $this->input->post('text_senha'))
            ->get();

        if ($resultado->num_rows() == 0) {
            return false;
        } else {

            $dados_usuario = $resultado->row();
            $this->session->set_userdata('logged_user', $dados_usuario);
            return true;
        }
    }
}
