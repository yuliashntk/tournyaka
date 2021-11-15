<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

  <!-- Google Fonts  -->
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Artifika&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
  
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

  <!-- CSS Owl Carousel -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css') ?>">

  <title>Tournyaka</title>
</head>

<body>

  <?= $this->include('layout/navbar') ?>

  <?= $this->renderSection('content'); ?>

  <!-- Footer -->
  <section class="footer" id="contact">
    <div class="container">
      <div class="page-content">
        <div class="row-content">
          <div class="col-content">
            <h5 class="title">Info</h5>
            <a class="description" href="<?php echo base_url('/destinasi') ?>">Destinasi Wisata</a>
          </div>
          <div class="col-content">
            <h5 class="title">Perusahaan</h5>
            <a class="description" href="<?php echo base_url('/tentang_kami') ?>">Tentang Kami</a>
            <a class="description" href="<?php echo base_url('/kontak') ?>">Kontak</a>
            <a class="description" href="<?php echo base_url('/kerja_sama') ?>">Kerja Sama</a>
          </div>
          <div class="col-content">
            <h5 class="title">Bantuan</h5>
            <a class="description">Kebijakan Privasi</a>
            <a class="description">Syarat dan Ketentuan</a>
          </div>
          <div class="col-content">
            <h5 class="title">Sosial Media</h5>
            <a class="description">Facebook</a>
            <a class="description">Instagram</a>
            <a class="description">Whatsapp</a>
          </div>
        </div>
        <div class="row-content">
          <div class="col-content divider-footer">
            <hr class="divider">
          </div>
          <div class="col-content logo-footer">
            <a class="logo-footer">
              <img class="logo" src="assets/img/Logo.png" alt="">
            </a>
          </div>
          <div class="col-content divider-footer">
            <hr class="divider">
          </div>
        </div>

        <div class="row-content">
          <div class="col-content align-items-center">
            <h5 class="title">© 2021 Tournyaka</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Footer -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <!-- Script JS -->
  <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/scripts.js') ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>