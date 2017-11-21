
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"><h4><b>Menu</b></h4></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li ><a href="<?= base_url() ?>"><i class="fa fa-circle-o"></i> Dashboard </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>Cadastros</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= base_url('form_aluno') ?>"><i class="fa fa-circle-o"></i>Aluno</a>
                    </li>

                    <li>
                        <a href="<?= base_url('form_centro_treinamento') ?>"><i class="fa fa-circle-o"></i>Centro de Treinamento</a>
                    </li>


                    <li>
                        <a href="<?= base_url('form_graduacao') ?>"><i class="fa fa-circle-o"></i>Graduação</a>
                    </li>

                    <li>
                        <a href="<?= base_url('form_modalidade') ?>"><i class="fa fa-circle-o"></i>Modalidade</a>
                    </li>

                    <li>
                        <a href="<?= base_url('form_professor') ?>"><i class="fa fa-circle-o"></i>Professor</a>
                    </li>

                    <li>
                        <a href="<?= base_url('form_tipo') ?>"><i class="fa fa-circle-o"></i>Tipo de Usuário</a>
                    </li>
                    
                    <li>
                        <a href="<?= base_url('form_vincula_aluno_turma') ?>"><i class="fa fa-circle-o"></i>Vincula Aluno</a>
                    </li>

                    <li>
                        <a href="<?= base_url('form_turma') ?>"><i class="fa fa-circle-o"></i>Turma</a>
                    </li>

                    <li>
                        <a href="<?= base_url('form_usuario') ?>"><i class="fa fa-circle-o"></i>Usuário</a>
                    </li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-ul"></i>
                    <span>Listas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= base_url('listar_registro_acidente') ?>"><i class="fa fa-circle-o"></i>Acidentes de Alunos</a>
                    </li>
                    <li>
                        <a href="<?= base_url('listar_aluno') ?>"><i class="fa fa-circle-o"></i>Aluno</a>
                    </li>

                    <li>
                        <a href="<?= base_url('listar_ct') ?>"><i class="fa fa-circle-o"></i>Centro de Treinamento</a>
                    </li>
                    
                    <li>
                        <a href="<?= base_url('listar_evento') ?>"><i class="fa fa-circle-o"></i>Eventos Participados</a>
                    </li>

                    <li>
                        <a href="<?= base_url('listar_graduacao') ?>"><i class="fa fa-circle-o"></i>Graduação</a>
                    </li>
                    
                     <li>
                        <a href="<?= base_url('listar_modalidade') ?>"><i class="fa fa-circle-o"></i>Modalidade</a>
                    </li>

                    <li>
                        <a href="<?= base_url('listar_professor') ?>"><i class="fa fa-circle-o"></i>Professores</a>
                    </li>
                    
                    <li>
                        <a href="<?= base_url('listar_registros_aulas') ?>"><i class="fa fa-circle-o"></i>Registros de Aulas</a>
                    </li>
                    <li>
                        <a href="<?= base_url('listar_professor') ?>"><i class="fa fa-circle-o"></i>Professores</a>
                    </li>

                    <li>
                        <a href="<?= base_url('listar_tipo') ?>"><i class="fa fa-circle-o"></i>Tipo de Usuário</a>
                    </li>

                    <li>
                        <a href="<?= base_url('listar_turma') ?>"><i class="fa fa-circle-o"></i>Turmas</a>
                    </li>

                    <li>
                        <a href="<?= base_url('listar_usuario') ?>"><i class="fa fa-circle-o"></i>Usuários</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Relatórios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= base_url('##') ?>"><i class="fa fa-circle-o"></i>Centro de Treinamento</a>
                    </li>
                    <li>
                        <a href="<?= base_url('##') ?>"><i class="fa fa-circle-o"></i>Turmas</a>
                    </li>
                    <li>
                        <a href="<?= base_url('##') ?>"><i class="fa fa-circle-o"></i>Pagamentos</a>
                    </li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Registro e Pagamentos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    
                    <li>
                        <a href="<?= base_url('gerar_mensalidade') ?>"><i class="fa fa-circle-o"></i>Gerar Mensalidade</a>
                    </li>
                    
                    <li>
                        <a href="<?= base_url('lanca_pagamento') ?>"><i class="fa fa-circle-o"></i>Lançar Pagamento</a>
                    </li>                    

                    <li>
                        <a href="<?= base_url('registra_aula') ?>"><i class="fa fa-circle-o"></i>Registro de Aula</a>
                    </li>
                    
                    <li>
                        <a href="<?= base_url('registra_acidente_aluno') ?>"><i class="fa fa-circle-o"></i>Registro de Acidente com Aluno</a>
                    </li>
                    
                    <li>
                        <a href="<?= base_url('form_registra_evento') ?>"><i class="fa fa-circle-o"></i>Registro de Eventos</a>
                    </li>
                    
                    <li>
                        <a href="<?= base_url('registra_presenca') ?>"><i class="fa fa-circle-o"></i>Registro de Presença de Alunos</a>
                    </li>

                </ul>
            </li>

    </section>
    <!-- /.sidebar -->
</aside>