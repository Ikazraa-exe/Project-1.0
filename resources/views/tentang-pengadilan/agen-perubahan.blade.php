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

        <!-- Values Section -->
        <section id="values" class="values section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="">Profil Agen Perubahan</h2>
                <p>Agen Perubahan dari Tahun 2022 - 2024</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="img/perubahan-2022.png" class="img-fluid" alt="">
                            <h3>Agen Perubahan Tahun 2022</h3>
                            <hr>
                            <a href="/agen-perubahan-2022" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="img/perubahan-2023.jpg" class="img-fluid" alt="">
                            <h3>Agen Perubahan Tahun 2023</h3>
                            <hr>
                            <a href="/agen-perubahan-2023" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="img/perubahan-2024.jpg" class="img-fluid" alt="">
                            <h3>Agen Perubahan Tahun 2024</h3>
                            <hr>
                            <a href="/agen-perubahan-2024" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Values Section -->

        {{-- <!-- Constructions Section -->
    <section id="constructions" class="constructions section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2 class="">Profil Agen Perubahan</h2>
          <p>Agen Perubahan Dari Tahun 2022 - Sekarang</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg"><img src="img/pp-perubahan-2022.png" alt=""></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">Agen Perubahan Tahun 2022</h4>
                      </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg"><img src="img/pp-perubahan-2023.jpg" alt=""></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">Agen Perubahan Tahun 2023</h4>
                     </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg"><img src="img/pp-perubahan-2024.jpg" alt=""></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">Agen Perubahan Tahun 2024</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg"><img src="assets/img/constructions-4.jpg" alt=""></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                      </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card Item -->
  
          </div>
  
        </div>
  
      </section><!-- /Constructions Section --> --}}
    @endsection
