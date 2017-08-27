<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Visualizar dados do Professor
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Listas </a></li>
            <li><a href="#">Professores</a></li>
            <li><a href="#">Visualizar</a></li>
        </ol>
    </section>
    <!-- right col -->
    <div>
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div >
                    <!-- general form elements -->
                    <div class="box box-primary">

                        <div class="box-body">

                            <input type="hidden" id="id" name="id" value="<?= $professor->id ?>">

                            <div class="col-lg-6">
                                <div class="box box-primary">
                                    <div class="box-body box-profile">
                                        <img class="profile-user-img img-responsive img-circle" height="70px" width="70px" src="" alt="Foto">

                                        <h3 class="profile-username text-center"><?= $professor->nome ?></h3>

                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>RG</b> <p class="pull-right"><?= $professor->rg ?></p>
                                            </li>
                                            <li class="list-group-item">
                                                <b>CPF</b> <p class="pull-right"><?= $professor->cpf ?></p>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Modalidade</b> <p class="pull-right">???</p>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Ativo</b> <p class="pull-right">
                                                    <?php
                                                    if ($professor->ativo == 1) {
                                                        echo "sim";
                                                    } else {
                                                        echo "não";
                                                    }
                                                    ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="box box-primary">
                                    <div class="box-body box-profile">
                                        <strong><i class="fa fa-book margin-r-5"></i> Graduação </strong>

                                        <p class="text-muted"> <?= $professor->graduacao_id ?> </p>

                                        <hr>
                                        <strong><i class="fa fa-envelope margin-r-5"></i> E-mail </strong>

                                        <p class="text-muted"> <?= $professor->email ?> </p>

                                        <hr>

                                        <strong><i class = "fa fa-map-marker margin-r-5"></i> Endereço</strong>

                                        <p class = "text-muted"><?= $professor->endereco_id . " , " . $professor->numero . " , " . $professor->cidade_id . " , " . $professor->estado_id ?></p>

                                        <hr>

                                        <strong><i class="fa fa-phone margin-r-5"></i> Telefone</strong>

                                        <p ><?= $professor->telefone ?> </p>

                                        <hr>

                                        <strong><i class="fa fa-venus-mars margin-r-5"></i> Sexo </strong>

                                        <p><?php
                                            if ($professor->sexo == "M") {
                                                echo "Masculino";
                                            } else {
                                                echo "Feminino";
                                            }
                                            ?></p></p>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>

                            <a href="<?= base_url('listar_professor') ?>" class="btn btn-primary btn-block"><b>Voltar para lista</b></a>

                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>