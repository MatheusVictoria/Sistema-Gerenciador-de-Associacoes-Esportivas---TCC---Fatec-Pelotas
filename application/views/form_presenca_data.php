<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Listas
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Lista Presença </a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Seleciona Data </a></li>
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

                        <form role="form" method="post" action="<?= base_url('Turma/lista_presenca') ?>" enctype="multipart/form-data">

                            <div class="box-body">

                                <div class="form-group col-lg-6 ">
                                    <label for="data_inicio">Data de inicio:</label>
                                    <input type="date" class="form-control timepicker" id="pesquisa" name="pesquisa" value="<?= set_value('data_inicio') ?>" />
                                </div>

                                <div class="box-footer col-lg-offset-2 ">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary btn-flat col-xs-4">Pesquisar</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    </div>
    <!-- /.row (main row) -->

</section>
<!-- /.content -->