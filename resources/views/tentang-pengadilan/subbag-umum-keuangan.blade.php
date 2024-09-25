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
                                        <h2>Sub Bagian Umum dan Keuangan</h2>
                                    </div>
                                </div>

                                <div class="content">

                                    <p>
                                        <br>
                                    <div class="highlight" style="border-radius: 8px">URAIAN TUGAS / PEKERJAAN KASUBBAG UMUM DAN KEUANGAN :</div>
                                    <p>
                                    <ul>
                                        <li>Memeriksa Ketersediaan Dana Anggaran dalam DIPA</li>
                                        <li>Menyusun Rencana Penggunaan Anggaran Belanja Rutin Tiap Tahun</li>
                                        <li>Melaksanakan realisasi anggaran sesuai DIPA</li>
                                        <li>Tugas dan kewajiban pejabat penguji SPP dan penanda tangan SPM</li>
                                        <li>Memeriksa kelengkapan berkas SPP yang selanjutnya dilaporkan ke KPPN untuk
                                            penerbitan SP2D</li>
                                        <li>Mengikuti Pejabar/Pegawai Keuangan dalam setiap kegiatan aplikasi mengenai
                                            mekanisme pembayaran gaji dari laporan keuangan</li>
                                    </ul>

                                    </p>

                                    <p>
                                    <div class="highlight" style="border-radius: 8px">URAIAN TUGAS / PEKERJAAN STAFF SUB BAGIAN UMUM DAN KEUANGAN :
                                    </div>
                                    <p>
                                    <ul>
                                        <li>Mengajukan permintaan uang persediaan, SPM dan mengelola uang persediaan yang
                                            tercantum dalam DIPA</li>
                                        <li>Membukukan uang persediaan kedalam:
                                            <ol>
                                                <li>Buku Kas Tunai</li>
                                                <li>Buku Kas Umum</li>
                                                <li>Buku Penerimaan Dan Penyetoran Pajak</li>
                                                <li>Buku Bank</li>
                                                <li>Buku Bantu Per MAK</li>
                                            </ol>
                                        </li>
                                        <li>Melaksanakan pembayaran uang persediaan anggaran setelah :
                                            <ol>
                                                <li>Meneliti kelengkapan Surat Perintah Pembayaran (SPP)</li>
                                                <li>Menguji kebenaran perhitungan tagihan yang terecantum dalam Surat
                                                    Perintah Pembayaran (SPP)</li>
                                            </ol>
                                        </li>
                                        <li>Membukukan semua penerimaan dan pengeluaran anggaran dalam Buku Kas Tunai dan
                                            Kas Umum</li>
                                        <li>Melaksanakan pemungutan dan penyetoran pajak ke kas negara melalui bank</li>
                                        <li>Menyiapkan kelengkapan SPP dan SPM untuk pengajuan/penggantian uang Persediaan
                                            Anggaran Belanja</li>
                                        <li>Menutup Buku Kas Umum pada setiap akhir bulan ditandatangani Bendahara
                                            Pengeluaran dan Kuasa Pengguna Anggaran</li>
                                        <li>Mengajukan Permintaan Honorer Pegawai tiap Akhir Bulan</li>
                                        <li>Pemeriksaan buku kas oleh pengawasan keuangan, PT, MA kemudian membuat Berita
                                            Acara Penutupan Buku Kas oleh Bendahara</li>
                                    </ul>
                                    </p>
                                    <br>
                                    <p><b>URAIAN TUGAS / PEKERJAAN</b>
                                    <ul>
                                        <li>Mengajuan permintaan gaji pegawai dan SPM gaji setiap bulan</li>
                                        <li>Mengajukan permintaan uang makan pegawai tiap bulan</li>
                                        <li>Mengajukan permintaan kenaikan gaji pegawai, kenaikan gaji berkala/kenaikan
                                            pangkat, kekurangan gaji dan gaji susulan pegawai yang pindah tugas sesuai Surat
                                            Keputusan (SK)</li>
                                        <li>Mengisi Kartu Pegawai tiap bulan</li>
                                        <li>Mengajukan permintaan lembur pegawai</li>
                                        <li>Membuat laporan SPT PPH Pasal 21 tiap akhir tahun</li>
                                        <li>Mengajukan SKPP gaji pegawai yang pindah tugas dan pensiun</li>
                                    </ul>
                                    </p>

                                    <p><b>URAIAN TUGAS / PEKERJAAN</b>
                                    <ul>
                                        <li>Membuat Laporan Bulanan SAI/SAKPA</li>
                                        <li>Membuat dan meyampaikan daftar usulan tujangan khusus kinerja (Remunerasi)
                                            pegawai dan pertanggungjawaban dimuka</li>
                                        <li>Membuat Laporan CALK tiap akhir tahun</li>
                                        <li>Membuat Laporan Bappenas / pp 39 setiap 3 bulan / Triwulan</li>
                                    </ul>
                                    </p>

                                    <p><b>URAIAN TUGAS / PEKERJAAN</b>
                                    <ul>
                                        <li>Melaksanakan tugas perbendaharaan yang bersumber dari penerimaan negara bukan
                                            pajak (PNBP)</li>
                                        <li>Melaksanakan tugas-tugas kebendaharaan penerima</li>
                                        <li>Membukukan ke Buku Kas Bendahara Penerima</li>
                                        <li>Membuat laporan bulanan dan triwulan PNBP setiap akhir bulan untuk dilaporkan kepada biro keuangan PT dan MARI</li>
                                    </ul>
                                    </p>

                                    <p><b>URAIAN TUGAS / PEKERJAAN</b>
                                      <ul>
                                          <li>Menerima dan membaca surat masuk</li>
                                          <li>Menerima Surat Dinas dari masing-masing unit yang akan dikirim</li>
                                          <li>Mencatat hasil disposisi dan meneruskan surat sesuai dengan disposisi</li>
                                          <li>Menerima permintaan kebutuhan kantor dari masing-masing bagian</li>
                                          <li>Membuat daftar rancangan kebutuhan investaris kantor/BMN</li>
                                          <li>Mengajukan daftar barang rancangan anggaran belanja kepada kuasa pengguna anggaran</li>
                                          <li>Membuat rencana kegiatan pemeliharaan bangunan kantor</li>
                                          <li>Menyetujui perbaikan bangunan kantor</li>
                                          <li>Melakukan perawatan dan perbaikan bangunan kantor</li>
                                          <li>Menjalankan pengiriman surat keluar untuk memperlancar informasi keluar</li>
                                          <li>Membuat rancangan perbaikan service kendaraan dinas kantor</li>
                                          <li>Melakukan perawatan dan perbaikan kendaraan dinas kantor</li>
                                          <li>Membayar pajak dan mengurus perpanjangan pajak kendaraan dinas</li>
                                          <li>Merencanakan pengelolaan perpustakaan kantor</li>
                                          <li>Mengumpulkan data dan dokumen barang yang akan dihapus</li>
                                      </ul>
                                      </p>

                                      <p><b>URAIAN TUGAS / PEKERJAAN</b>
                                        <ul>
                                            <li>Membuat laporan BMN setiap 6 bulan / Semester</li>
                                            <li>Menginput data kedalam aplikasi perserdiaan</li>
                                            <li>Melakukan opname fisik barang persediaan</li>
                                            <li>Menginput data barang milik negara (BMN) ke aplikasi</li>
                                            <li>Rekonsiliasi dengan KPKNL dan menyampaikan laporan BMN ke Korwil</li>
                                            <li>Meneliti dan mensortir surat keluar</li>
                                            <li>Mencatat seluruh surat masuk ke buku agenda surat masuk, memberikan nomor surat masuk, dan memberikan lembar disposisi</li>
                                            <li>Mencatat hasil dispososisi dan meneruskan surat sesuai dengan disposisi</li>
                                            <li>Mendistribusikan surat dengan disposisi</li>
                                            <li>Memberikan nomor surat keluar dan mencatat surat keluar ke buku agenda surat keluar</li>
                                            <li>Mengerjakan pengetikan surat-surat keluar</li>
                                            <li>Mencatat surat-surat yang akan dikirim</li>
                                            <li>Mencatat kebutuhan sehari-hari perkantoran yang akan diadakan sesuai dengan permintaan masing-masing</li>
                                            <li>Mendistribusikan kepala masing-masing bagian sesuai dengan kebutuhan</li>
                                            <li>Menjalankan pengiriman surat keluar untuk memperlancar informasi keluar</li>
                                            <li>Membuat daftar investaris ruangan (DIR)</li>
                                            <li>Pengelolaan ATK / barang kantor</li>
                                        </ul>
                                        </p>  

                                        <p><b>URAIAN TUGAS / PEKERJAAN</b>
                                          <ul>
                                              <li>Mengisi buku induk perpustakaan</li>
                                              <li>Memberikan nomor pada buku dan membuat katalog buku</li>
                                              <li>Menata buku di rak sesuai dengan klarifikasinya</li>
                                              <li>Mengisi buku daftar pinjam kepada pegawai yang meminjam</li>
                                              <li>Memperpanjang masa peminjaman buku</li>
                                              <li>Mencatat masa pengembalian buku dalam buku pengembalian</li>
                                              <li>Pemeliharaan arsip, surat-surat dan dokumentasi kantor</li>
                                              <li>Melancarkan pelayanan pinjaman buku-buku perpustakaan</li>
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
