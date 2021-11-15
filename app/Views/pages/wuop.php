<?= $this->extend('layout/templates') ?>

<?= $this->section('content')?>
<!-- Content 1 -->
<section class="page-section2">
    <div class="container">
        <div class="page-content">
            <h1 class="page-header">What's Unique On Pangandaran?</h1>
            <div class="row col-lg-12 col-5 col-sm-4 col-md-12 align-self-center">
                <div class="col card-gallery mb-5">
                    <a class="sub-judul" href="<?php echo base_url('/wuop/kuliner')?>"><img src="/assets/img/destinasi/1O2A0200.jpg" class="card-img mb-4" alt="...">
                        <div class="sub-judul desc">
                            Kuliner Pangandaran 
                        </div>
                    </a>
                </div>
                <div class="col card-gallery mb-5">
                    <a class="sub-judul" href="<?php echo base_url('/wuop/budaya')?>">
                        <img src="/assets/img/destinasi/1O2A0200.jpg" class="card-img mb-4" alt="...">
                        <div class="sub-judul desc">
                            Budaya Pengandaran
                        </div>
                    </a>
                </div>
                <div class="col card-gallery mb-5">
                    <a href="<?php echo base_url('/wuop/hidden_gems')?>" class="sub-judul">
                        <img src="/assets/img/destinasi/1O2A1347.jpg" class="card-img mb-4" alt="...">
                        <div class="sub-judul desc">
                            Hidden Gems
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Content 1 -->
<?= $this->endSection()?>