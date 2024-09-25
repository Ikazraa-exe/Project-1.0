@extends('layouts-front.main')

@section('container')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade" style="background-image: url(img/dilmil-depan.jpg);">
            <div class="container position-relative">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Beranda</a></li>
                        <li class="current">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Blog Author Section -->
<section id="blog-author" class="blog-author section">
    <div class="container">
      <div class="author-container d-flex align-items-center">
        <img src="img/salis.jpg" class="rounded-circle flex-shrink-0" alt="">
        <div>
          <p>Oleh :</p>
          <h4>Letkol Chk Salis Alfian Wijaya, S.H.,M.H.</h4>
        </div>
      </div>
    </div>
  </section><!-- /Blog Author Section -->

           <!-- Values Section -->
        <section id="values" class="values section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="img/perkara-lgbt.png" class="img-fluid" alt="">
                            <h3>Politik Hukum Penyelesaian Perkara LGBT Di Lingkungan TNI</h3>
                            
                            <hr>
                            <a href="https://drive.google.com/file/d/1QAL0e4ydkrkC_sys_Hs4kuM_PDxwRc4U/view" class="readmore stretched-link"><span>Silahkan klik disini untuk Membaca</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="img/perubahan-ekonomi.png" class="img-fluid" alt="">
                            <h3>Pengaruh Perubahan Ekonomi Global Terhadap Perkembangan Hukum di Indonesia</h3>
                            <hr>
                            <a href="https://drive.google.com/file/d/1Qu1ZgfxxupO8v4HchC4oFMST07EbnM5I/view" class="readmore stretched-link"><span>Silahkan klik disini untuk Membaca</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="img/penjatuhan-pidana.png" class="img-fluid" alt="">
                            <h3>Implikasi Penjatuhan Pidana Tambahan Pemecatan Terhadap Pidana Pokok Penjara
                            </h3>
                            <hr>
                            <a href="https://drive.google.com/file/d/1pfDeWsaf565G_KAoEXrs5GnxOQVtYJk4/view" class="readmore stretched-link"><span>Silahkan klik disini untuk Membaca</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    
                </div>

            </div>

        </section><!-- /Values Section -->
@endsection