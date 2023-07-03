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

  <?php $__env->startComponent('components.nav-bar'); ?>
  <?php echo $__env->renderComponent(); ?><?php /**PATH D:\xampp\htdocs\PizzaTube\resources\views/common/cabecalho.blade.php ENDPATH**/ ?>