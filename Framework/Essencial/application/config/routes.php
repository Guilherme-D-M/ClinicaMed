<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//ESPECIALIDADES
$route['default_controller'] = 'home';
$route['cadastrar_usuario'] = 'usuarios/cadastrar_usuario';
$route['insertESPECIALIDADES'] = 'especialidades/insert';
$route['buscarESPECIALIDADES'] = 'especialidades/buscar';
$route['alterESPECIALIDADES'] = 'especialidades/alter/';
$route['excluirESPECIALIDADES/(:num)'] = 'especialidades/delete/$1';
//ESPECIALIDADES VIEW
$route['insertViewESPECIALIDADES'] = 'especialidades/insert_view';
$route['alterviewESPECIALIDADES/(:num)'] = 'especialidades/alter_view/$1';
$route['buscarViewESPECIALIDADES'] = 'especialidades/buscar_view/';

//USUARIOS
$route['listar'] = 'usuarios/listar';
$route['logOut'] = 'usuarios/logout';
$route['excluirUSUARIOS/(:num)'] = 'usuarios/drop/$1';
$route['alterUSUARIOS'] = 'usuarios/alter/';
$route['insertUSUARIOS'] = 'usuarios/insert/';
//USUARIOS VIEW
$route['insertView'] = 'usuarios/insert_view';
$route['alterviewUSUARIOS/(:num)'] = 'usuarios/alter_view/$1';

//MEDICO
$route['cadastrar_MEDICOS'] = 'medicos/cadastrar_medicos';
$route['insertMEDICOS'] = 'medicos/insert';
$route['buscarMEDICOS'] = 'medicos/buscar';
$route['buscarNomeMEDICOS'] = 'medicos/buscarNome';
$route['alterMEDICOS'] = 'medicos/alter/';
$route['excluirMEDICOS/(:num)'] = 'medicos/delete/$1';
//MEDICO VIEW
$route['insertViewMEDICOS'] = 'medicos/insert_view';
$route['alterviewMEDICOS/(:num)'] = 'medicos/alter_view/$1';
$route['buscarViewMEDICOS'] = 'medicos/buscar_view/';
$route['buscarViewMEDICOS2'] = 'medicos/buscar_view2/';
$route['buscarViewNomeMEDICOS'] = 'medicos/buscarNome_View/';
$route['buscarViewNomeMEDICOS2'] = 'medicos/buscarNome_View2/';

//CONSULTAS
$route['cadastrar_CONSULTAS'] = 'consultas/cadastrar_consultas';
$route['insertCONSULTAS'] = 'consultas/insert';
$route['buscarCONSULTAS'] = 'consultas/buscar';
$route['buscarNomeCONSULTAS'] = 'consultas/buscarNome';
$route['alterCONSULTAS'] = 'consultas/alter/';
$route['excluirCONSULTAS/(:num)'] = 'consultas/delete/$1';
//CONSULTAS VIEW
$route['insertViewCONSULTAS'] = 'consultas/insert_view';
$route['alterviewCONSULTAS/(:num)'] = 'consultas/alter_view/$1';
$route['buscarViewCONSULTAS'] = 'consultas/buscar_view/';
$route['buscarViewCONSULTAS2'] = 'consultas/buscar_view2/';
$route['buscarViewNomeCONSULTAS'] = 'consultas/buscarNome_View/';
$route['buscarViewNomeCONSULTAS2'] = 'consultas/buscarNome_View2/';

//PACIENTES
$route['cadastrar_PACIENTES'] = 'pacientes/cadastrar_pacientes';
$route['insertPACIENTES'] = 'pacientes/insert';
$route['buscarPACIENTES'] = 'pacientes/buscar';
$route['buscarNomePACIENTES'] = 'pacientes/buscarNome';
$route['alterPACIENTES'] = 'pacientes/alter/';
$route['excluirPACIENTES/(:num)'] = 'pacientes/delete/$1';
//PACIENTES VIEW
$route['insertViewPACIENTES'] = 'pacientes/insert_view';
$route['alterviewPACIENTES/(:num)'] = 'pacientes/alter_view/$1';
$route['buscarViewPACIENTES'] = 'pacientes/buscar_view/';
$route['buscarViewPACIENTES2'] = 'pacientes/buscar_view2/';
$route['buscarViewNomePACIENTESS'] = 'pacientes/buscarNome_View/';
$route['buscarViewNomePACIENTES2'] = 'pacientes/buscarNome_View2/';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
