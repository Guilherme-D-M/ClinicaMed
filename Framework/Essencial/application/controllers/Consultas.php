<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Consultas extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('medicos_model');
    $this->load->model('pacientes_model');
    $this->load->model('consultas_model');
    $this->load->library('form_validation');
    $this->load->helper('form');
  }

  public function index()
  {

    //PERMISSAO DE USUARIO
    permission();
    $dados['consultas'] = $this->consultas_model->exibir_consultas();

    $dados['titulo'] = "Consultas";
    $dados['botao'] = "Cadastrar";

    $this->load->view('cabecalho');
    $this->load->view('Paginas/consultas_home', $dados);
    $this->load->view('rodape');
  }

  public function insert_view()
  {
    permission();
    $dados['titulo'] = "Consultas";
    $dados['medicos'] = $this->medicos_model->listar();
    $dados['pacientes'] = $this->pacientes_model->listar();
    $dados['data'] = date('Y-m-d', strtotime('+6 days'));
    $fuso = new DateTimeZone('America/Sao_Paulo');
    $data = new DateTime('');
    $data->setTimezone($fuso);
    $newDate = $data->format('H:i');
    $dados['hora'] = $newDate;



    $this->load->view('cabecalho');
    $this->load->view('Paginas/consultas_insert', $dados);
    $this->load->view('rodape');
  }

  public function insert()
  {
    permission();

    $this->form_validation->set_rules(
      'data',
      'data',
      'trim|required|min_length[10]|max_length[10]',
      array(
        'required'      =>    'Informe	a data,	por	favor.',
        'min_length'    =>    'Informe a data da consulta com 10 caracteres. Possui a menos.',
        'max_length'    =>    'Informe a data da consulta com 10 caracteres. Possui a mais'
      )
    );

    $this->form_validation->set_rules(
      'hora',
      'hora',
      'trim|required|min_length[5]|max_length[5]',
      array(
        'required'      =>    'Informe	a hora,	por	favor.',
        'min_length'    =>    'Informe a hora da consulta com 5 caracteres. Possui a menos.',
        'max_length'    =>    'Informe a hora da consulta com 5 caracteres. Possui a mais'
      )
    );
    $item = array(
      'id' => $this->input->post('id'),
      'data' => $this->input->post('data'),
      'hora' => $this->input->post('hora'),
      'valor' => $this->input->post('valor'),
      'medico_id' => $this->input->post('medico_id'),
      'paciente_id' => $this->input->post('paciente_id')
    );



    if ($this->form_validation->run()  ==  FALSE) {
      $data['formErrors']  =  validation_errors();
      print_r($item);
      $data['medicos'] = $this->medicos_model->listar();
      $data['pacientes'] = $this->pacientes_model->listar();

      $this->load->view('cabecalho');

      $this->load->view('Paginas/consultas_insert2', $data);
      $this->load->view('rodape');
    } else {
      if ($item['valor'] == 0) {
        $teste = $this->consultas_model->insereValorEsp($item);
        $item['valor'] = $teste[0]['valor'];

        $this->consultas_model->inserirValor($item);
        redirect(base_url('index.php/consultas'));
      } else {
        $this->consultas_model->inserir($item);
        redirect(base_url('index.php/consultas'));
      }
    }
  }

  public function buscar_View()
  {
    permission();
    $dados['titulo'] = "Consultas";
    $dados['medicos'] = $this->medicos_model->listar();
    $dados['pacientes'] = $this->pacientes_model->listar();

    $this->load->view('cabecalho');
    $this->load->view('Paginas/Consultas_buscar', $dados);
    $this->load->view('rodape');
  }

  public function buscar()
  {
    permission();
    $nome_paciente = $this->input->post('paciente_id');
    $credenciais['nome'] = 'Nome';
    $credenciais['nomeFinal'] = 'o';

    $dados['dados'] = $this->consultas_model->buscar_nomePaciente($nome_paciente);

    $this->load->view('cabecalho');
    $this->load->view('Paginas/consultas_buscar2', $dados);
    $this->load->view('rodape');
  }

  public function buscarNome_View()
  {
    permission();
    $dados['titulo'] = "Consultas";
    $dados['especialidades'] = $this->especialidades_model->listar();

    $this->load->view('cabecalho');
    $this->load->view('Paginas/consultas_buscar', $dados);
    $this->load->view('rodape');
  }

  public function buscarNome()
  {
    permission();
    $nome_medico = $this->input->post('medico_id');
    $credenciais['nome'] = 'Nome';
    $credenciais['nomeFinal'] = 'o';

    $dados['dados'] = $this->consultas_model->buscar_nomeMedico($nome_medico);
    $this->load->view('cabecalho');
    $this->load->view('Paginas/consultas_buscar2', $dados);
    $this->load->view('rodape');
  }

  public function alter_view($id)
  {
    permission();

    $id = $this->uri->segment(2);
    $dados['data']  = $this->consultas_model->buscar($id);
    $dados['medicos'] = $this->medicos_model->listar();
    $dados['pacientes'] = $this->pacientes_model->listar();

    $this->load->view('cabecalho');
    $this->load->view('Paginas/consultas_alter', $dados, $id);
    $this->load->view('rodape');
  }

  public function alter()
  {
    permission();

    $dados = array(
      'id' => $this->input->post('id'),
      'data' => $this->input->post('data'),
      'hora' => $this->input->post('hora'),
      'valor' => $this->input->post('valor'),
      'medico_id' => $this->input->post('medico_id'),
      'paciente_id' => $this->input->post('paciente_id')
    );
    $this->form_validation->set_rules(
      'data',
      'data',
      'trim|required|min_length[10]|max_length[10]',
      array(
        'required'      =>    'Informe	a data,	por	favor.',
        'min_length'    =>    'Informe a data da consulta com 10 caracteres. Possui a menos.',
        'max_length'    =>    'Informe a data da consulta com 10 caracteres. Possui a mais'
      )
    );

    $this->form_validation->set_rules(
      'hora',
      'hora',
      'trim|required|min_length[5]|max_length[8]',
      array(
        'required'      =>    'Informe	a hora,	por	favor.',
        'min_length'    =>    'Informe a hora da consulta utilizando 5 ou 8 caracteres. Possui a menos.',
        'max_length'    =>    'Informe a hora da consulta utilizando 5 ou 8 caracteres. Possui a mais'
      )
    );

    $this->form_validation->set_rules(
      'valor',
      'valor',
      'trim|required|min_length[3]|max_length[6]',
      array(
        'required'      =>    'Informe	o valor,	por	favor.',
        'min_length'    =>    'Informe no mínimo 3 caracteres no valor da consulta',
        'max_length'    =>    'Informe no máximo 6 caracteres no valor da consulta'
      )
    );

    if ($this->form_validation->run()  ==  FALSE) {
      $data['formErrors']  =  validation_errors();

      $data['medicos'] = $this->medicos_model->listar();
      $data['pacientes'] = $this->pacientes_model->listar();

      $this->load->view('cabecalho');
      $this->load->view('Paginas/consultas_alter2', $data);
      $this->load->view('rodape');
    } else {

      $id = $this->input->post('id');
      $this->consultas_model->alterar($dados, $id);
      redirect(base_url('index.php/consultas'));
    }
  }

  public function delete()
  {
    permission();

    $exclui = $this->uri->segment(2);
    echo $exclui;
    $this->consultas_model->excluir($exclui);
    redirect(base_url('index.php/consultas'));
  }
}
