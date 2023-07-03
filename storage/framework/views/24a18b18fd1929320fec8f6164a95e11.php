<!DOCTYPE html>
<html lang="pt-br" class="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Pizza Tube</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <link rel="stylesheet" href="<?php echo e(asset('mdb/css/bootstrap.min.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset('mdb/css/mdb.min.css')); ?>">


  <style>

    html,
    body,
    header,
    .jarallax {
      height: 700px;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .jarallax {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .jarallax {
        height: 100vh;
      }
    }

    @media (min-width: 560px) and (max-width: 650px) {
      header .jarallax h1 {
        margin-bottom: .5rem !important;
      }
      header .jarallax h5 {
        margin-bottom: .5rem !important;
      }
    }

    @media (min-width: 660px) and (max-width: 700px) {
      header .jarallax h1 {
        margin-bottom: 1.5rem !important;
      }
      header .jarallax h5 {
        margin-bottom: 1.5rem !important;
      }
    }

    .top-nav-collapse {
      background-color: red !important;
    }

    .navbar:not(.top-nav-collapse) {
      background: transparent !important;
    }

    @media (max-width: 768px) {
      .navbar:not(.top-nav-collapse) {
        background: red !important;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
            background: #7283A7!important;
        }
    }

    footer.page-footer {
      background-color: #383838;
    }

    @media (max-width: 450px) {
      .display-3 {
        font-size: 3rem;
      }
    }

  </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar red">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
       <img height="25" class="" src="<?php echo e(asset('/img/logo.png')); ?>" >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(route('index')); ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('cardapio')); ?>">Cardapio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('sobre-nos')); ?>">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <?php if(auth()->guard()->guest()): ?>
                <a class="nav-link" href="<?php echo e(route('login')); ?>">Faça login</a>
          </li>
          <li class="nav-item">
                <?php if(Route::has('register')): ?>
                    <a class="nav-link" href="<?php echo e(route('register')); ?>">Registre-se</a>
                <?php endif; ?>
          <li class="nav-item">
            <?php else: ?>
                <p class="nav-link">Bem-vindo, <?php echo e(auth()->user()->name); ?></p>
          </li>
          <li class="nav-item">
                <form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="nav-link bg-transparent" style="border: none;">Logout</button>
                </form>
            <?php endif; ?>
        </li>
        <li class="nav-item">
          <?php if(auth()->guard()->guest()): ?>
          <?php if(Route::has('register')): ?>
          
          <?php endif; ?>
          <?php else: ?>
          <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
          <?php endif; ?>
</li>
        </ul>
        
      </div>
    </div>
  </nav>

    <main>
        <?php echo e($slot); ?>

    </main>

     <!--Rodapé-->
 <footer class="page-footer pt-4 mt-4 text-center text-md-left mdb-color red">

<!--rodapé Links-->
<div class="container">
  <div class="row">

    <!--primeira coluna-->
    <div class="col-md-3 mr-auto">
      <h5 class="text-uppercase mb-3">Pizza Tube</h5>
      <p>Avenida Salgado Filho NXXX.</p>
    </div>
    <!--/.primeira column-->

    <hr class="w-100 clearfix d-md-none">

    <!--segunda coluna-->
    <div class="col-md-2 ml-auto">
      <h5 class="text-uppercase mb-3">Contato</h5>
      <ul class="list-unstyled">
        <li>
          <a href="#!">pizzatube@emailtubpizzatube.com.br</a>
        </li>
        <li>
          <a href="https://web.whatsapp.com/">(11)99999-9999</a>
        </li>
        <li>
          <a href="#!">pizzatube.com</a>
        </li>
        
      </ul>
    </div>
    <!--/.Second column-->

    <hr class="w-100 clearfix d-md-none">


  </div>
</div>
<!--/.links de rodapé Links-->

<hr>

<!--Midias Sociais-->
<div class="social-section text-center">
  <ul class="list-unstyled list-inline">

    <li class="list-inline-item">
      <a class="btn-floating btn-fb">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>

  </ul>
</div>
<!--/.Social buttons-->

<!--Diretitos Autorais-->
<div class="footer-copyright py-3 text-center black">
  <div class="container-fluid">
    &copy; 2022 Copyright:
    <a href="#"> pizzatube.com </a>

  </div>
</div>
<!--/.Direitos autorais-->

</footer>
<!--/.rodapé-->


<!--  SCRIPTS  -->
<!-- JQuery -->
<script type="text/javascript" src="<?php echo e(asset('mdb/js/jquery.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('mdb/js/popper.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('mdb/js/bootstrap.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('mdb/js/mdb.min.js')); ?>"></script>
<script>
$(document).ready(() => {
  new WOW().init();
});
</script>
</body>

</html>
<?php /**PATH D:\xampp\htdocs\PizzaTube\resources\views/components/layout2.blade.php ENDPATH**/ ?>