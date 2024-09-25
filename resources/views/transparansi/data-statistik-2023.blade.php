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
                                        <h2>Data Statistik Perkara TA. 2023</h2>
                                    </div>
                                </div>

                                <br>
                                <div style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
                                    <img src="img/statistik-23.jpg" alt="" class="img-fluid">
                                </div>
                                
                                <br>

                                <div class="table-container">
                                    <div class="table-wrapper">
                                        <table class="table" data-aos="fade-up" data-aos-delay="100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Bulan</th>
                                                    <th>Statistik Penyelesaian Perkara</th>
                                                    
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Januari</td>
                                                    <td><a href="https://drive.google.com/file/d/1O2b2ida6-WxnmVU_0u7c0_2Fk7x76sHD/view">Lihat Statistik Perkara</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Februari</td>
                                                    <td><a href="https://drive.google.com/file/d/1O42aPJXyEX67tOC9awrKBsgnecZg4X6Z/view">Lihat Statistik Perkara</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Maret</td>
                                                    <td><a href="https://drive.google.com/file/d/1VS_OtGxkCswTMZ4uhg1vztpVA3O6IUqy/view">Lihat Statistik Perkara</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>April</td>
                                                    <td><a href="https://drive.google.com/file/d/1Xyl6B3BFQsfWCkV0eZ5XXqcymXo3mCT4/view">Lihat Statistik Perkara</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Mei</td>
                                                    <td><a href="https://drive.google.com/file/d/1_Ovg2SC2cA5S3rAntJQ-U7oKlgqKf4B0/view">Lihat Statistik Perkara</a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Juni</td>
                                                    <td><a href="https://drive.google.com/file/d/1_hAljiAz99FPtVZmA9bQBLvz4ovmKKCR/view">Lihat Statistik Perkara</a></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Juli</td>
                                                    <td><a href="https://drive.google.com/file/d/1boS34fv9CZVSOBJorO7qBF1Z4t8Bz9lk/view">Lihat Statistik Perkara</a></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Agustus</td>
                                                    <td><a href="https://drive.google.com/file/d/1dj5irlqyyzlSQisLCwvAqqvq7kU-uVLF/view">Lihat Statistik Perkara</a></td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>September</td>
                                                    <td><a href="https://drive.google.com/file/d/1eM6u3tMvza5k223COueRiCAMLqnTp0hM/view">Lihat Statistik Perkara</a></td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Oktober</td>
                                                    <td><a href="https://drive.google.com/file/d/1ez5ozOvjLzmS7y0VK4NZ6FaTgRudDQnC/view">Lihat Statistik Perkara</a></td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>November</td>
                                                    <td><a href="https://drive.google.com/file/d/1hoG_zLudvSXL9h2kyCPahCd8-KNClnaB/view">Lihat Statistik Perkara</a></td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Desember</td>
                                                    <td><a href="https://drive.google.com/file/d/1iCEFZfm1SgzYdiIiUHXHfVugqN10ZUBw/view">Lihat Statistik Perkara</a></td>
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
