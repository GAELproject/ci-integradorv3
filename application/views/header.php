<?php defined('BASEPATH') or exti('No direct script access allowed!'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistema para o gerenciamento de eletroeltrônicos">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="sistema, gael, e-lixo, ifrn, bioeconomia, resíduos sólidos">
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/gael.ico')?>">

  <title><?php echo $title;?></title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assets/css/app-44ca66281abd8380ac37e4333b51fe14.css')?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/pro.css')?>">
  <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assets/css/bootstrap-theme.css')?>" rel="stylesheet">
  <!--external css-->

  <!-- font icon -->
  <link href="<?php echo base_url('assets/css/elegant-icons-style.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?php echo base_url('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/assets/fullcalendar/fullcalendar/fullcalendar.css')?>" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?php echo base_url('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')?>" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css')?>" type="text/css">
  <link href="<?php echo base_url('assets/css/jquery-jvectormap-1.2.2.css')?>" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fullcalendar.css')?>">
  <link href="<?php echo base_url('assets/css/widgets.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style-responsive.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/xcharts.min.css')?>" rel=" stylesheet">
  <link href="<?php echo base_url('assets/css/jquery-ui-1.10.4.min.css')?>" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header white-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <!--logo end-->
      <a href="<?php echo base_url('index.php/gael/home')?>" class="logo">GAEL </a>

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
    
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li id="clique" class="dropdown">
            <a id="" data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url('assets/img/avatar1_small.jpg') ?>">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <i class=""></i>
                        </a>
            <ul id="apareca" class="dropdown-menu extended logout">
              <div id="" class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i>Meu perfil</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i>Caixa de mensagens</a>
              </li>

              <li>
                <a href="<?php echo base_url('');?>index.php/gael"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="<?php echo base_url('index.php/gael/home/')?>">
              <i class="icon_house_alt"></i>
                <span>Página inicial</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url('/index.php/gael/user')?>" class="">
              <i class="fa fa-user"></i>
              <span>Usuários</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url('/index.php/gael/metas')?>" class="">
                <i class="fas fa-exclamation"></i>
              <span>Metas</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url('/index.php/gael/metas')?>" class="">
                <i class="fas fa-tools"></i>
              <span>Equipamentos</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url('/index.php/gael/metas')?>" class="">
                <i class="fas fa-list"></i>
              <span>Ordens de serviço</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url('/index.php/gael/metas')?>" class="">
                <i class="fas fa-chart-line"></i>
              <span>Relatório de atividades</span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->

<!--###################### fim da barra de nvegação--->


      </div>
    </aside>
    <!--sidebar end-->

   <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i><?php echo $pagina; ?> </h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('')?>">Home</a></li>
              <li><i class="fa fa-laptop"></i><?php echo $pagina; ?></li>
            </ol>
          </div>
        </div>

