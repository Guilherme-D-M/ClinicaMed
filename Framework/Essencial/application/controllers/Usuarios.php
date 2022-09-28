<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('usuarios_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
        permission();
        $dados['login'] = $this->usuarios_model->listar();
        $dados['titulo'] = "Usuarios";
        $this->load->view('cabecalho');
        $this->load->view('Paginas/usuarios_home', $dados);
        $this->load->view('rodape');
    }
    public function insert_view()
    {
        $dados['titulo'] = "Usuários";
        $this->load->view('cabecalho');
        $this->load->view('Paginas/usuarios_insert', $dados);
        $this->load->view('rodape');
    }


    public function insert()
    {
        $dados['titulo'] = "Usuarios";

        $dados = array(
            'senha' => $this->input->post('senha'),
            'usuario' => $this->input->post('usuario')
        );

        $this->form_validation->set_rules(
            'usuario',
            'Usuario',
            'trim|required|min_length[6]',
            array(
                'required'      =>  'Informe o seu usuario,	por	favor.',
                'min_length'    =>  'Informe o nome de usuário maior que 6 caracteres'

            )
        );

        $this->form_validation->set_rules(
            'senha',
            'Senha',
            'trim|required|min_length[8]',
            array(
                'required'        =>    'Informe	o	valor,	por	favor.',
                'min_length'    =>    'Informe a senha maior que 8 caracteres'
            )
        );

        if ($this->form_validation->run()    ==    FALSE) {
            $data['titulo'] = 'Usuários';

            $data['formErrors']    =    validation_errors();
            $this->load->view('cabecalho');
            $this->load->view('Paginas/usuarios_insert2', $data);
            $this->load->view('rodape');
        } else {
            $this->usuarios_model->cadastrar($dados);

            $dados = [
                'mensagem' => 'Sistema de base de dados acrescentados com sucesso',
                'tipo'     => 'success',
            ];
            $this->load->view('cabecalho');
            $this->load->view('mensagem/view', $dados);
            $this->load->view('rodape');
        }
    }

    public function select()
    {
        $dados['nomes'] = ['Joao'];
        $this->load->view('home', $dados);
        $this->usuarios_model->listar();
    }

    public function alter_view($id)
    {
        permission();
        $dados['titulo'] = "Usuarios";
        $id = $this->uri->segment(2);
        $data = $this->usuarios_model->buscar($id);

        $this->load->view('cabecalho');
        $this->load->view('Paginas/usuarios_alter', $data, $id);
        $this->load->view('rodape');
    }

    public function alter()
    {
        permission();
        $dados = array(
            'id' => $this->input->post('id'),
            'senha' => $this->input->post('senha'),
            'usuario' => $this->input->post('usuario')
        );

        $this->form_validation->set_rules(
            'usuario',
            'Usuario',
            'trim|required|min_length[6]',
            array(
                'required'      => 'Informe	o seu usuario,	por	favor.',
                'min_length'    =>    'Informe o nome de usuário maior que 6 caracteres'

            )
        );

        $this->form_validation->set_rules(
            'senha',
            'Senha',
            'trim|required|min_length[8]',
            array(
                'required'        =>    'Informe	o	valor,	por	favor.',
                'min_length'    =>    'Informe a senha maior que 8 caracteres'
            )
        );

        if ($this->form_validation->run()    ==    FALSE) {
            $data['formErrors']    =    validation_errors();
            $this->load->view('cabecalho');
            $this->load->view('Paginas/usuarios_alter2', $data);
            $this->load->view('rodape');
        } else {
            $id = $this->input->post('id');
            $this->usuarios_model->alterar($dados, $id);
            redirect(base_url('index.php/usuarios'));
        }
    }

    public function drop()
    {
        permission();

        $exclui = $this->uri->segment(2);
        $this->usuarios_model->excluir($exclui);
        redirect(base_url('index.php/usuarios'));
    }

    public function logar()
    {
        $dados['titulo'] = "Usuários";
        $this->load->view('Paginas/login', $dados);
        $this->load->view('rodape');
    }

    public function logout()
    {
        $this->session->unset_userdata("logged_user");
        redirect(base_url('index.php/usuarios/logar'));
    }
    public function verificarlogin()
    {
        //verifica se faz o loguin correto

        if ($this->usuarios_model->verificar_login()) {
            redirect(base_url('index.php/home'));
        } else {
            echo 'Nao';
        }
    }
}
