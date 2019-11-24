<!DOCTYPE html>
<html lang="pt">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="GAEL é um sistema gerenciador de equipamentos. Em palavras mais específicas: resíduos eletroeletrônicos">
    <meta name="author" content="GAEL - IFRN">
    <meta name="keywords" content="IFRN, Sistema, Integrado, Gerenciamento, resíduos, eletroeltrônicos, bioeconomia, projeto, integrador, E-lixo">
   
   

    <style>
        .card-boots{
            margin-bottom: 30px;
        }
       
    </style>

    <!-- Title Page-->
    <title>
    
     <?=  $title;?>
    </title>
    
    <!--flat icon-->
    <link rel="icon" type="image/icon" href="<?php echo base_url('assets/images/gael.ico')?>" sizes="16x16px">
    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/css/font-face.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css');?>" rel="stylesheet" media="all">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap-theme.css')?>" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/vendor/animsition/animsition.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/wow/animate.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/slick/slick.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/select2/select2.min.css');?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css');?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/css/theme.css');?>" rel="stylesheet" media="all">

</head>

<body class="animation">


  <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?= base_url('index.php/gael/home');?>">
                            <img  class="logo-gael" src="<?= base_url('assets/images/gael.png');?>" alt="Logo gael"  />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                       
 

                       
                            <li class=" has-sub">
                            <a class="js-arrow" href="<?= base_url('index.php/gael/home') ?>">
                                <i class="fas fa-tachometer-alt"></i>Página inicial
                            </a>
                        </li>
                       <?php if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){ ?>
		
                        <li>
                            <a href="<?= base_url('index.php/gael/metas')?>">
                                <i class="fas fa-chart-bar"></i>Metas</a>
                        </li>

                       <?php }?>
                        <li>
                            <a href="<?= base_url('index.php/equipamento')?>">
                                <i class="fas fa-table"></i>Equipamentos</a>
                        </li>
                        <li>
                            <a href="<?= base_url('index.php/realizar_atividade_equipamento')?>">
                                <i class="fas fa-table"></i>Realizar atividade</a>
                        </li>
                        <li>
                            <a href="<?= base_url('index.php/OS/index')?>">
                                <i class="far fa-check-square"></i>Ordem de serviço</a>
                        
                        </li>
                        <li>
                            <a href="<?= base_url('index.php/login/logout')?>">
                            <i class="fas fa-power-off"></i>Sair</a>
                        
                        </li>
                        
                         </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="<?= base_url('index.php/gael/home');?>">
                    <img class="logo-gael" src="<?= base_url('assets/images/gael.png');?>" alt="Logo gael" />
                    
                </a>
                
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class=" has-sub">
                            <a class="" href="<?= base_url('index.php/gael/home') ?>">
                                <i class="fas fa-tachometer-alt"></i>Página inicial
                            </a>
                        </li>
                        <?php if($this->session->userdata('usuario_logado')['usuario_tipo']== "1"){ ?>
		
                            <li>
                                <a href="<?= base_url('index.php/gael/metas')?>">
                                    <i class="fas fa-chart-bar"></i>Metas</a>
                            </li>

                        <?php }?>
                        <li>
                            <a href="<?= base_url('index.php/equipamento')?>">
                                <i class="fas fa-table"></i>Equipamentos</a>
                        </li>
                        <li>
                            <a href="<?= base_url('index.php/realizar_atividade_equipamento')?>">
                                <i class="fas fa-table"></i>Realizar atividade</a>
                        </li>
                        <li>
                            <a href="<?= base_url('index.php/OS/index')?>">
                                <i class="far fa-check-square"></i>Ordem de serviço</a>
                        </li>
                        <li>
                            <a href="<?= base_url('index.php/login/logout')?>">
                            <i class="fas fa-power-off"></i>Sair</a>
                        
                        </li>
                     
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
   <!-- PAGE CONTAINER-->
   <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">

                                <div class="account-wrap " style="margin-left:100px;">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <?php if($foto == '' || $foto == NULL ){ ?>
                                                <img src="<?= base_url('assets/imagens-perfil/perfil-default.jpg') ?>" alt="Foto do perfil" />
                                                <?php }else{?>
                                                    <img src="<?= base_url('/').$foto; ?>" alt="Foto do perfil" />
                                                <?php }?>
                                        </div>
                                        <div class="content">
                                            <?php print_r($this->session->userdata('usuario_logado')['u_nome']);  ?>                                      
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                    <?php if($foto == '' || $foto == NULL ){ ?>
                                                <img src="<?= base_url('assets/imagens-perfil/perfil-default.jpg') ?>" alt="Foto do perfil" />
                                                <?php }else{?>
                                                    <img src="<?= base_url('/').$foto; ?>" alt="Foto do perfil" />
                                                <?php }?>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php print_r($this->session->userdata('usuario_logado')['u_nome']);  ?>
                                                        </a>
                                                    </h5>
                                                    <span class="email"><?php print_r($this->session->userdata('usuario_logado')['u_email']);  ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a  href="<?= base_url('index.php/usuario/profileEdit')?>">
                                                                <i class="fas fa-edit"></i>  Editar foto do perfil
                                                    </a>
                                                </div>
                                                
                                                
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo base_url('index.php/login/logout');?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>