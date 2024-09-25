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
                                        <h2>Pelaksanaan Sidang Keliling</h2>
                                    </div>
                                </div>

                                <div class="data-container">
                                    <div class="table-container">
                                        <div class="table-wrapper">
                                            <table class="table" data-aos="fade-up" data-aos-delay="100">
                                                <thead>
                                                    <tr>
                                                        <th>TAHUN</th>
                                                        <th>TANGGAL SIDANG</th>
                                                        <th>TEMPAT SIDANG</th>
                                                        <th>PERKARA YANG DISIDANGKAN</th>
                                                        <th>PERKARA YANG DIPUTUS</th>
                                                        <th>PAGU DIPA</th>
                                                        <th>REALISASI ANGGARAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2019</td>
                                                        <td>2 - 3 Mei 2019</td>
                                                        <td>PA. Singkawang</td>
                                                        <td>3 perkara</td>
                                                        <td>3 perkara</td>
                                                        <td>49.000.000</td>
                                                        <td>20.900.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2019</td>
                                                        <td>14 - 15 Mei 2019</td>
                                                        <td>PA. Sintang</td>
                                                        <td>3 Perkara</td>
                                                        <td>3 Perkara</td>
                                                        <td></td>
                                                        <td>28.100.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2020</td>
                                                        <td>17 - 21 Februari 2020</td>
                                                        <td>PN. Ketapang</td>
                                                        <td>3 Perkara</td>
                                                        <td>3 Perkara</td>
                                                        <td>40.000.000</td>
                                                        <td>40.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2021</td>
                                                        <td>22 - 25 Februari 2021</td>
                                                        <td>PA. Sintang</td>
                                                        <td>4 Perkara</td>
                                                        <td>4 Perkara</td>
                                                        <td>40.000.000</td>
                                                        <td>40.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2022</td>
                                                        <td>28 Maret - 1 April 2022</td>
                                                        <td>PA. Putussibau</td>
                                                        <td>5 Perkara</td>
                                                        <td>5 Perkara</td>
                                                        <td>40.000.000</td>
                                                        <td>40.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2023</td>
                                                        <td>27 - 30 Maret 2023</td>
                                                        <td>PA. Sintang</td>
                                                        <td>3 Perkara</td>
                                                        <td>3 Perkara</td>
                                                        <td>40.000.000</td>
                                                        <td>40.000.000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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