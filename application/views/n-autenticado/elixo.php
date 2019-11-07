<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Landing Page - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />

  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/css/landing-page.min.css') ?> " rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">E-lixo </a>
      <a class="btn btn-primary" href="#">Logar</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"> </div>
    <div class="container">
      <div class="row">
           <div class="col-xl-9 mx-auto">
           
          <h1 class="mb-5">Saiba mais sobre o E-lixo</h1>
          
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-3"> 
              <button type="submit" class="btn btn-block btn-lg btn-primary">Saiba mais</button>
              </div> 
             
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-12">
        <h3>Tabela de equipamentos</h3>
        <br>
        <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Equipamento</th>
                  <th scope="col">Sitação</th>
                  <th scope="col">Entrege</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Notebook</td>
                  <td>Consertado</td>
                  <td>Em espera</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Tablet</td>
                  <td>Em conserto</td>
                  <td> -- </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Multimetro</td>
                  <td>Consertado</td>
                  <td>Aguardando</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Teclado</td>
                  <td>Em conserto</td>
                  <td> -- </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Controle</td>
                  <td>Consertado</td>
                  <td>Entregue</td>
                </tr>
                
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </section>
  <br>
  <!-- Image Showcases -->
  <br>
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?= base_url('assets/images/bg-showcase-1.jpg')?>);"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>O que é o E-lixo?</h2>
          <p class="lead mb-0">O E-Lixo se constitui em um espaço de prática profissional aos estudantes dos cursos técnicos em Eletrônica, Informática e Manutenção e Suporte em Informática e promove, ainda, treinamentos, palestras e pesquisas relacionadas ao tema. A iniciativa oferece também assistência técnica a servidores e alunos do Campus no que diz respeito a equipamentos eletroeletrônicos.</p>
        </div>
      </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
        <div class="col-lg-12 order-lg-1 my-auto showcase-text">
          <h2>Notícias</h2>
          <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">What people are saying...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Ready to get started? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/js/jquery/jquery.min.js') ?>"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
