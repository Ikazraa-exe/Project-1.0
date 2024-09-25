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
                                        <h2>Panitera Muda Hukum</h2>
                                    </div>
                                </div>

                                <div class="content">

                                    <p>
                                        <br>
                                    <div class="highlight" style="border-radius: 8px">TUGAS POKOK :</div>
                                    <p>
                                    <ul>
                                        <li>Pelaksanaan pengumpulan, pengelolaan dan penyajian data perkara
                                        </li>
                                        <li>Pelaksanaan penyajian statistik perkara
                                        </li>
                                        <li>Pelaksanaan penyusunan dan pengiriman pelaporan perkara</li>
                                        <li>Pelaksanaan penataan, penyimpanan dan pemeliharaan arsip perkara</li>
                                        <li>Pelaksanaan kerja sama dengan arsip daerah untuk penitipan berkas perkara</li>
                                        <li>Pelaksanaan penyiapan, pengelolaan dan penyajian bahan-bahan yang berkaitan dengan transparasi perkara
                                        </li>
                                        <li>Pelaksanaan penghimpunan pengaduan dari masyarakat</li>
                                        <li>Pelaksanaan fungsi lain yang diberikan oleh Panitera
                                        </li>
                                    </ul>

                                    </p>

                                    <p>
                                    <div class="highlight" style="border-radius: 8px">FUNGSI :</div>
                                    <p>
                                    <ul>

                                        <li>Pelaksanaan pembantu Hakim dengan mengikuti dengan mengikuti dan mencatat jalannya persidangan
                                        </li>
                                        <li>Pelaksanaan pengumpulan, pengelolaan dan penyajian data perkara</li>
                                        <li>Pelaksanaan penyajian statistik perkara</li>
                                        <li>Pelaksanaan penyusunan dan pengiriman pelaporan perkara
                                        </li>
                                        <li>Pelaksanaan penataan, penyimpanan dan pemeliharaan arsip perkara</li>
                                        <li>Pelaksanaan kerja sama dengan arsip daerah untuk penitipan berkas perkara</li>
                                        <li>Pelaksanaan penyiapan, pengelolaan dan penyajian bahan-bahan yang berkaitan dengan transparasi perkara</li>
                                        <li>Pelaksanaan penghimpunan pengaduan dari masyarakat, hubungan masyarakat
                                        </li>
                                        <li>Pelaksanaan fungsi lain yang diberikan oleh Panitera.</li>
                                    </ul>
                                    </p>
                                </div>

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
