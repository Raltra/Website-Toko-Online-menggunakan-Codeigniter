<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Jekyll v3.8.6" />
    <title><?= isset($title) ? $title : 'CIShop'; ?></title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/"
    />

    <!-- fontawesome css -->
    <link rel="stylesheet" href="<?= base_url('assets/libs/fontawesome/css/all.min.css') ?>" />

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/libs/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />

    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>" />

    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      href="/docs/4.4/assets/img/favicons/apple-touch-icon.png"
      sizes="180x180"
    />
    <link
      rel="icon"
      href="/docs/4.4/assets/img/favicons/favicon-32x32.png"
      sizes="32x32"
      type="image/png"
    />
    <link
      rel="icon"
      href="/docs/4.4/assets/img/favicons/favicon-16x16.png"
      sizes="16x16"
      type="image/png"
    />
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json" />
    <link
      rel="mask-icon"
      href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg"
      color="#563d7c"
    />
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico" />
    <meta
      name="msapplication-config"
      content="/docs/4.4/assets/img/favicons/browserconfig.xml"
    />
    <meta name="theme-color" content="#563d7c" />
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">CIShop</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"
                >Home <span class="sr-only">(current)</span></a
                >
            </li>
            <li class="nav-item dropdown">
                <a
                href="#"
                class="nav-link dropdown-toggle"
                id="dropdown-1"
                data-toggle="dropdown"
                aria-haspopup="true"
                >Manage</a
                >

                <div class="dropdown-menu" aria-labelledby="dropdown-1">
                <a href="<?= base_url('category') ?>" class="dropdown-item">Kategori</a>
                <a href="<?= base_url('product') ?>" class="dropdown-item">Produk</a>
                <a href="admin-order.html" class="dropdown-item">Order</a>
                </div>
            </li>
            </ul>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link"
                ><i class="fas fa-shopping-cart"></i> Cart(0)</a
                >
            </li>
            <?php if(!$this->session->userdata('is_login')): ?>
            <li class="nav-item">
                <a href="<?= base_url('login') ?>" class="nav-link">Login</a>
            </li>
            <li class="nav-item"><a href="<?= base_url('register') ?>" class="nav-link">Register</a></li>
            <?php else : ?>
            <li class="nav-item dropdown">
                <a
                href="#"
                class="nav-link dropdown-toggle"
                id="dropdown-2"
                data-toggle="dropdown"
                aria-haspopup="true"
                ><?= $this->session->userdata('name') ?></a
                >

                <div class="dropdown-menu" aria-labelledby="dropdown-2">
                <a href="profile.html" class="dropdown-item">Profile</a>
                <a href="orders.html" class="dropdown-item">Orders</a>
                <a href="<?= base_url('logout') ?>" class="dropdown-item">Logout</a>
                </div>
            </li>
            <?php endif ?>
            </ul>
        </div>
      </div>
    </nav>

    <?php $this->load->view($page); ?>

    <script src="<?= base_url('assets/libs/jquery/jquery-3.5.0.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
  </body>
</html>