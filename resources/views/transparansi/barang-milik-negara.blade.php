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
                <h2 class="">Daftar Barang Milik Negara (BMN)</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 justify-content-center"> <!-- Added justify-content-center -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="img/bmn23.png" class="img-fluid" alt="">
                            <h3>Daftar Barang Milik Negara (BMN) Dilmil I-05 Pontianak Tahun 2023</h3>
                            <hr>
                            <a href="https://drive.google.com/file/d/1_z8_sB5h7Q2zH9PJPS4SZ7rwH8ZLS9PD/view"
                                class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="img/bmn24.png" class="img-fluid" alt="">
                            <h3>Daftar Barang Milik Negara (BMN) Dilmil I-05 Pontianak Tahun 2024</h3>
                            <hr>
                            <a href="https://drive.google.com/file/d/1jCF-iFp3WL8CtcIUdCck-iwiToW3-LiT/view"
                                class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Penerimaan Pegawai Section -->
    @endsection
