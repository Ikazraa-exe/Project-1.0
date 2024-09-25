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
                                        <h2>Mekanisme Pengaduan</h2>
                                    </div>
                                </div>

                                <div class="content">
                                    <br>

                                    <ol type="A">
                                        <b>
                                            <li>Secara Lisan</li>
                                        </b>

                                        <ol>
                                            <li>Dapat disampaikan secara langsung ke Petugas meja pengaduan di Kantor
                                                Pengadilan Militer I-05 Pontianak Jl. Ahmad Yani Nomor 10 A Pontianak atau
                                            </li>
                                            <li>Melalui telepon Petugas Meja Pengaduan ke nomor 085345001940 / 085252639508,
                                                pada saat jam pelayanan hari Senin, Rabu dan Kamis pada pukul 08.00 s.d
                                                16.30 WIB, hari Selasa pada pukul 07.00 s.d 15.30 WIB, dan hari Jum’at pada
                                                pukul 07.00 s.d 16.00 WIB.
                                            </li>

                                        </ol>
<br>
                                        <b>
                                            <li>Secara Tertulis</li>
                                        </b>
                                        <ol>
                                            <li>Mengisi Formulir Pengaduan yang telah disiapkan pada Meja Pengaduan.
                                            </li>
                                            <li>Menyampaikan surat resmi yang ditujukan kepada pimpinan dalam hal ini Kepala
                                                Pengadilan Militer I-05 Pontianak, dengan cara diantar langsung / dikirim
                                                melalui faksimili 0561 – 712128, atau melalui pos ke alamat Kantor
                                                Pengadilan Militer I-05 Pontianak Jl. Ahmad Yani Nomor 10 A Pontianak 78124.
                                            </li>
                                            <li>Melalui email : pontianak@dilmil.org
                                            </li>
                                        </ol>

                                        </ol>

                                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                            <i class="bi bi-link-45deg flex-shrink-0"></i>
                                            <div>
                                                <h4><a href="https://drive.google.com/file/d/1ulf8MKsCkfjZEJ1ZI8QjfJEJ97sRFeu6/view"
                                                        class="stretched-link">Tautan Link :</a></h4>
                                                <h4 class="highlight" style="border-radius: 8px">Pedoman Pengaduan</h4>
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
