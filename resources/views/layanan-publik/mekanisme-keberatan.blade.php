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
                                        <h2>Mekanisme Keberatan Atas Permohonan Informasi</h2>
                                    </div>
                                </div>

                                <div class="content">
                                    <br>

                                    <ol type="A">
                                        <b>
                                            <li>Syarat dan Prosedur Pengajuan</li>
                                        </b>

                                        <ol>
                                            <li>Keberatan ditujukan kepada Atasan PPID melalui Petugas Informasi oleh
                                                Pemohon
                                                atau kuasanya</li>
                                            <li>Pemohon berhak mengajukan keberatan dalam hal ditemukannya alasan sebagai
                                                berikut :
                                                <ul>
                                                    <li>Adanya penolakan atas permohonan informasi</li>
                                                    <li>Tidak disediakannya informasi yang wajib diumumkan secara berkala
                                                        sebagaimana dimaksud dalam bagian II. A</li>
                                                    <li>Tidak ditanggapinya permohonan informasi</li>
                                                    <li>Permohonan ditanggapi tidak sebagaimana yang diminta</li>
                                                    <li>Tidak dipenuhinya permohonan informasi</li>
                                                    <li>Pengenaan biaya yang tidak wajar</li>
                                                    <li>Penyampaian informasi melebihi waktu yang diatur dalam Pedoman ini
                                                    </li>
                                                </ul>
                                            </li>

                                        </ol>

                                        <b>
                                            <li>Registrasi</li>
                                        </b>
                                        <ol>
                                            <li>Petugas informasi wajib memberikan formulir keberatan kepada pemohon untuk
                                                diisi dan membantu pengisiannya jika diperlukan (Format Formulir Keberatan)
                                            </li>
                                            <li>Petugas Informasi langsung memberikan salinan formulir keberatan sebagai
                                                tanda terima pengajuan keberatan</li>
                                            <li>Petugas Informasi wajib mencatat pengajuan keberatan dalam register
                                                Keberatan dan meneruskannya kepada atasan PPID dengan tembusan kepada PPID
                                                dalam waktu selambatlambatnya 2 (dua) hari kerja sejak permohonan diajukan
                                            </li>
                                        </ol>

                                        <b>
                                            <li>Tanggapan Atas Keberatan</li>
                                        </b>
                                        <p>Atasan PPID wajib memberikan tanggapan dalam bentuk keputusan tertulis yang
                                            disampaikan kepada Petugas PPID dengan tembusan kepada PPID selambat-lambatnya
                                            dalam waktu 20 (dua puluh) hari sejak dicatatnya pengajuan keberatan tersebut
                                            dalam register keberatan. Keputusan tertulis sebagaimana dimaksud
                                            sekurang-kurangnya memuat :
                                        <ol type="a">
                                            <li>Tanggal pembuatan surat tanggapan atas keberatan</li>
                                            <li>Nomor surat tanggapan atas keberatan</li>
                                            <li>Tanggapan/jawaban tertulis atasan PPID atas keberatan yang diajukan yang
                                                berisi salah satu atau beberapa hal sebagai berikut :
                                                <br>
                                                <ul>
                                                    <li>Mendukung sikap atau putusan PPID disertai alasan dan pertimbangan
                                                        yang jelas</li>
                                                    <li>Membatalkan putusan PPID dan/atau memerintahkan PPID untuk
                                                        memberikan sebagian atau seluruh informasi yang diminta kepada
                                                        Pemohon dalam jangka waktu tertentu selambat-lambat 14 (empat belas)
                                                        hari kerja</li>
                                                    <li>Memerintahkan PPID untuk menjalankan kewajibannya dalam memberikan
                                                        pelayanan informasi sesuai dengan Undang-undang dan peraturan yang
                                                        berlaku dalam jangka waktu tertentu selambat-lambat (empat belas)
                                                        hari kerja</li>
                                                    <li>Menetapkan biaya yang wajar yang dapat dikenakan kepada pemohon
                                                        informasi (Format Surat Tanggapan Atas Keberatan dalam Lampiran XI)
                                                    </li>
                                                </ul>
                                            </li>


                                        </ol>
                                        </p>
                                        <p>Petugas Informasi menyampaikan atau mengirimkan keputusan Atasan PPID kepada
                                            Pemohon atau kuasanya selambat-lambatnya dalam waktu 2 (dua) hari kerja
                                            sejak menerima tanggapan dari Atasan PPID dan ditembuskan ke PPID serta Biro
                                            Hukum dan Hubungan Masyarakat Mahkamah Agung.</p>

                                        <p>Pemohon yang mengajukan keberatan yang tidak puas dengan keputusan atasan PPID
                                            berhak mengajukan permohonan penyelesaian sengketa Informasi kepada Komisi
                                            Informasi selambat-lambatnya 14 (empat belas) hari kerja sejak diterimanya
                                            keputusan atasan PPID.</p>

                                    </ol>

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
