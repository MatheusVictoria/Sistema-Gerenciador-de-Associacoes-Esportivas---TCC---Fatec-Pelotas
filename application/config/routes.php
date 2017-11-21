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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'Login/index';
$route['form_centro_treinamento'] = 'Centro_de_Treinamento/index';
$route['listar_ct'] = 'Centro_de_Treinamento/listar';
$route['form_aluno'] = 'Aluno/index';
$route['listar_aluno'] = 'Aluno/listar';
$route['visualizar_aluno'] = 'Aluno/visualizar';
$route['form_graduacao'] = 'Graduacao/index';
$route['listar_graduacao'] = 'Graduacao/listar';
$route['form_usuario'] = 'Usuario/index';
$route['alt_usuario'] = 'Usuario/editar';
$route['listar_usuario'] = 'Usuario/listar';
$route['form_professor'] = 'Professor/index';
$route['listar_professor'] = 'Professor/listar';
$route['visualizar_professor'] = 'Professor/visualizar';
$route['form_tipo'] = 'Tipo/index';
$route['listar_tipo'] = 'Tipo/listar';
$route['form_turma'] = 'Turma/index';
$route['listar_turma'] = 'Turma/listar';
$route['form_modalidade'] = 'Modalidade/index';
$route['listar_modalidade'] = 'Modalidade/listar';
$route['registra_aula'] = 'Registro_Aula/registra_aula';
$route['listar_registros_aulas'] = 'Registro_Aula/listar';
$route['visualizar_registro'] = 'Registro_aula/visualizar';
$route['registra_acidente_aluno'] = 'Registro_Acidente_Aluno/registra_acidente';
$route['listar_registro_acidente'] = 'Registro_Acidente_Aluno/listar';
$route['visualizar_registro_acidente'] = 'Registro_Acidente_Aluno/visualizar';
$route['lanca_pagamento'] = 'Mensalidade/index';
$route['form_vincula_aluno_turma'] = 'Turma/vincula_aluno';
$route['registra_presenca'] = 'Turma/escolhe_turma';
$route['form_registra_presenca'] = 'Turma/registra_presenca';
$route['form_registra_evento'] = 'Eventos_Participados/registra_eventos';
$route['listar_evento'] = 'Eventos_Participados/listar';
$route['gerar_mensalidade'] = 'Mensalidade/mensalidade';
$route['form_mensalidade'] = 'Mensalidade/gerar_mensalidade';
