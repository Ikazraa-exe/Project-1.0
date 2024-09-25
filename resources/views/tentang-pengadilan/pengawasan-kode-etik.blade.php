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
                <h2 class="">Pengawasan Kode Etik</h2>
                <p>Silahkan untuk menekan tombol Download untuk mengunduh berkas</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="img/perilaku-hakim.png" class="img-fluid" alt="">
                            <h3>Pedoman Perilaku Hakim</h3>
                            <hr>
                            <a href="https://drive.google.com/file/d/19_-PAgPDYKXZn5m5V0OgPwdt7FIem0OH/view" class="readmore stretched-link"><span>Silahkan klik disini untuk Download</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="img/kode-etik.png" class="img-fluid" alt="">
                            <h3>Kode Etik Panitera dan Juru Sita</h3>
                            <hr>
                            <a href="https://drive.google.com/file/d/1Qu1ZgfxxupO8v4HchC4oFMST07EbnM5I/view" class="readmore stretched-link"><span>Silahkan klik disini untuk Download</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="img/asn.png" class="img-fluid" alt="">
                            <h3>Kewajiban dan Larangan ASN</h3>
                            <hr>
                            <a href="https://drive.google.com/file/d/1pfDeWsaf565G_KAoEXrs5GnxOQVtYJk4/view" class="readmore stretched-link"><span>Silahkan klik disini untuk Download</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="img/gratifikasi.png" class="img-fluid" alt="">
                            <h3>Himbauan Gratifikasi</h3>
                            <hr>
                            <a href="https://drive.google.com/file/d/1ZAmMNfMkVYGM1oFZic0ZSYRwBRdmrUkv/view" class="readmore stretched-link"><span>Silahkan klik disini untuk Download</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Card Item -->
                </div>

            </div>

        </section><!-- /Values Section -->

    @endsection
