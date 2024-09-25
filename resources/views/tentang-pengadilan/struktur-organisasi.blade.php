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
                                        <h2>Struktur Organisasi</h2>
                                    </div>
                                </div>

                                <div class="content">
<br>
                                    <p>Struktur Organisasi Pengadilan Militer didasarkan pada PERMA Nomor 7 tahun 2015
                                        tanggal 7 Oktober 2015 tentang Organisasi dan Tata kerja Kepaniteraan dan
                                        Kesekretariatan Peradilan dan PERMA Nomor 01 tahun 2017 tanggal 17 Februari 2017
                                        tentang Perubahan atas PERMA Nomor 7 tahun 2015 tentang Organisasi dan Tata kerja
                                        Kepaniteraan dan Kesekretariatan Peradilan.</p>
                                        <br>
                                    <div class="highlight" style="border-radius: 8px">Struktur Organisasi Pengadilan Militer I-05 Pontianak Sebagai Berikut : </div>
                                    <p><br>
                                    <div style="text-align: center;">
                                        <img src="img/struktur-organisasi.png" alt="" class="img-fluid">
                                    </p>
                                    </div>
                                    <p>
                                        <p><b>Unsur Pimpinan :</b></p>
                                    <ul>
                                        <li>Kepala Pengadilan Militer
                                        </li>
                                        <li>Wakil Kepala Pengadilan Militer
                                        </li>
                                        </ul>
                                        <p><b>Panitera membawahi antara lain :</b></p>
                                        <ul>
                                        <li>Panitera Muda Pidana</li>
                                        <li>Panitera Muda Hukum</li>
                                    </ul>
                                        <p><b>Serta membawahi kelompok jabatan fungsional :</b></p>
                                    <ul>
                                        <li>Panitera Pengganti
                                        </li>
                                        <li>Pranata Peradilan
                                        </li>
                                        </ul>
                                        <p><b>Sekretaris membawahi beberapa Sub bagian antara lain :</b></p>
                                        <ul>
                                        <li>Sub Bagian Perencanaan, Teknologi Informasi dan Pelaporan</li>
                                        <li>Sub Bagian Kepegawaian, Organisasi dan Tata Laksana</li>
                                        <li>Sub Bagian Umum dan Keuangan</li>
                                    </ul>
                                       
                                    <p><b>Serta membawahi kelompok jabatan Fungsional </b></p>
                                    <ul>
                                        <li>Fungsional Arsiparis
                                        </li>
                                        <li>Fungsional Pustakawan
                                        </li>
                                        <li>Fungsional Pranata Komputer.</li>
                                        <li>Fungsional Bendahara</li>
                                        <li>Unsur Pelaksana</li>
                                        </ul>

                                    </p>

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
