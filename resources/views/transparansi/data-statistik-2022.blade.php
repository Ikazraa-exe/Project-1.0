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
                                        <h2>Data Statistik Perkara TA. 2022</h2>
                                    </div>
                                </div>

                                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-link-45deg flex-shrink-0"></i>
                                    <div>
                                        <h4><a href="https://drive.google.com/file/d/1ockXdY-eaoojPS64qjn8W6gGQDjGakEN/view"
                                                class="stretched-link">DATA KINERJA PENYELESAIAN PERKARA PER TANGGAL 31
                                                DESEMBER TAHUN 2022</a></h4>
                                        <div style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
                                            <img src="img/statistik-22.jpg" alt="" class="img-fluid">
                                        </div>
                                        <br>
                                        <div style="text-align: center;" data-aos="fade-up" data-aos-delay="100">
                                            <img src="img/statistik1-22.jpg" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div><!-- End Icon Box -->

                                <hr>

                                <h2 style="color: #ffd663; font-size: 22px; margin-top: 30px">Laporan Realisasi Anggaran
                                    Tahun 2019</h2>

                                
                                    <ul><a
                                            href="https://drive.google.com/file/d/1BVR81i5GBrUWWLHblng7m7cyu4m95AmA/view"class="report-link">Laporan
                                            Keadaan Perkara Bulan Januari</a></ul>

                                    <ul><a
                                            href="https://drive.google.com/file/d/1kIHr3cmc2AieL8LDstFwol4H1--QDRmy/view"class="report-link">Laporan
                                            Keadaan Perkara Bulan Februari</a></ul>
                                    <ul><a
                                            href="https://drive.google.com/file/d/1J_qKXGZO_nNv2bsyYzRTmZFmLXhcsB8X/view"class="report-link">Laporan
                                            Keadaan Perkara Bulan Maret</a></ul>

                                    <ul><a href="https://drive.google.com/file/d/1LJwqdnrSohGndcBUDCkXwMkh13ke_Sj_/view"
                                            class="report-link">Laporan Keadaan Perkara Bulan April</a></ul>
                                    <ul><a
                                            href="https://drive.google.com/file/d/15wBAixwb2CaudYXAMalE0mZfQkQEFpgl/view"class="report-link">Laporan
                                            Keadaan Perkara Bulan Mei</a></ul>
                                    <ul><a
                                            href="https://drive.google.com/file/d/16_Ym3yR1lP1-yvtEqsKh3oS8jAV5BGAy/view"class="report-link">Laporan
                                            Keadaan Perkara Bulan Juni</a></ul>
                                    <ul><a
                                            href="https://drive.google.com/file/d/1-uf_3GAOFggvhN-PR5bkrSGsWeXtQJeh/view"class="report-link">Laporan
                                            Keadaan Perkara Bulan Juli</a></ul>

                                    <ul><a href="https://drive.google.com/file/d/1ASx5hZPnNjYUHW92vMOdEG0zSBD8XUS7/view"
                                            class="report-link">Laporan Keadaan Perkara Bulan Agustus</a></ul>
                                    <ul><a
                                            href="https://drive.google.com/file/d/1a51yxDHnwMvRnYSugsjJRO6o8OrAoaXU/view"class="report-link">Laporan
                                            Keadaan Perkara Bulan September</a></ul>

                                    <ul><a
                                            href="https://drive.google.com/file/d/1-1VWNApbEpTIiL9wpDrEcy1tZgtmqx6F/view"class="report-link">Laporan
                                            Keadaan Perkara Bulan Oktober</a></ul>

                                    <ul><a href="https://drive.google.com/file/d/12RMySfe8yai-iI1xbZd_qxLt-ClrCL6w/view"
                                            class="report-link">Laporan Keadaan Perkara Bulan November</a></ul>

                                    <ul><a href="https://drive.google.com/file/d/12RMySfe8yai-iI1xbZd_qxLt-ClrCL6w/view"
                                            class="report-link">Laporan Keadaan Perkara Bulan Desember</a></ul>
                               
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
