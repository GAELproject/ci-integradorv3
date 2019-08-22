<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="theme-color" content="#4cd964">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/gael.ico')?>">

  <title>GAEL - Login</title>

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

 
</head>

<body class="">

  <div class="container">



    
    <form class="login-form form-login-container" action="<?php echo base_url('index.php/gael/home')?>">
      <div id="" class="login-wrap ">
        <p class="login-img"><img src="<?php echo base_url('assets/img/gael.png')?>" width="80"></i></p>
        <h4 class="text-center" style="color: black;">
          <strong>Sistema Integrado de Gerenciamento de Eletroeletrônicos</strong>  
        
        </h4 >
        <div class="input-group">
          <span class="input-group-addon blr"><i class="icon_profile"></i></span>
          <input type="text" class="form-control brr" placeholder="Login" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon blr"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control brr" placeholder="Senha">
        </div>
        <label style="color: black;" class="checkbox">
                <input  type="checkbox" value="remember-me">
                Lembrar
                <span  class="pull-right"> <a href="" style="color: black;">Esqueceu a senha?</a></span>
            </label>
          <button type="submit" class="text-light btn btn-success btn-lg btn-block br-5" >Logar </button>

      </div>
    </form>
    <div class="text-right">

    </div>
  </div>


</body>

</html>
