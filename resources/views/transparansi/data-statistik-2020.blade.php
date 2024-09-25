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
                                        <h2>Data Statistik Perkara TA. 2020</h2>
                                    </div>
                                </div>

                                <h2 style="color: #ffd663; font-size: 22px; margin-top: 30px">Statistik Perkara Bulanan TA. 2020
                                </h2>
                                <a href="https://drive.google.com/file/d/1Xo0BwpnIWYesTgbR9xv-EZvKBbIUsILI/view" class="report-link">Januari</a>
                                <a href="https://drive.google.com/file/d/1ZpJbVlA53p4DN9Ih1kzpG9jhyOOdrIgE/view" class="report-link">Februari</a>
                                <a href="https://drive.google.com/file/d/1PovSr1IyysUhT-FHO2zvkneJvCzmJ0PR/view" class="report-link">Maret</a>
                                <a href="https://drive.google.com/file/d/1rkcJurmeoeFNafGtxvW7Gm6GVnMw5NJq/view" class="report-link">April</a>
                                <a href="https://drive.google.com/file/d/1XP3G2NuYQZFDvfryjNJmitIU8bT9W6xu/view" class="report-link">Mei</a>
                                <a href="https://drive.google.com/file/d/1ZhMpqkyHHHYZ33z4kzLo_EyWPbjxDlzj/view" class="report-link">Juni</a>
                                <a href="https://drive.google.com/file/d/1Rp3Qvo0mDSp1TC_MID0g5ZjOQrWbNuJg/view" class="report-link">Juli</a>
                                <a href="https://drive.google.com/file/d/19rk-mOImM2Wfsp8OwW04NUcIpDpYurgz/view" class="report-link">Agustus</a>
                                <a href="https://drive.google.com/file/d/1loXB5ppNTF5d8Q0PuNE8ND9nG2mV9XrI/view" class="report-link">September</a>
                                <a href="https://drive.google.com/file/d/18zU0boyeCePMRsMwI-nmkxwTp5xCRzjo/view" class="report-link">Oktober</a>
                                <a href="https://drive.google.com/file/d/1kdykOKPaeE7VhA-gn7enHixL7zYqf4gu/view" class="report-link">November</a>
                                <a href="https://drive.google.com/file/d/1AwY7iC0Vr2DwLcMAbmmBug0wRvbEYXGM/view" class="report-link">Desember</a>
                                <a href="https://drive.google.com/file/d/1kv6--A0tzX-FQJoylnIob_AskXKwDaBQ/view" class="report-link">Persentase Perkara pada SIPP MA RI Tahun 2020</a>

                        
                    </div><!-- End Icon Box -->


                    </article>

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