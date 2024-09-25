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
        </div><!-- End Page Title -->

        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <!-- Blog Details Section -->
                    <div id="blog-details" class="blog-details section">
                        <div class="container">

                            <article class="article">

                                <div class="container-header">
                                    <div class="title-container">
                                        <h2>Hasil Survei Persepsi Anti Korupsi (SPAK) dan Hasil Survei Persepsi Kualitas
                                            Pelayanan (SPKP)</h2>
                                    </div>
                                </div>

                                <div class="content">
                                    <br>

                                    <p>Pengadilan Militer I-05 Pontianak Menyelenggarakan Survei Persepsi Anti Korupsi
                                        (SPAK) dan Survei Persepsi Kualitas Pelayanan (SPKP) dalam rangka Pengusulan dan
                                        Evaluasi Zona Integritas Tahun 2023 untuk meraih Predikat WBBM berdasarkan Surat
                                        Edaran Kemenpan RB Nomor 04 Tahun 2023 Tentang Pengusulan dan Evaluasi Zona
                                        Integritas.
                                    </p>

                                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                        <i class="bi bi-link-45deg flex-shrink-0"></i>
                                        <div>
                                            <h4><a href="https://drive.google.com/file/d/1-6_L5OBZt-wlIiozF91FQhrhiibbFzcv/view"
                                                    class="stretched-link">Tautan Link :</a></h4>
                                            <h4 class="highlight">Surat Edaran Menteri Pendayagunaan Aparatur Negara dan
                                                Reformasi Birokrasi Nomor 04 Tahun 2023 Tentang Pengusulan dan Evaluasi Zona
                                                Integritas 2023</h4>

                                            <div style="text-align: left;">
                                                <img src="img/spak.jpg" alt="" class="img-fluid"
                                                    style="max-width: 600px;"data-aos="fade-up" data-aos-delay="100">
                                            </div>

                                        </div>
                                    </div><!-- End Icon Box -->

                                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                        <i class="bi bi-link-45deg flex-shrink-0"></i>
                                        <div>
                                            <h4><a href="https://drive.google.com/file/d/1XmQOns1PIxeIkvmnvecB8l3s29OjrFse/view"
                                                    class="stretched-link">Tautan Link :</a></h4>
                                            <h4 class="highlight">Laporan Hasil Survei Persepsi Anti Korupsi (SPAK)</h4>
                                        </div>
                                    </div><!-- End Icon Box -->

                                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                        <i class="bi bi-link-45deg flex-shrink-0"></i>
                                        <div>
                                            <h4><a href="https://drive.google.com/file/d/1Xum6qm3_QKjeRePT7a1Y5AdwhryjdN_N/view"
                                                    class="stretched-link">Tautan Link :</a></h4>
                                            <h4 class="highlight">Laporan Hasil Survei Persepsi Kualitas Pelayanan</h4>
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

                            <div class="post-item ">
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
