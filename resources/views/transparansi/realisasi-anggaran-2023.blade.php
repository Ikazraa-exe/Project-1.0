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
                <h2 class="">REALISASI ANGGARAN TAHUN 2023</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 justify-content-center"> <!-- Added justify-content-center -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="img/anggaran-dipa1.png" class="img-fluid" alt="">
                            <h3>REALISASI ANGGARAN DIPA 01 (663225) BADAN URUSAN ADMINISTRASI MARI</h3>
                            <hr>
                            <a href="https://drive.google.com/file/d/1kYp3fDVVmfqrwt5RHXXjzHK8LZXzp60G/view" class="readmore stretched-link"><span>Read
                                    Klik Disini untuk mengunduh</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="img/anggaran-dipa5.png" class="img-fluid" alt="">
                            <h3>REALISASI ANGGARAN DIPA 05 (663226) DITJEN BADILMILTUN MARI</h3>
                            <hr>
                            <a href="https://drive.google.com/file/d/1kZEfm9DCTRgamZSD1cDbfKAKVvvFNc8N/view" class="readmore stretched-link"><span>Read
                                Klik Disini untuk mengunduh</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Penerimaan Pegawai Section -->
    @endsection
