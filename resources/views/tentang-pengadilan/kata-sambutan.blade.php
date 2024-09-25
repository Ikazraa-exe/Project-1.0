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
                                        <h2>Kata Sambutan</h2>
                                    </div>
                                </div>

                                <div class="content">
                                    <p><br>
                                        <b>Selamat Datang di Pengadilan Militer I-05 Pontianak</b>
                                    <p>Assalamualaikum Warahmatullah Wabarakatuh.
                                        Berkat Rahmat Tuhan Yang Maha Esa serta dukungan Keluarga Besar Pengadilan Militer
                                        I-05 Pontianak,
                                        maka Pengadilan Militer I-05 Pontianak telah meluncurkan Website yang dapat diakses
                                        oleh publik di
                                        mana saja dan kapan saja melalui domain <a
                                            href="www.dilmil-pontianak.go.id.">www.dilmil-pontianak.go.id.</a></p>
                                    </p>

                                    <p>
                                        Dengan tersedianya situs resmi Pengadilan Militer I-05 Pontianak merupakan
                                        implementasi dari SK KMA No.
                                        2-141/KMA/SK/VIII/2022 tanggal 30 Agustus 2022 tentang Standar Pelayanan Informasi
                                        Publik Di Pengadilan.
                                    </p>

                                    <p>
                                        Dengan adanya situs ini diharapkan mampu menjadi media informasi yang dapat
                                        dimanfaatkan di lingkungan
                                        peradilan maupun masyarakat secara umum, khususnya kepada para pencari keadilan di
                                        daerah hukum
                                        Pengadilan Militer I-05 Pontianak.
                                    </p>

                                    <p>
                                        Dengan penempatan informasi pada situs web Pengadilan Militer I-05 Pontianak
                                        diharapkan dapat
                                        memposisikan Pengadilan Militer I-05 Pontianak sebagai Lembaga Peradilan yang
                                        profesional dan modern
                                        yang berpuncak di Mahkamah Agung Republik Indonesia.
                                    </p>

                                    <p>
                                        Di dalam situs ini ditampilkan tentang Profil Pengadilan, Informasi Layanan Publik,
                                        Layanan Hukum,
                                        Transparansi, Link terkait dan sebagainya. Dengan adanya Website Pengadilan Militer
                                        I-05 Pontianak
                                        diharapkan masyarakat pencari keadilan dapat mengakses informasi layanan Pengadilan
                                        secara online tanpa
                                        harus datang ke Pengadilan.
                                    </p>

                                    <p>
                                        Selanjutnya dalam peluncuran Website ini kami masih memerlukan saran maupun pendapat
                                        guna kemajuan
                                        Pengadilan di Indonesia khususnya Pengadilan Militer I-05 Pontianak.
                                    </p>

                                    <p>
                                        Harapan kami, semoga situs ini dapat bermanfaat bagi kita semua serta dapat
                                        mendukung terwujudnya
                                        modernisasi Pengadilan di Indonesia khususnya Pengadilan Militer I-05 Pontianak.
                                        Amin.
                                    </p>


                                    <p>
                                        Wassalamu’alaikum Warahmatullahiwabarakatuh.
                                    </p>

                                    <p style="text-align: end; margin-top: 20px;">
                                        Kepala Pengadilan Militer I-05 Pontianak<br><br>
                                        ttd<br><br>
                                        Kolonel Chk Setyanto Hutomo, S.H.
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
