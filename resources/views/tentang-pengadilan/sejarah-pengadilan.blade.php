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
                                        <h2>Sejarah Pengadilan Militer I-05 Pontianak</h2>
                                    </div>
                                </div>

                                <div class="content">
                                    <br>

                                    <p>Amandemen Keempat Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 (UUD
                                        1945) Pasal 24 ayat (1) menegaskan sifat dan karakter kekuasaan kehakiman dengan
                                        menyatakan : “Kekuasaan Kehakiman adalah kekuasaan negara yang merdeka untuk
                                        menyelenggarakan peradilan guna menegakkan hukum dan keadilan”. Di dalam Pasal 1
                                        ayat (1) Undang-Undang Nomor 48 Tahun 2009 tentang Kekuasaan Kehakiman juga
                                        dikemukakan : “Kekuasaan Kehakiman adalah kekuasaan negara yang merdeka untuk
                                        menyelenggarakan peradilan guna menegakkan hukum dan keadilan berdasarkan Pancasila
                                        dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, demi terselenggaranya
                                        Negara Hukum Republik Indonesia”.</a></p>
                                    </p>

                                    <p>
                                        Menurut Pasal 18 Undang-Undang Nomor 48 Tahun 2009 tentang Kekuasaan Kehakiman :
                                        “Kekuasaan Kehakiman dilakukan oleh sebuah Mahkamah Agung dan Badan Peradilan yang
                                        berada di bawahnya dalam Lingkungan Peradilan Umum, Lingkungan Peradilan Agama,
                                        Lingkungan Peradilan Militer, Lingkungan Peradilan Tata Usaha Negara, dan oleh
                                        sebuah Mahkamah Konstitusi”. Bahwa dalam rangka melaksanakan ketentuan tersebut
                                        kemudian diatur bahwa Organisasi, administrasi, dan finansial Mahkamah Agung dan
                                        Badan Peradilan yang berada di bawahnya berada di bawah kekuasaan Mahkamah Agung,
                                        sesuai Pasal 21 ayat (1) Undang-Undang Nomor 48 Tahun 2009 tentang Kekuasaan
                                        Kehakiman.
                                    </p>

                                    <p>
                                        Pengadilan Militer I-05 Pontianak sebagai lembaga peradilan dan pelaksana kekuasaan
                                        kehakiman di bawah Mahkamah Agung RI mempunyai kedudukan yang kuat.
                                    </p>

                                    <p>
                                        Berdasarkan Undang-Undang Dasar 1945 pasal 24 ayat 2 menyatakan bahwa kekuasaan
                                        kehakiman dilakukan oleh sebuah Mahkamah Agung dan badan peradilan yang ada di
                                        bawahnya dalam lingkungan Peradilan Umum, lingkungan Peradilan Agama, lingkungan
                                        Peradilan Militer, Lingkungan Peradilan Tata Usaha Negara, dan oleh sebuah Mahkamah
                                        Konstitusi. Pengadilan Militer I-05 Pontianak semenjak tanggal 9 Juli 2004 secara
                                        Organisasi, Administrasi dan Finansial berkedudukan/berada di bawah Mahkamah Agung
                                        RI, sebagaimana dalam Keputusan Presiden Nomor 56 Tahun 2004 tanggal 9 Juli 2004
                                        tentang Pengalihan Organisasi, Administrasi dan Finansial Pengadilan Dalam
                                        Lingkungan Peradilan Militer Dari Markas Besar Tentara Nasional Indonesia Ke
                                        Mahkamah Agung RI.
                                    </p>

                                    <p>
                                        Berdasarkan Keputusan Ketua Mahkamah Agung Republik Indonesia Nomor :
                                        39/KMA/SK/II/2017 tanggal 9 Februari 2017 tentang peningkatan kelas pada 3 (tiga)
                                        Pengadilan Militer Tipe B menjadi Pengadilan Militer Tipe A, Pengadilan Militer I-05
                                        Pontianak merupakan salah satu Pengadilan Militer yang ditetapkan peningkatan kelas
                                        Pengadilan, semula Pengadilan Militer Tipe B menjadi Pengadilan Militer Tipe A.
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
