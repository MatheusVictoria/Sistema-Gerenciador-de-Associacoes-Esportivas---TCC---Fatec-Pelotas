
<!-- Menu lateral, será exibido em todas as paginas do sistema completando o tempalte basico -->
<div class="section containerMenuLateral body">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-2 text-justify">
                <div class="panel col-lg-12">
                    <div class="row">
                        <div class="col-lg-offset-2">
                            <h3 class="h3menu">Menu</h3> 
                        </div>
                    </div>

                    <hr class="large btn-primary" />

                    <ul class="nav nav-pills nav-stacked menu">
                        <a class="btn btn-block btn-primary" role="button" data-toggle="collapse" href="#dash" aria-expanded="false" aria-controls="collapseExample">Dashboard</a>
                        <div class="collapse" id="dash" aria-expanded="true">
                            <div class="well well-sm">

                                <li>
                                    <a href="<?= base_url() ?>">Dashboard</a>
                                </li>

                            </div>
                        </div>

                        <a class="btn btn-block btn-primary" role="button" data-toggle="collapse" href="#cad" aria-expanded="false" aria-controls="collapseExample">Cadastros</a>
                        <div class="collapse" id="cad" aria-expanded="true">
                            <div class="well well-sm">

                                <li>
                                    <a href="<?= base_url('form_aluno') ?>">Aluno</a>
                                </li>
                                <hr class="btn-primary">

                                <li>
                                    <a href="<?= base_url('form_centro_treinamento') ?>">Centro de Treinamento</a>
                                </li>
                                <hr class="btn-primary">

                                <li>
                                    <a href="<?= base_url('form_graduacao') ?>">Graduação</a>
                                </li>
                                <hr class="btn-primary">

                                <li>
                                    <a href="<?= base_url('form_professor') ?>">Professor</a>
                                </li>
                                <hr class="btn-primary">

                                <li>
                                    <a href="<?= base_url('form_tipo') ?>">Tipo de Usuário</a>
                                </li>
                                <hr class="btn-primary">

                                <li>
                                    <a href="<?= base_url('form_turma') ?>">Turma</a>
                                </li>
                                <hr class="btn-primary">

                                <li>
                                    <a href="<?= base_url('form_usuario') ?>">Usuário</a>
                                </li>

                            </div>
                        </div>

                        <a href="#list" class="btn btn-block btn-primary" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">Listas</a>
                        <div class="collapse" id="list" aria-expanded="true">
                            <div class="well well-sm">

                                <li>
                                    <a href="<?= base_url('listar_aluno') ?>">Aluno</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('listar_ct') ?>">Centro de Treinamento</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('listar_graduacao') ?>">Graduação</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('listar_professor') ?>">Professores</a>
                                </li>
                                <hr class="btn-primary">

                                <li>
                                    <a href="<?= base_url('listar_tipo') ?>">Tipo de Usuário</a>
                                </li>
                                <hr class="btn-primary">

                                <li>
                                    <a href="<?= base_url('listar_turmas') ?>">Turmas</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('listar_usuario') ?>">Usuários</a>
                                </li>
                            </div>
                        </div>
                        <a href="#relat" class="btn btn-block btn-primary" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">Relatórios</a>
                        <div class="collapse" id="relat" aria-expanded="true">
                            <div class="well well-sm">

                                <li>
                                    <a href="<?= base_url('categoria/listar') ?>">Centro de Treinamento</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('marca/listar') ?>">Turmas</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('produto/listar') ?>">Pagamentos</a>
                                </li>

                            </div>
                        </div>
                        <a href="#site" class="btn btn-block btn-primary" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">Site</a>
                        <div class="collapse" id="site" aria-expanded="true">
                            <div class="well well-sm">

                                <li>
                                    <a href="<?= base_url('#') ?>">Cadastrar Patrocinador</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('#') ?>">Novo Evento</a>
                                </li>

                            </div>
                        </div>
                        <a href="#util" class="btn btn-block btn-primary" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">Regsitro e Lançamento</a>
                        <div class="collapse" id="util" aria-expanded="true">
                            <div class="well well-sm">

                                <li>
                                    <a href="<?= base_url('categoria/listar') ?>">Lançar Pagamento</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('marca/listar') ?>">Registro de aula</a>
                                </li>

                            </div>
                        </div>

                    </ul>
                </div>
            </div>