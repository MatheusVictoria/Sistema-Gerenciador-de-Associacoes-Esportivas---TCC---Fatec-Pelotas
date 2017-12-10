 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SGAE | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?= base_url('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css') ?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?= base_url('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css') ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/AdminLTE.min.css') ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/iCheck/square/blue.css') ?>">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <img  src="<?= base_url() ?>/assets/img/logo(assiaju).jpg" style="width: 100px; height: 100px">
                <a href="#"><b>SGAE</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <div class="col-lg-12">
                    <?php if ($erro): ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
                            <ul>
                                <?= $erro ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <p class="login-box-msg" style="font-size: 20px">Login</p>
                <form action="<?= base_url('home/logar') ?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" value="<?= set_value('email') ?>">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" id="captcha" name="captcha" class="form-control" placeholder="Captcha">
                    </div>
                    <div class="row">
                        <div class="form-group has-feedback">
                            <div class="col-lg-6" id="igmCaptcha">
                                <?= $captcha_image ?>
                            </div>
                            <div class="col-lg-6">
                                <button type="button" style="height: 50px" id="refresh" class="btn btn-default btn-block btn-flat fa fa-refresh"></button><br>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                        <!-- /.col -->
                        <div class="col-xs-4 right-side">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button><br>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="<?= base_url('assets/adminlte/bower_components/jquery/dist/jquery.min.js') ?>"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?= base_url('assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
        <!-- iCheck -->
        <script src="<?= base_url('assets/adminlte/plugins/iCheck/icheck.min.js') ?>"></script>
        <script>
            $(function(){ 
                var base_url = '<?=base_url() ?>';

                $('#refresh').on('click', function(){ 
                     $('#igmCaptcha').load(base_url + "Home/geraCaptcha/true"); 
                }); 
            });
    </script>
</body>
</html>
