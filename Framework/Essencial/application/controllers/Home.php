<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('usuarios_model');
    }

    public function index()
    {
        permission();
        $this->load->view('cabecalho');
        $this->load->view('Mensagem/home');
        $this->load->view('rodape');
    }
}
