<?php
$session = session();
?>
<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="color:black;border-bottom-style: none;height: 84px;filter: blur(0px);opacity: 1;">
  <!-- <a class="navbar-brand" href="#">DailyGoods</a> -->
  <img src="<?= base_url(); ?>/asset/images/logo.png" alt="logo" class="logo-navbar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-black" id="navbarsExampleDefault">
    <?php if ($session->get('isLoggedIn')) : ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url('home/index') ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php if (session()->get('role') == 0) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Barang</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?= site_url('barang/index') ?>">List Barang</a>
              <a class="dropdown-item" href="<?= site_url('barang/create') ?>">Tambah Barang</a>
            </div>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('transaksi/index') ?>">Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/index') ?>">User</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('etalase/index') ?>">Etalase</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('transaksi/daftar/') .  session()->get('id'); ?>">Daftar Transaksi Anda</a>
          </li>
        <?php endif ?>
      </ul>
    <?php endif ?>
    <div class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <?php if ($session->get('isLoggedIn')) : ?>
          <!-- <li class="nav-item">
            <a class="btn btn-success" href="<?= site_url('auth/logout') ?>">Logout</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-black-600 small"><?= session()->get('username'); ?></span>
              <img class="img-profile rounded-circle" src="<?= base_url(); ?>/img/<?= session()->get('avatar'); ?>">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="<?= site_url('auth/editprofile/') .  session()->get('id'); ?>">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                My Profile
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= site_url('auth/logout') ?>">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="btn btn-success" href="<?= site_url('auth/login') ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-success" href="<?= site_url('auth/register') ?>">Register</a>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>