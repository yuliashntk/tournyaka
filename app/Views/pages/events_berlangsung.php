<?= $this->extend('layout/templates') ?>

<?= $this->section('content') ?>
<!-- Header -->
<div class="matshead-text-white" style="background-image: url(/assets/img/bg.jpg);">
    <div class="matshead-gradient"></div>
    <div class="container">
        <div class="heading">
            <div class="heading-text">
                <h6 class="pb4 display-2">Tournyaka</h6>
                <h6 class="pb4 display-3">watch and follow virtual tour events</h6>
                </div>
            </div>
        </div>
    </div>
<!-- End Header -->


<!-- Content 1 -->
<section class="page-section1">
    <div class="container">
        <div class="page-content1">
            <a class="btn btn-middle btn-outline-warning">Paket Wisata</a>
            <a class="btn btn-middle btn-outline-warning">Hotel</a>
            <a class="btn btn-middle btn-outline-warning">Tourguide</a>
            <a class="btn btn-middle btn-outline-warning">Transportasi</a>
            <a class="btn btn-middle btn-outline-warning">itenerary</a>
            </div>
        </div>
    </div>
</section>
<!-- End Content 1 --> 

<!-- Content 2-->
<section class="page-section2">
    <div class="container">
        <div class="row-content1">
            <div class="col-content1 divider-content">
                <hr class="divider-events">
            </div>
            <div class="col-content1 divider-content">
                <h5 class="title">Event Berlangsung</h5>
            </div>
            <div class="col-content1 divider-content">
                <hr class="divider-events">
            </div>"
        </div>
        <div class="row-events">
            <div class="col">
                <h5>INFORMASI SEPUTAR TOURNYAKA</h5>
                <p>event kali ini akan membahas tempat wisata lain yang ada disekitar Pangandaran</p>
                <br>
                <br>
                <a class="icon-calendar">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-calendar2-event" viewBox="0 0 16 16">
                 <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                 <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                 <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                </svg>              -->
                </a>
                <h4>Minggu, 14 November 2021</h4>
                <a href="" class="btn btn-header btn-warning">JOIN HERE</a>
            </div>
            <div class="col">
                <img src="/assets/img/destinasi/1O2A9901.jpg" alt="events" class="img-fluid">
            </div>
        </div>
        <div class="row-events">
            <div class="col">
                <h5>INFORMASI SEPUTAR TOURNYAKA</h5>
                <p>event kali ini akan membahas tempat wisata lain yang ada disekitar Pangandaran</p>
                <br>
                <br>
                <a class="icon-calendar">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-calendar2-event" viewBox="0 0 16 16">
                 <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                 <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                 <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                </svg>              -->
                </a>
                <h4>Minggu, 14 November 2021</h4>
                <a href="" class="btn btn-header btn-warning">JOIN HERE</a>
            </div>
            <div class="col">
                <img src="/assets/img/destinasi/1O2A9901.jpg" alt="events" class="img-fluid">
            </div>
        </div>
        <a href="<?php echo base_url('/event_terlaksana') ?>" class="btn btn-footer btn-warning">Lihat Event Lainnya</a>
    </div>
</section>
<!-- End Content 2 -->
<?= $this->endSection() ?>


