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
                                        <h2>Panitera Muda Pidana</h2>
                                    </div>
                                </div>

                                <div class="content">

                                    <p>
                                        <br>
                                    <div class="highlight" style="border-radius: 8px">TUGAS POKOK :</div>
                                    <p>
                                    <ul>
                                        <li>Pelaksanaan pemeriksaan kelengkapan berkas perkara
                                        </li>
                                        <li>Pelaksanaan registrasi perkara
                                        </li>
                                        <li>Pelaksanaan penyusunan rencana sidang, penetapan sidang dan penetapan hakim</li>
                                        <li>Pelaksanaan distribusi perkara yang telah diregister untuk diteruskan kepada
                                            ketua majelis hakim</li>
                                        <li>Pelaksanaan penghitungan, penyiapan dan pengiriman penetapan penahanan,
                                            perpanjangan penahanan dan penangguhan penahanan</li>
                                        <li>Pelaksanaan penerimaan kembali berkas perkara yang sudah diputus dan diminutasi
                                        </li>
                                        <li>Pelaksanaan pengiriman salinan putusan kepada oditur militer dan Terdakwa</li>
                                        <li>Pelaksanaan pengiriman permohonan banding dengan dilampiri bendel a dan bendel b
                                        </li>
                                        <li>Pelaksanaan penyimpanan berkas perkara yangbelum mempunyai kekuatan hukum tetap
                                        </li>
                                        <li>Pelaksanaan penyerahan berkas peerkara yang sudah mempunyai kekuatan hukum tetap
                                            kepanitera muda hukum</li>
                                        <li>Pelaksanaan urusan tata usaha kepaniteraan</li>
                                        <li>Pelaksanaan fungsi lain yangdiberikan oleh panitera</li>
                                    </ul>

                                    </p>

                                    <p>
                                    <div class="highlight" style="border-radius: 8px">FUNGSI :</div>
                                    <p>
                                    <ul>

                                        <li>Pelaksanaan pembantu Hakim dengan mengikuti dan mencatat jalannya persidangan
                                        </li>
                                        <li>Pelaksanaan pemeriksaan dan penelaahan kelengkapan berkas perkara pidana</li>
                                        <li>Pelaksanaan registrasi perkara pidana</li>
                                        <li>Pelaksanaan penerimaan permohonan praperadilan dan pemberitahuan kepada termohon
                                        </li>
                                        <li>Pelaksanaan distribusi perkara yang telahdiregister untuk diteruskan kepada
                                            Ketua Majelis Hakim berdasarkan Penetapan Penunjukan Majelis Hakim dari Ketua
                                            Pengadilan</li>
                                        <li>Pelaksanaan penghitungan, penyiapan dan pengiriman penetapan penahanan,
                                            perpanjangan penahanan dan penangguhan penahanan</li>
                                        <li>Pelaksanaan penerimaan permohonan ijin penggeledahan dan ijin dari penyidik</li>
                                        <li>Pelaksanaan penerimaan kembali berkas perkara yang sudah diputus dan diminutasi
                                        </li>
                                        <li>Pelaksanaan pemberitahuan isi putusan tingkat pertama kepada para pihak yang
                                            tidak hadir</li>
                                        <li>Pelaksanaan penyampaian pemberitahuan putusan tingkat banding, kasasi dan
                                            peninjauan kembali kepada para pihak</li>
                                        <li>Pelaksanaan penerimaan dan pengiriman berkas perkara yang dimohonkan banding,
                                            kasasi dan peninjauan kembali</li>
                                        <li>Pelaksanaan pengawasan terhadap pemberitahuan isi putusan upaya hukum kepada
                                            para pihak dan menyampaikan relas penyerahan isi putusan kepada Pengadilan
                                            Tinggi Militer dan Mahkamah Agung</li>
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
