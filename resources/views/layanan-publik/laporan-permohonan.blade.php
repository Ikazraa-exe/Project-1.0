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

        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <!-- Blog Details Section -->
                    <div id="blog-details" class="blog-details section">
                        <div class="container">

                            <article class="article">

                                <div class="container-header">
                                    <div class="title-container">
                                        <h2>Laporan Permohonan Informasi</h2>
                                    </div>
                                </div>

                                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-link-45deg flex-shrink-0"></i>
                                    <div>
                                        <h4><a href="https://drive.google.com/file/d/1aVyf4D7KNLYlj4epQDpYQ9AC2of_x9FQ/view"
                                                class="stretched-link">Tautan Link :</a></h4>
                                        <h4 class="highlight" style="border-radius: 8px; font-size:13px">LAPORAN PERMOHONAN INFORMASI S.D. BULAN JUNI 2023</h4>
                                    </div>
                                </div><!-- End Icon Box -->

                                <br>
                                <div style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
                                    <img src="img/permohonan23.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-link-45deg flex-shrink-0"></i>
                                    <div>
                                        <h4><a href="https://drive.google.com/file/d/1aNkVqzMKPp3Er0tr5VZVx7jcIqPf650a/view"
                                                class="stretched-link">Tautan Link :</a></h4>
                                        <h4 class="highlight" style="border-radius: 8px; font-size:13px">LAPORAN PERMOHONAN INFORMASI TAHUN 2022</h4>
                                    </div>
                                </div><!-- End Icon Box -->

                                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-link-45deg flex-shrink-0"></i>
                                    <div>
                                        <h4><a href="https://drive.google.com/file/d/1aKrQ9vE989IJ1BpHPdytacwmuOVF6g53/view"
                                                class="stretched-link">Tautan Link :</a></h4>
                                        <h4 class="highlight" style="border-radius: 8px; font-size:13px">LAPORAN PERMOHONAN INFORMASI TAHUN 2021</h4>
                                    </div>
                                </div><!-- End Icon Box -->

                                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-link-45deg flex-shrink-0"></i>
                                    <div>
                                        <h4><a href="#"
                                                class="stretched-link">Tautan Link :</a></h4>
                                        <h4 class="highlight" style="border-radius: 8px; font-size:13px">LAPORAN PERMOHONAN INFORMASI TAHUN 2019</h4>
                                    </div>
                                </div><!-- End Icon Box -->

                                <br>
                                <div style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
                                    <img src="img/permohonan19.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-link-45deg flex-shrink-0"></i>
                                    <div>
                                        <h4><a href="https://drive.google.com/open?id=1EjRuoH2c-0SRC1AKts-Wm7X9SzrPhgD5"
                                                class="stretched-link">Tautan Link :</a></h4>
                                        <h4 class="highlight" style="border-radius: 8px; font-size:13px">LAPORAN PERMOHONAN INFORMASI TAHUN 2018</h4>
                                    </div>
                                </div><!-- End Icon Box -->
                            </article>

                        </div>
                    </div><!-- /Blog Details Section -->


                    <!-- Blog Comments Section -->
                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

                        <!-- Search Widget -->
                        <div class="search-widget widget-item">

                            <h3 class="widget-title">Search</h3>
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>

                        </div><!--/Search Widget -->

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">

                            <h3 class="widget-title">Recent Posts</h3>

                            <div class="post-item">
                                <img src="img/YM_MA1.jpeg" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="blog-details.html">Kunjungan YM Ketua MA RI ke Fasilitas Pelayanan Dilmil
                                            I-05 Pontianak</a></h4>
                                    <time datetime="#">3 Juni 2024</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="img/YM-MA.jpeg" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="blog-details.html">YM Ketua Mahkamah Agung RI Beserta Rombongan Tiba Di
                                            Bandara Supadio Pontianak</a></h4>
                                    <time datetime="#">2 Juni 2024</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="img/ma-2.jpeg" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="blog-details.html">Melepas KPT Pontianak, KMA: Melepas Jabatan Bukanlah
                                            Tanda Akhir dari Kontribusi</a></h4>
                                    <time datetime="2020-01-01">2 Juni 2024</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="img/upacara.jpeg" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="blog-details.html">Upacara Hari Kebangkitan Nasional Tahun 2024</a></h4>
                                    <time datetime="2020-01-01">20 Mei 2024</time>
                                </div>
                            </div><!-- End recent post item-->

                            <div class="post-item">
                                <img src="img/ma-3.jpg" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="blog-details.html">Pengadilan "Pertama" yang Mengajukan Upaya Hukum Kasasi
                                            Elektronik</a></h4>
                                    <time datetime="2020-01-01">16 Mei 2024</time>
                                </div>
                            </div><!-- End recent post item-->

                        </div><!--/Recent Posts Widget -->

                    </div>

                </div>

            </div>
        </div>

    </main>
@endsection


{{-- <!-- Alt Services Section -->
<section id="alt-services" class="alt-services section">

    <div class="container">

        {{-- <div class="row justify-content-around gy-4">
            <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img
                    src="img/Wilayah_Hukum_Dilmil.jpg" alt=""></div> --}}
