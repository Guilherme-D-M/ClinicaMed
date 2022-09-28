<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Medicos extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('medicos_model');
    $this->load->model('especialidades_model');
    //VALIDAÇÃO DE FORMULÁRIOS
    $this->load->library('form_validation');
    $this->load->helper('form');
  }

  public function index()
  {

    //PERMISSAO DE USUARIO
    permission();
    $dados['medicos'] = $this->medicos_model->exibir_medico();

    $dados['titulo'] = "Médicos";
    $dados['botao'] = "Cadastrar";

    $this->load->view('cabecalho');
    $this->load->view('Paginas/medicos_home', $dados);
    $this->load->view('rodape');
  }
  public function insert_view()
  {
    permission();
    $dados['titulo'] = "Médicos";
    $dados['especialidades'] = $this->especialidades_model->listar();

    $this->load->view('cabecalho');
    $this->load->view('Paginas/medicos_insert', $dados);
    $this->load->view('rodape');
  }

  public function insert()
  {
    permission();

    $item = array(
      'crm' => $this->input->post('crm'),
      'especialidade_id' => $this->input->post('especialidade_id'),
      'nome' => $this->input->post('nome'),
      'telefone' => $this->input->post('telefone')
    );


    $this->form_validation->set_rules(
      'crm',
      'crm',
      'trim|min_length[7]|max_length[9]',
      array(
        'required'    =>  'Informe	o	CRM,	por	favor.',
        'min_length'  =>  'Número de dígitos do crm está incorreto. Minimo de 7 caracteres',
        'max_length'  =>  'Número de dígitos do crm está incorreto. Máximo de 9 caracteres'
      )
    );
    $this->form_validation->set_rules(
      'nome',
      'nome',
      'trim|required|min_length[3]|max_length[450]',
      array(
        'required'      => 'Informe	o	seu	nome,	por	favor.',
        'min_length'    => 'Número de caracteres mínimo inválido.',
        'max_length'    => 'Número de caracteres máximo inválido.'
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
      $data['especialidades'] = $this->especialidades_model->listar();

      $this->load->view('cabecalho');
      $this->load->view('Paginas/medicos_insert2', $data);
      $this->load->view('rodape');
    } else {
      $this->medicos_model->inserir($item);
      redirect(base_url('index.php/medicos'));
    }
  }


  public function alter_view($id)
  {
    permission();

    $id = $this->uri->segment(2);
    $data = $this->medicos_model->buscar($id);
    $data['especialidades'] = $this->especialidades_model->listar();

    $this->load->view('cabecalho');
    $this->load->view('Paginas/medicos_alter', $data, $id);
    $this->load->view('rodape');
  }

  public function alter()
  {
    permission();

    $dados = array(
      'id' => $this->input->post('id'),
      'crm' => $this->input->post('crm'),
      'especialidade_id' => $this->input->post('especialidade_id'),
      'nome' => $this->input->post('nome'),
      'telefone' => $this->input->post('telefone')
    );

    $this->form_validation->set_rules(
      'crm',
      'crm',
      'trim|required|min_length[7]|max_length[9]',
      array(
        'required'      =>  'Informe	o	CRM,	por	favor.',
        'min_length'  =>  'Número de dígitos do crm está incorreto. Minimo de 7 caracteres',
        'max_length'  =>  'Número de dígitos do crm está incorreto. Máximo de 9 caracteres'
      )
    );
    $this->form_validation->set_rules(
      'nome',
      'nome',
      'trim|required|min_length[3]|max_length[450]',
      array(
        'required'      => 'Informe	o	seu	nome,	por	favor.',
        'min_length'  =>  'Número de caracteres do nome invalido. Minimo de 3 caracteres',
        'max_length'  =>  'Número de caracteres do nome invalido. Máximo de 450 caracteres'
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
      $dados['formErrors']  =  validation_errors();
      $dados['especialidades'] = $this->especialidades_model->listar();

      $this->load->view('cabecalho');
      $this->load->view('Paginas/medicos_alter2', $dados);
      $this->load->view('rodape');
    } else {
      $id = $this->input->post('id');
      $this->medicos_model->alterar($dados, $id);
      redirect(base_url('index.php/medicos'));
    }
  }

  public function buscar_View()
  {
    permission();
    $dados['titulo'] = "medicos";
    $dados['especialidades'] = $this->especialidades_model->listar();

    $this->load->view('cabecalho');
    $this->load->view('Paginas/medicos_buscar', $dados);
    $this->load->view('rodape');
  }

  public function buscarNome_View()
  {
    permission();
    $dados['titulo'] = "medicos";
    $dados['especialidades'] = $this->especialidades_model->listar();

    $this->load->view('cabecalho');
    $this->load->view('Paginas/medicos_buscar', $dados);
    $this->load->view('rodape');
  }

  public function buscar()
  {
    permission();
    $nome_especialidade = $this->input->post('especialidade_id');
    $credenciais['nome'] = 'Nome';
    $credenciais['nomeFinal'] = 'o';

    if ($this->medicos_model->verificar_buscar($nome_especialidade)) {
      $dados['especialidades'] = $this->medicos_model->buscar_medicoEspecialidade($nome_especialidade);

      $this->load->view('cabecalho');
      $this->load->view('Paginas/medicos_buscar2', $dados);
      $this->load->view('rodape');
    } else {
      $this->load->view('cabecalho');
      $this->load->view('mensagem/medicos_mensagemBuscar', $credenciais);
      $this->load->view('rodape');
    }
  }

  public function buscarNome()
  {
    permission();
    $nome_medico = $this->input->post('nomeMedico');
    $credenciais['nome'] = 'Nome';
    $credenciais['nomeFinal'] = 'o';
    if ($this->medicos_model->verificar_nome($nome_medico)) {
      $dados['especialidades'] = $this->medicos_model->buscar_medicoNome($nome_medico);

      $this->load->view('cabecalho');
      $this->load->view('Paginas/medicos_buscar2', $dados);
      $this->load->view('rodape');
    } else {
      $this->load->view('cabecalho');
      $this->load->view('mensagem/medicos_mensagemBuscar', $credenciais);
      $this->load->view('rodape');
    }
  }

  public function delete()
  {
    permission();

    $exclui = $this->uri->segment(2);
    $dados['titulo'] = 'Médicos';

    if ($this->medicos_model->validarDelete($exclui)) { // se não for valido, add msg erro

      $this->medicos_model->excluir($exclui);
      redirect("medicos");
    }
    $dados['error'] = "Médico vinculado a uma Consulta";
    $this->load->view('cabecalho');
    $this->load->view('mensagem/medicos_mensagemBuscar', $dados);
    $this->load->view('rodape');
  }


  public function tratarformulario()
  {
    permission();

    $dados['contato'] =  $this->input->post();
    $this->load->view('apresentar', $dados);
  }
}
