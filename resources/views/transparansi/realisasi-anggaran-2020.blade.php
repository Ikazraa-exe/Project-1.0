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
                                        <h2>Realisasi Anggaran Tahun 2020</h2>
                                    </div>
                                </div>

                                <h2 style="color: #ffd663; font-size: 22px; margin-top: 30px">Laporan Realisasi Anggaran
                                    Tahun 2020</h2>
                                <a href="https://drive.google.com/file/d/1Oj4KwqJ8tdEYTAoR9v3712W1wvasur6Q/view"
                                    class="report-link">Realisasi Per Akun Tahun 2020</a>
                                <a href="https://drive.google.com/file/d/1iqAIJOdKralus9-Q7EHfOZLBx12Y_g2H/view"
                                    class="report-link">Realisasi Dipa (01) BUA MARI Tahun 2020</a>
                                <a href="https://drive.google.com/file/d/1YukSkHo7i71Io4ZuE4WALBb7ctjCOS-P/view"
                                    class="report-link">Realisasi Dipa (05) Dirjen Badilmiltun MARI Tahun 2020</a>

                                <h2 style="color: #ffd663; font-size: 22px; margin-top: 30px">Data Statistik Realisasi
                                    Anggaran Tahun 2020</h2>
                                <ul>
                                    <li>Data Statistik Realisasi Anggaran Dipa (01) BUA MARI Per Bulan Tahun 2020</li>
                                </ul>
                                <div class="months">
                                    <a href="https://drive.google.com/file/d/12MgcKntAqdp3-LrATICSKad3_-_j3hWi/view"
                                        class="month-link">Januari</a>
                                    <a href="https://drive.google.com/file/d/1jprLEQzGZ1Kv24IE8nsSxxIvBwiyZ6-X/view"
                                        class="month-link">Februari</a>
                                    <a href="https://drive.google.com/file/d/10aJzpv8JaUg4TeV7SlvquvpNZx1nWDi_/view"
                                        class="month-link">Maret</a>
                                    <a href="https://drive.google.com/file/d/1s0CQR8xV8y6dWDpyANX-8ZTWR9NqAmtr/view"
                                        class="month-link">April</a>
                                    <a href="https://drive.google.com/file/d/1sd_qaGeAvpjR5P2GxhaoZLqy-7Y1prl1/view"
                                        class="month-link">Mei</a>
                                    <a href="https://drive.google.com/file/d/1MTVIEE_LlJmjnW0HvdDXUzGENZdn0qx7/view"
                                        class="month-link">Juni</a>
                                    <a href="https://drive.google.com/file/d/1jLRX6kik93y7rHG8EI8G3PdgJa3vXQZ_/view"
                                        class="month-link">Juli</a>
                                    <a href="https://drive.google.com/file/d/1bR6Og4aKavIJ6ncpC46mlawQinIutv3i/view"
                                        class="month-link">Agustus</a>
                                    <a href="https://drive.google.com/file/d/1kRk4oEeh10JqgTlYykoytCrCkM5OiMRL/view"
                                        class="month-link">September</a>
                                    <a href="https://drive.google.com/file/d/1MeqTlXU6DS88XWgMcdFSKNhjeP0zcgSz/view"
                                        class="month-link">Oktober</a>
                                    <a href="https://drive.google.com/file/d/1UOOsnEmV-TvfMRvTp0IV2o6W-jeaSS0H/view"
                                        class="month-link">November</a>
                                    <a href="https://drive.google.com/file/d/1f6DQDOl8KEtgic0aA3ApTKun5wnbrhB0/view"
                                        class="month-link">Desember</a>
                                </div>
                                <ul>
                                    <li>Data Statistik Realisasi Anggaran Dipa (05) Dirjen Badilmiltun MARI Tahun 2020</li>
                                </ul>
                                <div class="months">
                                    <a href="https://drive.google.com/file/d/1Td4X00JtT0BbgFD0VdTRMbfKApljoVxc/view"
                                        class="month-link">Januari</a>
                                    <a href="https://drive.google.com/file/d/19NP9SFfIR-xoI3UuJFs9gvNhYwIeq7WW/view?usp=sharing"
                                        class="month-link">Februari</a>
                                    <a href="https://drive.google.com/file/d/1JpEIrOGZbVvEZEy3hv3w0Pkvb7Xi3uXy/view"
                                        class="month-link">Maret</a>
                                    <a href="https://drive.google.com/file/d/1b9ziwnlgFDX4Y2xBongPuFcipGfmVWQZ/view"
                                        class="month-link">April</a>
                                    <a href="https://drive.google.com/file/d/11mciZ5YlOGr55otJ-S4sXwLx3KTZVgX6/view"
                                        class="month-link">Mei</a>
                                    <a href="https://drive.google.com/file/d/1IHjBYI5RvddkZ_UIsZvY2XczM9aO8MQZ/view"
                                        class="month-link">Juni</a>
                                    <a href="https://drive.google.com/file/d/1WhER0vp6JT2yqFIjc2_Tp4hINJsqlQ45/view"
                                        class="month-link">Juli</a>
                                    <a href="https://drive.google.com/file/d/1HBSVFjGYNYCY69WyjcRCkdhV0FpzkpyW/view"
                                        class="month-link">Agustus</a>
                                    <a href="https://drive.google.com/file/d/1BUlt-EX7GvvK8casx5eHoPt5sdRk87W7/view"
                                        class="month-link">September</a>
                                    <a href="https://drive.google.com/file/d/1Y_jqKGslvhg1csAR0KHfGFWhxXdeCo5n/view"
                                        class="month-link">Oktober</a>
                                    <a href="https://drive.google.com/file/d/1VlrZAchXGTzSRBcNJAcqXxaXC7x24bxO/view"
                                        class="month-link">November</a>
                                    <a href="https://drive.google.com/file/d/1ep_wEDbgsM8embF1mIIgNudN-lPxmwqb/view"
                                        class="month-link">Desember</a>
                                </div>

                                <h2 style="color: #ffd663; font-size: 22px; margin-top: 30px">Laporan Realisasi Anggaran Tahun 2019</h2>
                                
                                    <a href="https://drive.google.com/file/d/1mWSdjUKQqcZcJv55_eMk9No54TQLeNDV/view"class="report-link">Unduh Laporan Realisasi Anggaran Semester I - DIPA 01 (663225) 2019</a>

                                    <a href="https://drive.google.com/file/d/1mPR_4eQq8W0KPvDl7CFSIIHJjxndC2Zm/view"class="report-link">Unduh Laporan Realisasi Anggaran Semester II – DIPA 01 (663225) 2019</a>

                                    <a href="https://drive.google.com/file/d/1CS0cso1K2cSsmTPoMCqEZ1pf4n7oRSUr/view"class="report-link">Unduh Laporan Realisasi Anggaran Semester I – DIPA 05 (663226) 2019</a>

                                    <a href="https://drive.google.com/file/d/18tahGL5uW1EMmlT_A1BhS3GmNqJfEDS7/view" class="report-link">Unduh Laporan Realisasi Anggaran Semester II – DIPA 05 (663226) 2019</a>
                                
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
