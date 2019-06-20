<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/gael.ico')?>">

  <title>Sistema Integrado de Gerenciamento de Eletroeletrônicos - Login</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assets/css/bootstrap-theme.css')?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('assets/css/elegant-icons-style.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style-responsive.css')?>" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="">
      <div class="login-wrap">
        <p class="login-img"><img src="<?php echo base_url('assets/img/gael.png')?>" width="80"></i></p>
        <h4 class="text-center text-dark">
          Sistema Integrado de Gerenciamento de Eletroeletrônicos
        </h4 >
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Login" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Senha">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me">
                Lembrar
                <span class="pull-right"> <a href="gael/index.html">Esqueceu a senha?</a></span>
            </label>
        <a  class="text-light btn btn-primary btn-lg btn-block" href="<?php echo base_url('index.php/gael/home');?>">Login</a>
      </div>
    </form>
    <div class="text-right">

    </div>
  </div>


</body>

</html>
