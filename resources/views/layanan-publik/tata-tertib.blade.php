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
                                        <h2>Tata Tertib Di Pengadilan dan Persidangan</h2>
                                    </div>
                                </div>

                                <div class="content">
                                    <br>
                                    <ol type="A">
                                        <b>
                                            <li>Tata Tertib Umum</li>
                                        </b>
                                    </ol>
                                    <p>Pihak pengadilan memiliki panduan mengenai tata tertib yang harus ditaati oleh semua
                                        orang yang memasuki gedung Pengadilan :</p>
                                    </p>
                                    <ol type="1">
                                        <li>Ketua Majelis Hakim bertanggung jawab untuk menjaga ketertiban dari semua pihak
                                            yang hadir di ruang sidang. Semua yang hadir di ruang sidang harus mentaati
                                            semua perintah yang dikeluarkan oleh Ketua Majelis Hakim.</li>
                                        <li>Semua orang yang hadir di ruang sidang harus selalu menunjukkan rasa hormat
                                            kepada institusi pengadilan. Jika ada satu pihak yang tidak menunjukkan rasa
                                            hormat kepada institusi pengadilan, maka Ketua Pengadilan dapat memerintahkan
                                            individu tersebut untuk dikeluarkan dari ruang sidang dan bahkan dituntut secara
                                            pidana.</li>
                                        <li>Mengenakan pakaian yang sopan.</li>
                                        <li>Berbicara dengan suara yang jelas ketika seorang hakim atau penasehat hukum
                                            mengajukan pertanyaan, sehingga para hakim yang lain dapat mendengar dengan
                                            jelas.</li>
                                        <li>Memanggil seorang hakim dengan sebutan “Yang Mulia” dan seorang Penasihat Hukum
                                            dengan sebutan “Penasihat Hukum”.</li>
                                    </ol>

                                    <p>
                                        Berbagai benda berikut ini tidak diperkenankan untuk dibawa ke ruang sidang :​
                                    <ol type="1">
                                        <li>Senjata Api</li>
                                        <li>Benda Tajam</li>
                                        <li>Bahan Peledak</li>
                                        <li>Peralatan atau berbagai benda yang dapat membahayakan keamanan ruang sidang</li>
                                    </ol>

                                    </p>

                                    <p>
                                        Petugas keamanan dapat melakukan penggeledahan setiap orang yang dicurigai memiliki
                                        salah satu atau lebih dari berbagai benda diatas. Siapa saja yang kedapatan membawa
                                        salah satu dari benda diatas akan diminta untuk menitipkannya di tempat penitipan
                                        khusus di luar ruang sidang. Ketika yang bersangkutan hendak meninggalkan ruang
                                        sidang, petugas keamanan dapat mengembalikan berbagai benda tersebut. Bahkan,
                                        pengunjung yang kedapatan membawa berbagai benda tersebut diatas ke dalam ruang
                                        sidang dapat dikenai dengan tuntutan pidana.

                                    <ol type="1">
                                        <li>Dilarang membuat kegaduhan, baik didalam maupun diluar ruang sidang.</li>
                                        <li>Duduk rapi dan sopan selama persidangan</li>
                                        <li>Dilarang makan dan minum di ruang sidang.</li>
                                        <li>Dilarang merokok baik di ruang sidang maupun di dalam gedung pengadilan.</li>
                                        <li>Wajib mematikan telepon genggam selama di ruang sidang.</li>
                                        <li>Dilarang membawa anak-anak dibawah umur 12 tahun, kecuali Majelis Hakim
                                            menghendaki anak tersebut menghadiri persidangan.</li>
                                        <li>Membuang sampah pada tempatnya.</li>
                                        <li>Dilarang menempelkan pengumuman atau brosur dalam bentuk apapun di dalam gedung
                                            pengadilan tanpa adanya ijin tertulis dari Ketua Pengadilan.</li>
                                        <li>Untuk melakukan rekaman baik kamera, tape recorder maupun video recorder, di
                                            mohon untuk meminta ijin terlebih dahulu kepada Majelis Hakim.</li>
                                    </ol>

                                    <p>
                                        Para pengunjung yang datang ke ruang sidang untuk melihat jalannya sidang perkara,
                                        tetapi bukanlah merupakan saksi atau terlibat dalam sidang perkara tersebut,
                                        diharapkan untuk mematuhi berbagai ketentuan sebagai berikut :
                                    <ol type="1">
                                        <li>Wajib menghormati institusi Pengadilan seperti yang telah disebutkan diatas.
                                        </li>
                                        <li>Wajib menaati semua tata tertib yang telah disebutkan diatas.</li>
                                        <li>Dilarang berbicara dengan pengunjung yang lain selama sidang berlangsung.</li>
                                        <li>Dilarang berbicara memberikan dukungan atau mengajukan keberatan atas keterangan
                                            yang diberikan oleh saksi selama persidangan.</li>
                                        <li>Dilarang memberikan komentar/saran/tanggapan terhadap sesuatu yang terjadi
                                            selama persidangan tanpa ijin Majelis Hakim.</li>
                                        <li>Dilarang berbicara keras diluar ruang sidang yang dapat menyebabkan suara masuk
                                            ke ruang sidang dan mengganggu jalannya persidangan.</li>
                                        <li>Dilarang keluar masuk ruang persidangan untuk alasan-alasan yang tidak perlu
                                            karena akan mengganggu jalannya persidangan.</li>
                                        <li>Pengunjung yang ingin masuk atau keluar ruang persidangan harus meminta ijin
                                            kepada Majelis Hakim.</li>
                                    </ol>
                                    </p>
                                    <p>Terdapat beberapa tambahan tata tertib yang harus diikuti dalam persidangan pidana,
                                        yaitu :
                                    <ol type="1">
                                        <li>Bila anda adalah saksi atau terdakwa yang tidak ditahan, diharapkan datang 15
                                            menit sebelum jadwal yang sudah ditentukan </li>
                                        <li>Para pihak diwajibkan untuk melaporkan kehadirannya kepada Panitera Pengganti
                                            dan pada Jaksa yang menangani perkara tersebut.</li>
                                        <li>Sebelum dimulainya sidang pengadilan, panitera, Jaksa Penuntut Umum Penasehat
                                            Hukum dan pengunjung yang hadir haruslah sudah duduk di tempatnya masing-masing.
                                            Semua orang harus berdiri ketika Majelis Hakim memasuki dan meninggalkan ruang
                                            sidang.</li>
                                        <li>Para saksi dipanggil satu demi satu untuk memasuki ruang sidang, yang diputuskan
                                            oleh Ketua Majelis Hakim, sesudah mendengarkan masukan dari pihak Jaksa Penuntut
                                            Umum dan terdakwa atau Penasihat Hukum dari terdakwa. Sesudah seorang saksi
                                            memberikan kesaksian, yang bersangkutan diwajibkan untuk duduk di area
                                            pengunjung dan mendengarkan keterangan dari para saksi yang lain. Seorang saksi
                                            sidang dapat meninggalkan ruang sidang sesudah mendapatkan ijin dari Ketua
                                            Majelis Hakim, kecuali bila Jaksa Penuntut Umum atau terdakwa atau Penasihat
                                            Hukum terdakwa menginginkan saksi tersebut untuk tetap berada di ruang sidang.
                                        </li>
                                    </ol>
                                    </p>
                                    
                                    <p><b>Tata Tertib Persidangan</b>
                                       
                                        <ol type="1">
                                            <li>Pada saat Majelis Hakim Memasuki dan Meninggalkan Ruang Sidang, semua yang
                                                hadir berdiri untuk menghormati. Selama sidang berlangsung, pengunjung
                                                sidang harus duduk dengan sopan dan tertib ditempatnya masing-masing dan
                                                memelihara ketertiban dalam ruang sidang.</li>
                                            <li>Pengunjung sidang dilarang makan, nimum, merokok, membaca Koran, atau
                                                melakukan tindakan yang dapat mengganggu jalannya sidang (HP agar dimatikan/
                                                tidak menelpon atau menerima telepon via HP).Dalam Ruang Sidang siapapun
                                                wajib menunjukkan sikap hormat kepada Pengadilan.</li>
                                            <li>Siapapun dilarang membawa senjata api, senjata tajam, bahan peledak, atau
                                                alat maupun benda yang dapat membahayakan keamanan sidang dan siapa yang
                                                membawanya wajib menitipkan pada tempat yang disediakan khusus untuk itu,
                                                yaitu di Panitera Muda Pidana. Segala sesuatu yang diperintahkan oleh Ketua
                                                Sidang untuk memelihara tata tertib di persidangan, wajib dilaksanakan
                                                dengan segera dan cermat.</li>
                                            <li>Tanpa Surat Perintah, Petugas Keamanan Pengadilan karena tugas jabatannya
                                                dapat mengadakan Penggeledahan Badan untuk menjamin bahwa kehadiran
                                                seseorang di ruang sidang tidak membawa senjata, bahan atau alat maupun
                                                benda yang dapat membahayakan keamanan sidang.</li>
                                            <li>Pengambilan foto, rekaman suara, atau rekaman TV harus meminta ijin terlebih
                                                dahulu kepada Hakim Ketua Sidang.</li>
                                            <li>Siapapun di sidang pengadilan bersikap tidak sesuai dengan martabat
                                                Pengadilan dan tidak mentaati Tata Tertib Persidangan, dan setelah Hakim
                                                Ketua Sidang memberi peringatan, masih tetap melanggar Tata Tertib tersebut,
                                                maka atas perintah Hakim Ketua Sidang, yang bersangkutan dikeluarkan dari
                                                ruang sidang dan apabila pelanggaran tata tertib dimaksud bersifat suatu
                                                tindakan pidana, tidak mengurangi kemungkinan dilakukan Penuntutan terhadap
                                                pelakunya.</li>
                                        </ol>
                                    </p>
                                    </ol>
                                    

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

                        </div><!--/Recent Posts Widget -->

                    </div>

                </div>

            </div>
        </div>

    </main>
@endsection
