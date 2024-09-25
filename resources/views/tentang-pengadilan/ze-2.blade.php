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


        <!-- Blog Details Section -->
        <div id="blog-details" class="blog-details section">
            <div class="container">
                <section id="features" class="features section">
                    <article class="article">
                        <ul class="nav nav-tabs row g-2 d-flex" id="myTab" role="tablist">
                            <li class="nav-item col-3" role="presentation">
                                <a class="nav-link active show" id="deskripsi-tab" data-bs-toggle="tab" href="#deskripsi"
                                    role="tab" aria-controls="deskripsi" aria-selected="true">
                                    <h4>Deskripsi</h4>
                                </a>
                            </li>
                            <li class="nav-item col-3" role="presentation">
                                <a class="nav-link" id="powerpoint-tab" data-bs-toggle="tab" href="#powerpoint"
                                    role="tab" aria-controls="powerpoint" aria-selected="false">
                                    <h4>Power Point</h4>
                                </a>
                            </li>
                            <li class="nav-item col-3" role="presentation">
                                <a class="nav-link" id="dokumen-tab" data-bs-toggle="tab" href="#dokumen" role="tab"
                                    aria-controls="dokumen" aria-selected="false">
                                    <h4>Dokumen</h4>
                                </a>
                            </li>
                            <li class="nav-item col-3" role="presentation">
                                <a class="nav-link" id="media-tab" data-bs-toggle="tab" href="#media" role="tab"
                                    aria-controls="media" aria-selected="false">
                                    <h4>Media</h4>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="deskripsi" role="tabpanel"
                                aria-labelledby="deskripsi-tab">
                                <div class="row">
                                    <div class="col-lg-12 mt-3 mt-lg-0 d-flex flex-column justify-content-center">

                                        <p class="fst-italic">
                                        <p>Area ini bertujuan untuk mengubah secara sistematis dan konsisten
                                            mekanisme kerja pola pikir (mind set) serta budaya kerja
                                            (culture set) individu pada Pengadilan Militer I-05 Pontianak
                                            agar menjadi lebih baik sesuai dengan tujuan dan sasaran
                                            pembangunan Zona Integritas. Target yang ingin dicapai adalah:
                                        </p>
                                        <ol type="1">
                                            <li>Meningkatnya komitmen seluruh jajaran pimpinan dan anggota
                                                Pengadilan Militer I-05 Pontianak dalam membangun Zona
                                                Integritas menuju WBK/WBBM.</li>
                                            <li>Terjadinya perubahan pola pikir dan budaya kerja.</li>
                                            <li>Pimpinan satuan kerja dan pejabat struktural di bawahnya
                                                harus berperan sebagai role model/keteladanan dalam
                                                pelaksanaan pembangunan Zona Integritas.</li>
                                            <li>Menurunnya risiko kegagalan karena adanya resistensi
                                                perubahan.</li>
                                        </ol>
                                        <p>Untuk mencapai target tersebut di atas terdapat beberapa
                                            indikator yang perlu dilakukan untuk menerapkan manajemen
                                            perubahan, yaitu:</p>
                                        <ol type="1">
                                            <li>
                                                <strong>Menyusun Tim Kerja</strong>
                                                <p>Tim kerja adalah tim yang dibentuk untuk melaksanakan
                                                    proses perubahan melalui program kegiatan dan inovasi di
                                                    6 area perubahan (6 komponen pengungkit). Tim kerja akan
                                                    menjadi motor dalam pembangunan zona integritas menuju
                                                    WBK. Dengan kegiatan:</p>
                                                <ol>
                                                    <li>Membentuk tim kerja dengan tahapan:
                                                        <ol type="a">
                                                            <li>Membuat undangan pembentukan tim kerja
                                                                WBK/WBBM.</li>
                                                            <li>Melaksanakan rapat pembentukan tim kerja
                                                                WBK/WBBM.</li>
                                                            <li>Penentuan tim kerja WBK/WBBM.</li>
                                                            <li>Pengesahan tim kerja WBK/WBBM.</li>
                                                        </ol>
                                                    </li>
                                                    <br>
                                                    <li>Penentuan anggota tim kerja selain pimpinan, dipilih
                                                        melalui prosedur mekanisme yang jelas dengan tahapan
                                                        melakukan seleksi untuk membentuk tim kerja
                                                        pembangunan Zona Integritas melalui prosedur yang
                                                        jelas dengan mempertimbangkan kompetensi, memahami
                                                        tugas pokok dan fungsi, berdedikasi, tidak
                                                        bermasalah, dan berdisiplin.
                                                        <ol type="a">
                                                            <li>Rapat penentuan tim kerja.</li>
                                                            <li>Penetapan tim kerja.</li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                                <br>
                                                <p>Kegiatan-kegiatan tersebut dilengkapi dengan data dukung:
                                                    undangan rapat, dokumen laporan pelaksanaan pembentukan
                                                    tim kerja, riwayat hidup dan jejak tim kerja, berita
                                                    acara dan laporan pelaksanaan seleksi tim kerja, notulen
                                                    rapat, SK tim kerja WBK.</p>
                                            </li>
                                            <br>
                                            <li>
                                                <strong>
                                                    Dokumen Rencana Pembangunan Zona Integritas Menuju
                                                    WBK/WBBM
                                                </strong>
                                                <p>Dokumen rencana pembangunan Zona Integritas adalah
                                                    program kegiatan yang akan dilaksanakan dalam melakukan
                                                    perubahan yang berisi target, waktu, dan hasil yang
                                                    ingin dicapai disesuaikan dengan karakteristik
                                                    masyarakat/satuan kerja masing-masing dengan cara
                                                    membuat dokumen rencana kerja pada tiap-tiap penanggung
                                                    jawab yang ditunjuk untuk membuat rencana aksi ZI menuju
                                                    WBK/WBBM (Kapan dimulai? Berapa lama? Target apa yang
                                                    akan dicapai?).</p>
                                                <p>Kegiatan tersebut dilengkapi dengan data dukung,
                                                    undangan, absensi, foto, dokumen rencana aksi, dan
                                                    dokumen kegiatan penyusunan rencana aksi.</p>
                                                <p>Dalam dokumen pembangunan ZI harus ada target prioritas
                                                    yang relevan dengan tujuan pembangunan ZI yaitu hasil
                                                    yang ingin dicapai pada tiap-tiap kegiatan. Program yang
                                                    dilaksanakan dalam rangka mempercepat proses perubahan
                                                    yang membawa dampak ke arah yang lebih baik dengan cara:
                                                </p>
                                                <ol type="a">
                                                    <li>Tentukan target prioritas yang dirasa mudah diraih
                                                        pada setiap komponen perubahan.</li>
                                                    <li>Penentuan target harus melibatkan seluruh tim kerja.
                                                    </li>
                                                    <li>Melaksanakan analisis terhadap rencana kerja yang
                                                        terlaksana atau tidak.</li>
                                                </ol>
                                                <br>
                                                <p>Kegiatan tersebut harus dilengkapi dengan data dukung
                                                    dokumen rencana aksi, dokumen laporan kegiatan serta
                                                    target prioritas.</p>
                                            </li>
                                            <br>
                                            <li>
                                                <strong>Monitoring dan Evaluasi Pembangunan ZI</strong>
                                                <ol type="a">
                                                    <li>Melaksanakan monitoring.</li>
                                                    <li>Melakukan laporan hasil monitoring.</li>
                                                    <li>Menindaklanjuti hasil monitoring.</li>
                                                </ol>
                                                <p></p>
                                                <p>Semua kegiatan tersebut dilengkapi dengan dokumen
                                                    undangan, notulen, daftar hadir dan foto.</p>
                                            </li>
                                            <li>
                                                <strong>Perubahan Pola Pikir dan Budaya Kerja</strong>
                                                <p>Perubahan pola pikir dan budaya kerja adalah kegiatan
                                                    yang dilaksanakan dalam rangka merubah pola pikir
                                                    anggota ke arah yang lebih baik serta mewujudkan budaya
                                                    kerja sehingga tercipta lingkungan kerja yang bebas
                                                    korupsi melalui upaya:</p>
                                                <ol type="1">
                                                    <li>Pimpinan harus berperan sebagai role model dalam
                                                        pelaksanaan pembangungan ZI dengan cara:
                                                        <ol type="a">
                                                            <li>Keteladanan yang ditunjukkan sehingga
                                                                menjadi panutan bawahannya.</li>
                                                            <li>Keteladanan mempunyai pengaruh dalam
                                                                pembentukan pribadi bawahan.</li>
                                                            <li>Keteladanan akan sangat cepat merubah pola
                                                                pikir bawahan.</li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                                <p>Kegiatan tersebut dilengkapi dengan data dukung:
                                                    dokumentasi kegiatan kerja sama, kegiatan sinergi,
                                                    pelayanan dan pengabdian masyarakat yang dilakukan oleh
                                                    pimpinan/2 pilar sebagai role model, absensi pimpinan 4
                                                    pilar, dokumentasi pimpinan sebagai Pembina upacara.</p>
                                            </li>

                                            <br>

                                            <li>
                                                <strong>Pembentukan Agen Perubahan</strong>
                                                <p>Meliputi kegiatan:</p>
                                                <ol type="a">
                                                    <li>Membuat undangan penetapan agen perubahan.</li>
                                                    <li>Melaksanakan rapat penetapan agen perubahan.</li>
                                                    <li>Menentukan syarat-syarat menjadi agen perubahan.
                                                    </li>
                                                    <li>Pengesahan agen perubahan.</li>
                                                </ol>

                                                <br>
                                                
                                                <p>Kegiatan tersebut di atas dilengkapi dengan data dukung:
                                                </p>
                                                <ol type="a">
                                                    <li>undangan rapat</li>
                                                    <li>dokumen laporan pelaksanaan agen
                                                        perubahan</li>
                                                    <li>Rekam jejak agen perubahan.</li>
                                                </ol>
                                                <br>
                                            <li>
                                                <strong>Budaya kerja dan pola pikir lingkungan
                                                    organisasi/Pengadilan Militer I-05 Pontianak
                                                </strong>

                                                <ol type="a">
                                                    <li>Menerapkan budaya kerja: pedoman prilaku warga
                                                        peradilan dan 10 budaya malu.</li>
                                                    <li>Memberikan reward dan punishment</li>
                                                    <li>Membuat laporan dan kegiatan pembangunan budaya
                                                        kerja dan pola pikir organisasi</li>
                                                </ol>
                                                <p></p>
                                                <p>Kegiatan tersebut diatas dilengkapi data dukung: dokumen
                                                    pelaksanaan kegiatan, penerapan budaya kerja dan
                                                    foto-fotonya, rekap absensi pegawai, dokumentasi reward
                                                    dan punishment.</p>
                                            </li>

                                            <li>
                                                <strong>Keterlibatan seluruh anggota dalam pembangunan ZI menuju
                                                    WBK/WBBM
                                                </strong>
                                                <p>Upaya yang dilakukan :</p>
                                                <ol type="a">
                                                    <li>Penandatanganan pakta integritas dan Komitemen Bersama
                                                        kepada seluruh pegawai</li>
                                                    <li>Melaksanakan Apel Pagi dan Sore</li>
                                                    <li>Olahraga Bersama pada hari selasa dan jumat</li>
                                                    <li>Kamis Bersih</li>
                                                    <li>Jumat Berkah</li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="powerpoint" role="tabpanel" aria-labelledby="powerpoint-tab">
                                <div class="row">
                                    <div class="col-lg-12 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                        <div class="icon-box d-flex position-relative" data-aos="fade-up"
                                            data-aos-delay="300">
                                            <i class="bi bi-link-45deg flex-shrink-0"></i>
                                            <div>
                                                <h4><a href="https://drive.google.com/file/d/1c5rr0w40r2Xal1B61xIJth-H0M1WqP9Z/view?usp=sharing"
                                                        class="stretched-link"></a></h4>
                                                <h4 class="highlight" style="border-radius: 8px; font-size:13px">
                                                    Silahkan
                                                    Klik disini untuk mengunduh Power Point
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
                                <div class="row">
                                    <div class="col-lg-12 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                        <div class="icon-box d-flex position-relative" data-aos="fade-up"
                                            data-aos-delay="300">
                                            <i class="bi bi-link-45deg flex-shrink-0"></i>
                                            <div>
                                                <h4><a href="https://drive.google.com/drive/folders/1I8VcWvUnpKmsBcX8UN4m4DU9ZIvUDYON"
                                                        class="stretched-link"></a></h4>
                                                <h4 class="highlight" style="border-radius: 8px; font-size:13px">
                                                    Silahkan Klik disini untuk mengunduh Data Dukung Pengungkit Area 2
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="icon-box d-flex position-relative" data-aos="fade-up"
                                            data-aos-delay="300">
                                            <i class="bi bi-link-45deg flex-shrink-0"></i>
                                            <div>
                                                <h4><a href="https://drive.google.com/drive/folders/1fUKaYb0eFty1-m0e2PhPwpLTHysvWfOA"
                                                        class="stretched-link"></a></h4>
                                                <h4 class="highlight" style="border-radius: 8px; font-size:13px">
                                                    Silahkan klik disini untuk mengunduh Data Reform Area 2
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="media-tab">
                                <!-- Content for Media -->
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </div><!-- /Blog Details Section -->
    </main>
@endsection
