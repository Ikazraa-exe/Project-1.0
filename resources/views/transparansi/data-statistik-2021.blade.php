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
                                        <h2>Data Statistik Perkara TA. 2021</h2>
                                    </div>
                                </div>

                                <h2 style="color: #ffd663; font-size: 22px; margin-top: 30px"><b>Statistik Laporan Perkara
                                        Januari S.D. Desember 2021</b></h2>
                                <br>
                                <div style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
                                    <img src="img/statistik-21.jpg" alt="" class="img-fluid"
                                        style="max-width: 650px">
                                </div>
                                <br>
                                <div style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
                                    <img src="img/statistik1-21.jpg" alt="" class="img-fluid"
                                        style="max-width: 650px">
                                </div>

                                <h2 style="color: #ffd663; font-size: 22px; margin-top: 30px">Statistik Perkara TA. 2021
                                </h2>
                                <a href="https://drive.google.com/file/d/1ml7KSRxz6WyETDDZK6QeiDhbE8Ex1ypi/view" class="report-link">Januari</a>
                                <a href="https://drive.google.com/file/d/17RIZvzsqiGad-Wxzai5oCosNtVDqAHaV/view" class="report-link">Februari</a>
                                <a href="https://drive.google.com/file/d/1DgmDXrJM3vevo8cIaJbKv_NNjbGfbBTl/view" class="report-link">Maret</a>
                                <a href="https://drive.google.com/file/d/1wcQJ1Anj0g3jxqQkG5haTix3cTTy3OvH/view" class="report-link">April</a>
                                <a href="https://drive.google.com/file/d/1BMWPUL0uRKvtyQO0ioSvVxQA-AJOJKaa/view" class="report-link">Mei</a>
                                <a href="https://drive.google.com/file/d/1acjQR3w53-Vj1RTjQh5QdOXF1Nq5qfey/view" class="report-link">Juni</a>
                                <a href="https://drive.google.com/file/d/1kPxclxdQiRfOR5QcL8oH7hTYC2lU1w_p/view" class="report-link">Juli</a>
                                <a href="https://drive.google.com/file/d/1fXdRW-tGP8VltE8uIFgwDPjsZ7H2IXZN/view" class="report-link">Agustus</a>
                                <a href="https://drive.google.com/file/d/1EX4aA2veJVDRIT5yVoDExoE-2ZWWgCm8/view" class="report-link">September</a>
                                <a href="https://drive.google.com/file/d/1ZqIuBJDlNqjQJ_Qq_MqTLONyDlSKxCQl/view" class="report-link">Oktober</a>
                                <a href="https://drive.google.com/file/d/1F8PbSU9LYwN2cRmA3chFxcXZs94mBK8v/view" class="report-link">November</a>
                                <a href="https://drive.google.com/file/d/1VLRz2YAtodnRJHZXevHcl0Ub3ztCX_1j/view" class="report-link">Desember</a>
                                <a href="https://drive.google.com/file/d/1PWuRSuTRl05SrMjmyRLNxfqEQeuzcnth/view" class="report-link">Statistik Penyelesaian Perkara pada Aplikasi
                                    Monitoring Implemetasi SIPP pada tahun 2021</a>

                        
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