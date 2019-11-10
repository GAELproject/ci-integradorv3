<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="theme-color" content="#4cd964">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/gael.ico')?>" width="20px">

  <title>GAEL - Login</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css')?>" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap-theme.css')?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('assets/css/elegant-icons-style.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style-responsive.css')?>" rel="stylesheet" />
  
</head>

<body>

  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-4"> 
      
      </div>
      <div class="col-sm-4" >
        <?php if ($this->session->flashdata('success') == TRUE):?>
            <div class="alert alert-danger">
              <h2><?= $this->session->flashdata('success')?></h2>
            </div>
            

        <?php endif;?>

        <?php if ($this->session->flashdata('error')):?>
          <div class="alert alert-danger" style="margin-bottom: -16px;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
            <h5><?= $this->session->flashdata('error')?></h5>
            
          </div>
          
        <?php endif;?>
        <script>
        $('.alert').alert();
        </script>
      </div>
      <div class="col-sm-4">
      </div>
    </div>

    <form class="login-form form-login-container mb-5" method="post" action="<?php echo base_url('index.php/login/autenticar')?>">
      <div id="" class="login-wrap" style="margin-top: -179px;">
        <p class="login-img"><img src="<?php echo base_url('assets/img/gael.png')?>" width="80"></i></p>
        <h4 class="text-center" style="color: black;">
          <strong>Sistema Integrado para o Gerenciamento de Resíduos Eletroeletrônicos</strong>  
        
        </h4 >
        <div class="input-group">
          <span class="input-group-addon blr ">
              <i class="fas fa-envelope-square mt-2 ml-2"></i>
          </span>
          <input type="text" class="form-control brr" name="u_email" placeholder="E-mail" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon blr"><i class="fas fa-lock mt-2 ml-2"></i></span>
          <input type="password" class="form-control brr" name="senha" placeholder="Senha">
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

  <script src="<?= base_url('assets/vendor/jquery-3.2.1.min.js')?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/vendor/bootstrap-4.1/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap-4.1/bootstrap.min.js')?>"></script>
</body>

</html>
