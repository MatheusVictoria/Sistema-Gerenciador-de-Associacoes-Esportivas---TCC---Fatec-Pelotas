
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
                        <a class="btn btn-block btn-primary" role="button" data-toggle="collapse" href="#cad" aria-expanded="false" aria-controls="collapseExample">Cadastros</a>
                        <div class="collapse" id="cad" aria-expanded="true">
                            <div class="well well-sm">

                                <li>
                                    <a href="<?= base_url('##') ?>">Aluno</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('##') ?>">Centro de Treinamento</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('##') ?>">Professor</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('##') ?>">Turma</a>
                                </li>

                            </div>
                        </div>
                        <a href="#list" class="btn btn-block btn-primary" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">Listas</a>
                        <div class="collapse" id="list" aria-expanded="true">
                            <div class="well well-sm">

                                <li>
                                    <a href="<?= base_url('categoria/listar') ?>">Aluno</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('marca/listar') ?>">Centro de Treinamento</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('produto/listar') ?>">Professores</a>
                                </li>
                                <hr class="btn-primary">
                                <li>
                                    <a href="<?= base_url('user') ?>">Turmas</a>
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