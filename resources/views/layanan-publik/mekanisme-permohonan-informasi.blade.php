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
                                        <h2>Mekanisme Permohonan Informasi</h2>
                                    </div>
                                </div>

                                <div class="content">
                                    <br>

                                    <p>
                                        <li><b>Prosedur Pelayanan Informasi di Pengadilan terdiri dari :</b></li>
                                    <ol type="1">
                                        <li>Prosedur Biasa</li>
                                        <li>Prosedur Khusus
                                        </li>
                                    </ol>
                                    </p>

                                    <p>
                                        <li><b>Prosedur Biasa digunakan dalam hal :</b></li>
                                    <ol type="1">
                                        <li>Permohonan disampaikan secara tidak langsung, baik melalui surat atau media
                                            elektronik</li>
                                        <li>Informasi yang diminta bervolume besar</li>
                                        <li>Informasi yang diminta belum tersedia</li>
                                        <li>Informasi yang diminta adalah informasi yang tidak secara tegas termasuk dalam
                                            kategori informasi yang harus diumumkan atau informasi yang harus tersedia
                                            setiap saat dan dapat diakses publik atau informasi yang secara tegas dinyatakan
                                            sebagai informasi yang rahasia sehingga harus mendapat ijin dan diputuskan oleh
                                            PPID</li>
                                    </ol>
                                    </p>

                                    <p>
                                        <li><b>Prosedur Khusus digunakan dalam hal permohonan diajukan secara langsung dan
                                            informasi yang diminta:</b></li>
                                    <ol type="1">
                                        <li>Termasuk dalam kategori yang wajib diumumkan</li>
                                        <li>Termasuk dalam kategori informasi yang dapat diakses publik dan sudah tercatat
                                            dalam Daftar Informasi Publik dan sudah tersedia (misal: sudah diketik atau
                                            sudah diterima dari pihak atau pengadilan lain)</li>
                                        <li>Tidak bervolume besar (jumlahnya tidak banyak)</li>
                                        <li>Perkiraan jumlah biaya penggandaan dan waktu yang dibutuhkan untuk penggandaan
                                            dapat dilakukan dengan mudah</li>
                                    </ol>
                                    </p>
                                    <p><li><b>Alasan permohonan informasi yang dibuat Pemohon tidak dapat dijadikan alasan untuk
                                            menolak pemberian informasi</b></li></p>
                                    <p><li><b>Petugas Informasi wajib membantu Pemohon informasi dalam mengajukan permohonan</b></li>
                                    </p>
                                    <p><li><b>Khusus informasi untuk mendapatkan fotokopi putusan Mahkamah Agung baru dapat
                                            diminta setelah putusan tersebut diterima oleh para pihak yang berperkara atau
                                            setelah 1 (satu) bulan sejak putusan tersebut dikirimkan oleh Mahkamah Agung ke
                                            Pengadilan Tingkat Pertama dan Banding</b></li></p>

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
