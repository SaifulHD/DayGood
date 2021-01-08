<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>DailyGoods</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/-Login-form-Page-BS4-.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/Loading-Page-Animation-Style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/Map-Clean.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/navbar-shoppingcart-ecommerce.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/untitled-1.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/untitled.css">
  <link rel="shortcut icon" href="<?= base_url(); ?>/img/fghfgh.ico" type="image/x-icon">
  <!-- <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/docs.theme.min.css">
 -->

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
  <link href="<?= base_url(); ?>/bootstrap-4.0.0/css/sb-admin-2.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <style>
    body {
      padding-top: 5rem;
    }

    .starter-template {
      padding: 3rem 1.5rem;
      text-align: center;
    }

    .img-profile {
      height: 2rem;
      width: 2rem;
    }

    .logo-navbar {
      height: 30px;
      padding-right: 25px;
    }

    .img-avatar {
      height: 300px;
    }

    .img-bukti {
      height: 40px;
    }
  </style>
</head>

<body class="bg-dark">

  <?= $this->include('navbar') ?>

  <!-- <main role="main" class="container"> -->

  <?= $this->renderSection('content') ?>

  <!-- </main> -->
  <!-- /.container -->
  <script src="<?= base_url(); ?>/jquery-3.5.1.min.js"></script>
  <script src="<?= base_url(); ?>/bootstrap-4.0.0/js/bootstrap.min.js"></script>


  <script src="<?= base_url(); ?>/assets/js/bs-init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/creative.js"></script>
  <script src="<?= base_url(); ?>/assets/js/Loading-Page-Animation-Style.js"></script>
  <?= $this->renderSection('script') ?>

</body>

</html>