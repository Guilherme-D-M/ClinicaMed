<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Especialidades extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('especialidades_model');
    //VALIDAÇÃO DE FORMULÁRIOS
    $this->load->library('form_validation');
    $this->load->helper('form');
  }

  public function index()
  {

    //PERMISSAO DE USUARIO
    permission();
    $dados['especialidades'] = $this->especialidades_model->listar();
    $dados['titulo'] = "Especialidades";
    $dados['botao'] = "Cadastrar";

    $this->load->view('cabecalho');
    $this->load->view('Paginas/especialidades_home', $dados);
    $this->load->view('rodape');
  }
  public function insert_view()
  {
    permission();
    $dados['titulo'] = "Especialidades";

    $this->load->view('cabecalho');
    $this->load->view('Paginas/especialidades_insert', $dados);
    $this->load->view('rodape');
  }

  public function insert()
  {
    permission();
    $this->form_validation->set_rules(
      'nome',
      'Nome',
      'trim|required|min_length[3]|max_length[150]',
      array(
        'required'      => 'Informe	o	seu	nome,	por	favor.',
        'min_length'    => 'Informe o nome da especialidade maior que 6 caracteres.',
        'max_length'    => 'Informe o nome da especialidade menor que 150 caracteres.'
      )
    );

    $this->form_validation->set_rules(
      'valor',
      'Valor',
      'trim|required|numeric|min_length[3]|max_length[4]',
      array(
        'required'      =>  'Informe	o	valor,	por	favor.',
        'numeric'       =>  'Informe	o	valor númerico,	por	favor.',
        'min_length'    => 'Informe o valor da especialidade maior que 3 caracteres.',
        'max_length'    => 'Informe o valor da especialidade menor que 4 caracteres.'
      )
    );

    $item = $_POST;

    if ($this->form_validation->run()  ==  FALSE) {
      $data['formErrors']  =  validation_errors();
      $this->load->view('cabecalho');
      $this->load->view('Paginas/especialidades_insert2', $data);
      $this->load->view('rodape');
    } else {
      $this->especialidades_model->inserir($item);
      redirect(base_url('index.php/especialidades'));
    }
  }

  public function alter_view($id)
  {
    permission();
    $dados['titulo'] = "Especialidades";

    $id = $this->uri->segment(2);
    $data = $this->especialidades_model->buscar($id);

    $this->load->view('cabecalho');
    $this->load->view('Paginas/especialidades_alter', $data, $id);
    $this->load->view('rodape');
  }

  public function alter()
  {
    permission();

    $this->form_validation->set_rules(
      'nome',
      'Nome',
      'trim|required|min_length[3]|max_length[150]',
      array(
        'required'      => 'Informe	o	seu	nome,	por	favor.',
        'min_length'    => 'Informe o nome da especialidade maior que 6 caracteres.',
        'max_length'    => 'Informe o nome da especialidade menor que 150 caracteres.'
      )
    );

    $this->form_validation->set_rules(
      'valor',
      'Valor',
      'trim|required|numeric|min_length[3]|max_length[4]',
      array(
        'required'      =>  'Informe	o	valor,	por	favor.',
        'numeric'       =>  'Informe	o	valor númerico,	por	favor.',
        'min_length'    => 'Informe o valor da especialidade maior que 3 caracteres.',
        'max_length'    => 'Informe o valor da especialidade menor que 4 caracteres.'
      )
    );

    $dados = array(
      'id' => $this->input->post('id'),
      'nome' => $this->input->post('nome'),
      'valor' => $this->input->post('valor')
    );

    if ($this->form_validation->run()  ==  FALSE) {
      $data['formErrors']  =  validation_errors();
      $this->load->view('cabecalho');
      $this->load->view('Paginas/especialidades_alter2', $data);
      $this->load->view('rodape');
    } else {
      $id = $this->input->post('id');
      $this->especialidades_model->alterar($dados, $id);
      redirect(base_url('index.php/especialidades'));
    }
  }

  public function buscar_View()
  {
    permission();
    $dados['titulo'] = "Especialidades";

    $this->load->view('cabecalho');
    $this->load->view('Paginas/especialidades_buscar', $dados);
    $this->load->view('rodape');
  }

  public function buscar()
  {
    permission();
    $nome = $this->input->post('nomeEspecialidade');

    $dados['especialidades'] = $this->especialidades_model->buscarNome($nome);

    if ($this->especialidades_model->verificar_buscar($nome)) {
      $this->load->view('cabecalho');
      $this->load->view('Paginas/especialidades_buscar2', $dados);
      $this->load->view('rodape');
    } else {
      $this->load->view('cabecalho');
      $this->load->view('mensagem/mensagemBuscar');
      $this->load->view('rodape');
    }
  }


  public function delete()
  {
    permission();

    $exclui = $this->uri->segment(2);
    $this->especialidades_model->excluir($exclui);
    redirect(base_url('index.php/especialidades'));
  }

  public function tratarformulario()
  {
    permission();

    $dados['contato'] =  $this->input->post();
    $this->load->view('apresentar', $dados);
  }
}
