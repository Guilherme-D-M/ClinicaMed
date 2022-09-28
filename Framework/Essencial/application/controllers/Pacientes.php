<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pacientes extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('pacientes_model');
    $this->load->model('pacientes_model');
    //VALIDAÇÃO DE FORMULÁRIOS
    $this->load->library('form_validation');
    $this->load->helper('form');
  }

  public function index()
  {
    permission();
    $dados['pacientes'] = $this->pacientes_model->exibir_paciente();

    $dados['titulo'] = "Pacientes";
    $dados['botao'] = "Cadastrar";

    $this->load->view('cabecalho');
    $this->load->view('Paginas/pacientes_home', $dados);
    $this->load->view('rodape');
  }

  public function insert_view()
  {
    permission();
    $dados['titulo'] = "Pacientes";

    $this->load->view('cabecalho');
    $this->load->view('Paginas/pacientes_insert', $dados);
    $this->load->view('rodape');
  }

  public function insert()
  {
    permission();

    $item = $_POST;
    $this->form_validation->set_rules(
      'cpf',
      'cpf',
      'trim|required|min_length[11]|max_length[14]',
      array(
        'required'      =>  'Informe	o	CPF,	por	favor.',
        'min_length'  =>  'Número de dígitos do CPF está incorreto. Minimo de 11 caracteres',
        'max_length'  =>  'Número de dígitos do CPF está incorreto. Minimo de 14 caracteres'
      )
    );
    $this->form_validation->set_rules(
      'nome',
      'Nome',
      'trim|required|min_length[3]|max_length[250]',
      array(
        'required'      => 'Informe	o	seu	nome,	por	favor.',
        'min_length'    => 'Número de caracteres mínimo do nome está inválido.',
        'max_length'    => 'Número de caracteres máximo do nome está inválido.'
      )
    );
    $this->form_validation->set_rules(
      'email',
      'email',
      'trim|required|min_length[10]|max_length[450]',
      array(
        'required'      => 'Informe	o	seu	email,	por	favor.',
        'min_length'    => 'Número de caracteres mínimo do email está inválido.',
        'max_length'    => 'Número de caracteres máximo do email está inválido.'
      )
    );
    $this->form_validation->set_rules(
      'telefone',
      'telefone',
      'trim|required|min_length[11]',
      array(
        'required'      =>  'Informe	o	telefone,	por	favor.',
        'min_length'    => 'Número de telefone está inválido. Minimo de 11 caracteres',
      )
    );

    if ($this->form_validation->run()  ==  FALSE) {
      $data['formErrors']  =  validation_errors();

      $this->load->view('cabecalho');
      $this->load->view('Paginas/pacientes_insert2', $data);
      $this->load->view('rodape');
    } else {
      $this->pacientes_model->inserir($item);
      redirect(base_url('index.php/pacientes'));
    }
  }

  public function alter_view($id)
  {
    permission();

    $id = $this->uri->segment(2);
    $data = $this->pacientes_model->buscar($id);

    $this->load->view('cabecalho');
    $this->load->view('Paginas/pacientes_alter', $data, $id);
    $this->load->view('rodape');
  }

  public function alter()
  {
    permission();

    $dados = array(
      'id' => $this->input->post('id'),
      'cpf' => $this->input->post('cpf'),
      'nome' => $this->input->post('nome'),
      'email' => $this->input->post('email'),
      'telefone' => $this->input->post('telefone')
    );

    $this->form_validation->set_rules(
      'cpf',
      'cpf',
      'trim|required|min_length[11]|max_length[14]',
      array(
        'required'      =>  'Informe	o	CPF,	por	favor.',
        'min_length'  =>  'Número de dígitos do CPF está incorreto. Minimo de 11 caracteres',
        'max_length'  =>  'Número de dígitos do CPF está incorreto. Minimo de 14 caracteres'
      )
    );
    $this->form_validation->set_rules(
      'nome',
      'Nome',
      'trim|required|min_length[3]|max_length[250]',
      array(
        'required'      => 'Informe	o	seu	nome,	por	favor.',
        'min_length'    => 'Número de caracteres mínimo do nome está inválido.',
        'max_length'    => 'Número de caracteres máximo do nome está inválido.'
      )
    );
    $this->form_validation->set_rules(
      'email',
      'email',
      'trim|required|min_length[10]|max_length[450]',
      array(
        'required'      => 'Informe	o	seu	email,	por	favor.',
        'min_length'    => 'Número de caracteres mínimo do email está inválido. Minimo de 10 caracteres',
        'max_length'    => 'Número de caracteres máximo do email está inválido. Máximo de 10 caracteres'
      )
    );
    $this->form_validation->set_rules(
      'telefone',
      'telefone',
      'trim|required|min_length[11]',
      array(
        'required'      =>  'Informe	o	telefone,	por	favor.',
        'min_length'    => 'Número de telefone está inválido. Minimo de 11 caracteres',
      )
    );

    if ($this->form_validation->run()  ==  FALSE) {
      $data['formErrors']  =  validation_errors();

      $this->load->view('cabecalho');
      $this->load->view('Paginas/pacientes_alter2', $data);
      $this->load->view('rodape');
    } else {
      $id = $this->input->post('id');
      echo $id;
      $this->pacientes_model->alterar($dados, $id);
      redirect(base_url('index.php/pacientes'));
    }
  }

  public function buscar_View()
  {
    permission();
    $dados['titulo'] = "Pacientes";

    $this->load->view('cabecalho');
    $this->load->view('Paginas/pacientes_buscar', $dados);
    $this->load->view('rodape');
  }

  public function buscarNome_View()
  {
    permission();
    $dados['titulo'] = "Pacientes";

    $this->load->view('cabecalho');
    $this->load->view('Paginas/pacientes_buscar', $dados);
    $this->load->view('rodape');
  }

  public function buscarNome()
  {
    permission();
    $nome_paciente = $this->input->post('nome');
    $credenciais['nome'] = 'Nome';
    $credenciais['nomeFinal'] = 'o';
    if ($this->pacientes_model->verificar_buscar($nome_paciente)) {
      $this->pacientes_model->buscar_nome($nome_paciente);
      $dados['especialidades'] = $this->pacientes_model->buscar_nome($nome_paciente);

      $this->load->view('cabecalho');
      $this->load->view('Paginas/pacientes_buscar2', $dados);
      $this->load->view('rodape');
    } else {
      $this->load->view('cabecalho');
      $this->load->view('mensagem/pacientes_mensagemBuscar', $credenciais);
      $this->load->view('rodape');
    }
  }

  public function delete()
  {
    permission();

    $exclui = $this->uri->segment(2);
    $this->pacientes_model->excluir($exclui);
    redirect(base_url('index.php/pacientes'));
  }
}
