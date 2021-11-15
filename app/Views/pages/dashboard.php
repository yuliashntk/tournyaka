<?= $this->extend('layout/templates') ?>

<?= $this->section('content') ?>
<!-- Header -->
<div class="masthead text-white" style="background-image: url(/assets/img/bg.jpg);">
  <div class="masthead-gradient"></div>
  <div class="container">
    <div class="heading">
      <div class="heading-text">
        <h1 class="display-1 pb-2 text-white">tournyaka</h1>
        <h6 class="pb-4 display-text">Tournyaka merupakan sebuah platform pariwisata berbasis digital dengan konsep smart tourism yang memudahkan wisatawan untuk mendapatkan layanan jasa pariwisata di Pangandaran</h6>
        <a class="btn btn-header btn-warning" href="<?php echo base_url('/mengapa_pilih_pangandaran') ?>">Ayo Berangkat!</a>
      </div>
    </div>
  </div>
</div>
<!-- End Header -->

<!-- Content 1 -->
<section class="page-section1">
  <div class="container">
    <div class="page-content">
      <h5 class="page-text">Tournyaka merupakan sebuah platform pariwisata yang menyediakan berbagai kebutuhan wisatawan dalam berwisata ke Pangandaran seperti layanan pemandu wisata (<i>tour guide</i>), paket wisata, dan rencana perjalanan (<i>iteneraty planner</i>) yang menawarkan pengalaman yang lebih personal dimana wisatawan dapat mengatur rencana perjalanan ke berbagai destinasi wisata Pangandaran yang diinginkan.</h5>
      <a>
        <img class="logo" src="assets/img/Logo.png" alt="">
      </a>
    </div>
  </div>
</section>
<!-- End Content 1 -->

<!-- Content 2 -->
<section class="page-section2">
  <div class="container">
    <div class="page-content">
      <h1 class="page-header">Mengapa harus tournyaka?</h1>
      <div class="row-content">
        <!-- Details 1 -->
        <a class="rounded-icon">
          <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 10H24L21 6L18 10ZM18 14H24L21 18L18 14Z" fill="#D6B1FF"/>
                <path d="M1 0H7V24H1C0.734784 24 0.480429 23.8946 0.292892 23.7071C0.105356 23.5196 0 23.2652 0 23V1C0 0.734784 0.105356 0.480429 0.292892 0.292892C0.480429 0.105356 0.734784 0 1 0Z" fill="#8C30F5"/>
                <path d="M9 0H15C15.2652 0 15.5196 0.105356 15.7071 0.292892C15.8946 0.480429 16 0.734784 16 1V23C16 23.2652 15.8946 23.5196 15.7071 23.7071C15.5196 23.8946 15.2652 24 15 24H9V0Z" fill="#2EC5CE"/>
              </svg> -->
        </a>
        <div class="details">
          <h5 class="headline">Liburan sesuai mood kamu</h5>
          <a class="description">Tournyaka akan memberikan rekomendasi tempat wisata dan suasana liburan yang sesuai dengan suasana hati kamu.</a>
        </div>

        <!-- details 2 -->
        <a class="rounded-icon">
          <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 24H12C11.7348 24 11.4804 23.8946 11.2929 23.7071C11.1054 23.5196 11 23.2652 11 23V21C11 20.7348 11.1054 20.4804 11.2929 20.2929C11.4804 20.1054 11.7348 20 12 20H21C21.2652 20 21.5196 20.1054 21.7071 20.2929C21.8946 20.4804 22 20.7348 22 21V23C22 23.2652 21.8946 23.5196 21.7071 23.7071C21.5196 23.8946 21.2652 24 21 24Z" fill="#D6B1FF"/>
                <path d="M21 0H3C2.73478 0 2.48043 0.105356 2.29289 0.292892C2.10536 0.480429 2 0.734784 2 1V3C2 3.26522 2.10536 3.51957 2.29289 3.70711C2.48043 3.89464 2.73478 4 3 4H21C21.2652 4 21.5196 3.89464 21.7071 3.70711C21.8946 3.51957 22 3.26522 22 3V1C22 0.734784 21.8946 0.480429 21.7071 0.292892C21.5196 0.105356 21.2652 0 21 0Z" fill="#2EC5CE"/>
                <path d="M21 6H3C2.73478 6 2.48043 6.10536 2.29289 6.29289C2.10536 6.48043 2 6.73478 2 7V17C2 17.2652 2.10536 17.5196 2.29289 17.7071C2.48043 17.8946 2.73478 18 3 18H21C21.2652 18 21.5196 17.8946 21.7071 17.7071C21.8946 17.5196 22 17.2652 22 17V7C22 6.73478 21.8946 6.48043 21.7071 6.29289C21.5196 6.10536 21.2652 6 21 6Z" fill="#8C30F5"/>
              </svg>                   -->
        </a>
        <div class="details">
          <h5 class="headline">Bikin nyesel</h5>
          <a class="description">Kamu akan auto nyesel deh kalo ke pangandaran tanpa ditemani Tournyaka</a>
        </div>
      </div>

      <div class="row-content">
        <!-- details 3 -->
        <a class="rounded-icon">
          <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.6 1.2C23.4 1 23 1 22.7 1L17 2.7V22.8L23.3 21C23.7 20.9 24 20.5 24 20V2C24 1.7 23.9 1.4 23.6 1.2Z" fill="#D6B1FF"/>
                <path d="M15 2.69995L9 1.19995V21.2999L15 22.7999V2.69995Z" fill="#2EC5CE"/>
                <path d="M7 1.19995L0.700001 2.99995C0.300001 3.19995 0 3.59995 0 3.99995V22C0 22.2999 0.0999996 22.5999 0.4 22.7999C0.6 22.9 0.8 23 1 23H1.3L7 21.2999V1.19995Z" fill="#8C30F5"/>
              </svg>          -->
        </a>
        <div class="details">
          <h5 class="headline">Banyak Pilihan dan gak ribet</h5>
          <a class="description">Tournyaka menyediakan beragam trip ke berbagai tempat wisata di Pangandaran yang bisa kamu custom sesuai keinginan kamu</a>
        </div>

        <!-- details 4 -->
        <a class="rounded-icon">
          <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 10H2C1.73478 10 1.48043 9.89464 1.29289 9.70711C1.10536 9.51957 1 9.26522 1 9V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H9C9.26522 1 9.51957 1.10536 9.70711 1.29289C9.89464 1.48043 10 1.73478 10 2V9C10 9.26522 9.89464 9.51957 9.70711 9.70711C9.51957 9.89464 9.26522 10 9 10Z" fill="#8C30F5"/>
                <path d="M9 23H2C1.73478 23 1.48043 22.8946 1.29289 22.7071C1.10536 22.5196 1 22.2652 1 22V15C1 14.7348 1.10536 14.4804 1.29289 14.2929C1.48043 14.1054 1.73478 14 2 14H9C9.26522 14 9.51957 14.1054 9.70711 14.2929C9.89464 14.4804 10 14.7348 10 15V22C10 22.2652 9.89464 22.5196 9.70711 22.7071C9.51957 22.8946 9.26522 23 9 23Z" fill="#8C30F5"/>
                <path d="M13 2H23V4H13V2Z" fill="#2EC5CE"/>
                <path d="M23 15H13V17H23V15Z" fill="#2EC5CE"/>
                <path d="M23 20H13V22H23V20Z" fill="#D6B1FF"/>
                <path d="M23 7H13V9H23V7Z" fill="#D6B1FF"/>
              </svg>   -->
        </a>
        <div class="details">
          <h5 class="headline">Pengalaman liburan yang lebih personal</h5>
          <a class="description">Rencana perjalanan diberikan sesuai dengan keinginan kamu, pastinya kamu akan mendapatkan pengalaman liburan yang lebih personal</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Content 2 -->

