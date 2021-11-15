<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container-fluid" id="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/destinasi') ?>">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
        <div class="navbar-brand">
            <a class="" href="<?php echo base_url('/') ?>">Tournyaka</a>
        </div>
        <?php $request = \Config\Services::request();
        $uri = $request->uri;
        if ($uri->getSegment(1) == 'login' || $uri->getSegment(1) == 'register') :
        ?>
            <ul></ul>
        <?php else : ?>
            <ul class="navbar-nav">
                <?php if (logged_in()) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= user()->username ?>
                            <img src="<?= base_url('/assets/img/user/' . user()->user_image) ?>" width="40" height="40" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="btn btn-warning" href="<?= base_url('login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning" href="<?= base_url('register') ?>">Daftar</a>
                    </li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>
        <button type="button" class="btn btn-nav btn-outline-light" data-bs-toggle="modal" data-bs-target="#navModal"><i class="fas fa-list fa-lg"></i></button>
    </div>
</nav>
<!-- End Navbar -->

<!-- Modal Navigasi -->
<div class="modal nav-modal fade" id="navModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Navigasi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row mobile-nav bg-secondary">
                <?php if ($uri->getSegment(1) == 'login' || $uri->getSegment(1) == 'register') : ?>
                    <div class="side-account">
                        <a href="<?= base_url('login') ?>" class="account-link">
                            <div class="rounded-account">
                                <i class="fas fa-user fa-2x"></i>
                            </div>
                            <h6 class="account-link">Login</h6>
                        </a>
                    </div>
                    <div class="side-account">
                        <a href="<?= base_url('register') ?>" class="account-link">
                            <div class="rounded-account">
                                <i class="fas fa-edit fa-2x"></i>
                            </div>
                            <h6 class="account-link">Daftar</h6>
                        </a>
                    </div>
                <?php else : ?>
                    <?php if (logged_in()) : ?>
                        <div class="row">
                            <div class="col col-3">
                                <img src="<?= base_url('/assets/img/user/' . user()->user_image) ?>" width="40" height="40" class="rounded-circle">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <h6 class="account-link"><?= user()->username ?></h6>
                                </div>
                                <div class="row">
                                    <a class="account-link" href="<?= base_url('logout') ?>">
                                        <h6 class="account-link">Logout</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="side-account">
                            <a href="<?= base_url('login') ?>" class="account-link">
                                <div class="rounded-account">
                                    <i class="fas fa-user fa-2x"></i>
                                </div>
                                <h6 class="account-link">Login</h6>
                            </a>
                        </div>
                        <div class="side-account">
                            <a href="<?= base_url('register') ?>" class="account-link">
                                <div class="rounded-account">
                                    <i class="fas fa-edit fa-2x"></i>
                                </div>
                                <h6 class="account-link">Daftar</h6>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="modal-body">
                <a class="side-link" href="<?php echo base_url('/tentang_kami') ?>">Tentang Kami</a>
                <a class="side-link" href="<?php echo base_url('/destinasi') ?>">Destinasi Wisata</a>
                <a class="side-link" href="<?php echo base_url('/pangandaran’s_trivia') ?>">Pangandaran’s Trivia</a>
                <a class="side-link" href="<?php echo base_url('/wuop') ?>">What's Unique On Pangandaran?</a>
                <a class="side-link" href="<?php echo base_url('/get_to_know') ?>">Get to Know Pangandaran</a>
                <div class="side-content">
                    <a>Tournyaka adalah platform yang berorientasi kepada kualitas pelayanan terbaik kepada konsumen yang bergerak dalam bidang pelayanan jasa pariwisata.</a>
                </div>
                <div class="side-footer">
                    <a class="side-sosmed" href=""><i class="fab fa-instagram"></i></a>
                    <a class="side-sosmed" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="side-sosmed" href=""><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal navigasi-->

<!-- modal forgot pass-->
<div class="modal sign-modal fade" id="forgotModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h5><img class="logo-tournyaka" src="assets/img/Logo.png" alt="">&nbsp;tournyaka</h5>
                </div>
                <button type="button" class="btn-close btn-close-dark align-self-start" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mx-auto mb-3">
                    <input type="email" class="form-control" aria-label="input" placeholder="Email">
                </div>
            </div>
            <div class="modal-footer">
                <div class="row mx-auto justify-content-center">
                    <a href="#" class="btn btn-header">kirim</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal forgot pass -->