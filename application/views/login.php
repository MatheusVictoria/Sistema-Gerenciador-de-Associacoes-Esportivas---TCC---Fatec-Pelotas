<!DOCTYPE html>

<html lang="pt_BR">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <meta name="author" content="Matheus Silva Victória">


        <!-- CDN do Bootstrap -->

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

        <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <link	href="<?= base_url('assets/css/styleMenu.css') ?>"	rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->

    <!--[if lt IE 9]><script src="http://getbootstrap.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    </head>

    <body>    

        <div class="container">

            <div class="container">    
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Login</div>
                            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Esqueci minha senha</a></div>
                        </div>     

                        <div style="padding-top:30px" class="panel-body" >

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                            <form id="loginform" class="form-horizontal form-login" role="form" method="post" action="<?= base_url('home/logar') ?>">

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" type="email" class="form-control" id="email" name="email" value="" placeholder="E-mail" required autofocus autocomplete/>                                        
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required/>
                                </div>

                                <div style="margin-top:10px" class="form-group">

                                    <div class="col-sm-12 controls">
                                        <button id="btn-login"  href="home.xhtml" class="btn btn-block btn-primary ">Login  </button>
                                    </div>
                                </div>    
                            </form>     
                        </div>
                    </div>
                </div>
            </div>
            
    </body>
</html>