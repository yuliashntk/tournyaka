<?= $this->extend('layout/templates') ?>

<?= $this->section('content') ?>
<!-- Header -->
<div class="masthead sign text-white" style="background-image: url(/assets/img/bg.jpg);">
    <div class="masthead-gradient sign"></div>
    <div class="container">
        <div class="row">
            <div class="col sign">
                <h1 class="display-1 pb-2 text-white">tournyaka</h1>
                <h6 class="pb-4 display-text">Tournyaka merupakan sebuah platform pariwisata berbasis digital dengan konsep smart tourism yang memudahkan wisatawan untuk mendapatkan layanan jasa pariwisata di Pangandaran</h6>
            </div>
            <div class="col">
                <div class="card sign-modal">
                    <div class="card-body text-center">
                        <h1 class="card-title modal-title">Daftar</h1>
                        <div class="modal-body">
                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <form action="<?= route_to('register') ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="row mx-auto mb-3">
                                    <input type="text" class="form-control" name="fullname" aria-label="input" placeholder="Nama Lengkap">
                                </div>
                                <div class="row mx-auto mb-3">
                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                </div>
                                <div class="row mx-auto mb-3">
                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                </div>
                                <div class="row mx-auto mb-3">
                                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                </div>
                                <div class="row mx-auto">
                                    <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Ulangi Password" autocomplete="off">
                                </div>
                                <div class="row mt-4 mb-2 mx-auto justify-content-center">
                                    <button type="submit" class="btn btn-header">Daftar</button>
                                </div>
                            </form>
                            <div class="row mx-auto text-center">
                                <div class="col-auto">
                                    <a>Dengan mendaftar sebagai member Tournyaka saya setuju dengan </a><a class="link">Kebijakan Privasi</a><a> & <a class="link">Ketentuan Penggunaan</a> <a> Tournyaka </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header -->

<?= $this->endSection() ?>