<!-- Content 3 -->
<section class="page-section3">
  <div class="container">
    <div class="page-content">
      <h1 class="page-header">Destinasi Terbaik</h1>
      <a class="description">Di Pangandaran banyak loh destinasi yang bisa bikin kamu nyaman dan ngelupain masalah yang lagi kamu hadapin.</a>
      <div class="row-content mt-4">
        <div class="owl-carousel owl-theme">
          <div class="ms-2 me-2">
            <div class="card-destinasi">
              <img src="<?php echo base_url('assets/img/pangandaran.png') ?>" class="card-img" alt="...">
              <div class="card-body">
                <h4 class="card-title">Pangandaran</h4>
                <p class="card-text">Pasti kalo wisata satu ini semua orang pada tau yah, pantai Pangandaran yang menjadi salah satu ikon Pangandaran mungkin bisa jadi destinasi pilihanmu.</p>
              </div>
            </div>
          </div>

          <div class="ms-2 me-2">
            <div class="card-destinasi">
              <img src="<?php echo base_url('assets/img/batukaras.png') ?>" class="card-img" alt="...">
              <div class="card-body">
                <h4 class="card-title">Batukaras</h4>
                <p class="card-text">Pantai yang punya julukan “little Bali in Java” ini bisa jadi salah satu pilihan destinasi kamu waktu liburan di Pangandaran.</p>
              </div>
            </div>
          </div>

          <div class="ms-2 me-2">
            <div class="card-destinasi">
              <img src="<?php echo base_url('assets/img/green_canyon.png') ?>" class="card-img" alt="...">
              <div class="card-body">
                <h4 class="card-title">Batu Hiu</h4>
                <p class="card-text">Siapa sih yang gatau tempat wisata satu ini? Batu Hiu bisa jadi pilihan terbaik kamu selagi di Pangandaran sambil menikmati hujan abadi.</p>
              </div>
            </div>
          </div>

          <div class="ms-2 me-2">
            <div class="card-destinasi">
              <img src="<?php echo base_url('assets/img/green_canyon.png') ?>" class="card-img" alt="...">
              <div class="card-body">
                <h4 class="card-title">Green Canyon</h4>
                <p class="card-text">Siapa sih yang gatau tempat wisata satu ini? Green Canyon bisa jadi pilihan terbaik kamu selagi di Pangandaran sambil menikmati hujan abadi.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Content 3 -->
<?= $this->endSection() ?>