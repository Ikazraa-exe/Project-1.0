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
                                        <h2>Sub Bagian Kepegawaian dan Ortala</h2>
                                    </div>
                                </div>

                                <div class="content">

                                    <p>
                                        <br>
                                    <div class="highlight" style="border-radius: 8px">URAIAN TUGAS KASUB BAGIAN KEPEGAWAIAN DAN ORTALA :</div>
                                    <p>
                                    <ul>
                                        <li>Melaksanaan pendataan pegawai</li>
                                        <li>Mengelola dan menyajikan data pegawai</li>
                                        <li>Memberikan data kepegawaian kepada Pengadilan Tinggi dan Pusat</li>
                                        <li>Mengusulkan kenaikan pangkat reguler periode Pebruari, April, Juni, Agustus, Oktober dan Desember</li>
                                        <li>Melaksanakan pembuatan surat pemberitahuan kenaikan gaji berkala 2 bulan sebelum tanggal berlakunya</li>
                                        <li>Membuat surat ijin cuti/berita acara serah terima tugas dan tanggung jawab</li>
                                        <li>Mengusulkan permintaan Karpeg, Karis/karsu, Taspen dan Akses</li>
                                        <li>Menginventarisir keadaan pegawai yang berhak memperoleh penghargaan</li>
                                        <li>Mengusulkan pegawai memenuhi syarat untuk memperoleh penghargaan</li>
                                        <li>Mengikutsertakan pada diklat teknis yudisial dan non teknis yudisial</li>
                                        <li>Mengelola Asrip surat-surat yang berhubungan dengan kepegawaian secara tepat guna</li>
                                        <li>Menertibkan penataan file kepegawaian</li>
                                        <li>Menertibkan daftar hadir dan pulang</li>
                                        <li>Melakukan evaluasi tingkat kedisiplinan pada setiap rapat</li>
                                    </ul>

                                    </p>

                                    <p>
                                    <div class="highlight" style="border-radius: 8px">URAIAN TUGAS / PEKERJAAN STAFF BAGIAN KEPEGAWAIAN DAN ORTALA :
                                    </div>
                                    <p>
                                    <ul>
                          
                                        <li>Membantu Kasubag kepegawaian dalam setiap pekerjaan</li>
                                        <li>Membenahi file masing-masing hakim dan pegawai sesuai urutan</li>
                                        <li>Merekap daftar hadir</li>
                                        <li>Membuat surat cuti</li>
                                        <li>Mengelola Absen Finger/Sidik jari</li>
                                        <li>Membuat Daftar Unit Kepangkatan Hakim dan Pegawai</li>
                                        <li>Membuat Laporan Semesteran dan Tahunan untuk Bezetting</li>
                                        <li>Membuat usulan kenaikan pangkat dan jabatan bagi hakim dan pegawai</li>
                                        <li>Membuat usulan pengangkatan bagi Calon Pegawai Negeri sipil menjadi Pegawai Negeri Sipil</li>
                                        <li>Membuat DP3 Hakim dan Pegawai</li>
                                        <li>Membuat surat masuk dan surat keluar</li>
                                        <li>Mengelola Sistem Informasi Kepegawaian (SIKEP)</li>
                                    </ul>
                                    </p>
                                    
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
