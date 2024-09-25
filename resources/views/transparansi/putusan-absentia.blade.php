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
                <h2 class="">Putusan In Absentia</h2>
                <p>Putusan In Absentia Bulan Maret, Mei dan Juni Tahun 2023 </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="img/absentia-maret.jpg" class="img-fluid" alt="">
                            <h3>Putusan In Absentia Bulan Maret 2023</h3>
                            <hr>
                            <a href="/putusan-absentia-maret-2023" class="readmore stretched-link"><span>Selengkapnya</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="img/absentia-mei.jpg" class="img-fluid" alt="">
                            <h3>Putusan In Absentia Bulan Mei 2023</h3>
                            <hr>
                            <a href="/putusan-absentia-mei-2023" class="readmore stretched-link"><span>Selengkapnya</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="img/absentia-juni.jpeg" class="img-fluid" alt="">
                            <h3>Putusan In Absentia Bulan Juni 2023</h3>
                            <hr>
                            <a href="/putusan-absentia-juni-2023" class="readmore stretched-link"><span>Selengkapnya</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Values Section -->

    @endsection
