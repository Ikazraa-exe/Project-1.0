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

        <!-- Penerimaan Pegawai Section -->
        <section id="penerimaan-pegawai" class="penerimaan-pegawai section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>YURISPRUDENSI</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 justify-content-center"> <!-- Added justify-content-center -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="img/yurisprudensi.png" class="img-fluid" alt="">
                            <h3>UNDUH HIMPUNAN YURISPRUDENSI MAHKAMAH AGUNG SAMPAI DENGAN TAHUN 2018 EDISI PERTAMA</h3>
                            <hr>
                            <a href="https://jdih.mahkamahagung.go.id/"
                                class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="img/web-yurisprudensi.png" class="img-fluid" alt="">
                            <h3>YURISPRUDENSI</h3>
                            <hr>
                            <a href="https://jdih.mahkamahagung.go.id/search-result?search=YURISPRUDENSI"
                                class="readmore stretched-link"><span>Tekan untuk menuju ke Website</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->


  </section><!-- /Blog Author Section -->

                </div>

            </div>

        </section><!-- /Penerimaan Pegawai Section -->
    @endsection
