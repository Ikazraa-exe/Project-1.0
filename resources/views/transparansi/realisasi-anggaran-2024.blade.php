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
                                        <h2>Realisasi Anggaran Tahun 2024</h2>
                                    </div>
                                </div>

                                <br>
                                <div style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
                                    <img src="img/anggaran-2024.jpg" alt="" class="img-fluid">
                                </div>

                                <br>
                                <div style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
                                    <img src="img/anggaran1-2024.jpg" alt="" class="img-fluid">
                                </div>

                                <br>

                                <div class="table-container">
                                    <div class="table-wrapper">
                                        <table class="table" data-aos="fade-up" data-aos-delay="100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Uraian</th>
                                                    <th>DIPA</th>
                                                    <th>Data Realisasi</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Realisasi Anggaran Per 31 Januari 2024</td>
                                                    <td><p>DIPA (01)</p>
                                                    <p>DIPA (05)</p></td>
                                                    <td><p><a href="https://drive.google.com/file/d/1lR98q8iD8Z7TIQlx6Ta2NsFW-FyeS9ck/view">Lihat Realisasi DIPA (01)</a></p>
                                                    <p><a href="https://drive.google.com/file/d/1lPHqp3MHaZM9M0-wVpopfMvbwS-BITIS/view">Lihat Realisasi DIPA (05)</a></p></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>2</td>
                                                    <td>Realisasi Anggaran Per 29 Februari 2024</td>
                                                    <td><p>DIPA (01)</p>
                                                    <p>DIPA (05)</p></td>
                                                    <td><p><a href="#">Lihat Realisasi DIPA (01)</a></p>
                                                    <p><a href="#">Lihat Realisasi DIPA (05)</a></p></td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>Realisasi Anggaran Per 31 Maret 2024</td>
                                                    <td><p>DIPA (01)</p>
                                                    <p>DIPA (05)</p></td>
                                                    <td><p><a href="https://drive.google.com/file/d/1JXxMfW8BAuzvdHu00MZzn2KZ1JHeyyNs/view">Lihat Realisasi DIPA (01)</a></p>
                                                    <p><a href="https://drive.google.com/file/d/1J_8PSLa-CB32Jwb0TxXUzEBJpf_EScY7/view">Lihat Realisasi DIPA (05)</a></p></td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>Realisasi Anggaran Per 30 April 2024</td>
                                                    <td><p>DIPA (01)</p>
                                                    <p>DIPA (05)</p></td>
                                                    <td><p><a href="https://drive.google.com/file/d/1YT256UA5P3MpdGXbj7fNNuKFgl6Dsm1f/view">Lihat Realisasi DIPA (01)</a></p>
                                                    <p><a href="https://drive.google.com/file/d/1YMqllZgmPqRiia-mXAjSIVu8zXsH3M-S/view">Lihat Realisasi DIPA (05)</a></p></td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>Realisasi Anggaran Per 31 Mei 2024</td>
                                                    <td><p>DIPA (01)</p>
                                                    <p>DIPA (05)</p></td>
                                                    <td><p><a href="https://drive.google.com/file/d/1-01gtfgDjoVcCaR51Y5F89uJ74oHnFAT/view">Lihat Realisasi DIPA (01)</a></p>
                                                    <p><a href="https://drive.google.com/file/d/17K3HqtGrj2MkTCScCrxJPQgScuOFvNnn/view">Lihat Realisasi DIPA (05)</a></p></td>
                                                </tr>

                                            </tbody>
                                        </table>
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