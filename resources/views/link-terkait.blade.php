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

        <!-- Link Terkait Section -->
        <section id="link-terkait" class="link-terkait section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>LINK TERKAIT</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 3000
                },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "breakpoints": {
                    "320": {
                        "slidesPerView": 2,
                        "spaceBetween": 40
                    },
                    "480": {
                        "slidesPerView": 3,
                        "spaceBetween": 60
                    },
                    "640": {
                        "slidesPerView": 4,
                        "spaceBetween": 80
                    },
                    "992": {
                        "slidesPerView": 6,
                        "spaceBetween": 120
                    }
                }
            }
        </script>

                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a href="https://www.mahkamahagung.go.id/id"><img src="img/mari.png"
                                    class="img-fluid" style="max-width: 500%" alt=""><div class="image-hover">
                                <p>MAHKAMAH AGUNG RI</p>
                            </div></a>
                        </div>
                        <div class="swiper-slide"><a href="https://ditjenmiltun.mahkamahagung.go.id/"><img
                                    src="img/ditjen-badilmiltun.png" class="img-fluid" style="max-width: 500%"
                                    alt=""><div class="image-hover">
                                <p>DIRJEN BADILMILTUN RI</p>
                            </div></a>
                        </div>
                        <div class="swiper-slide"><a href="https://bawas.mahkamahagung.go.id/"><img src="img/bawas-ma.png"
                                    class="img-fluid" style="max-width: 500%" alt=""><div class="image-hover">
                                <p>BAWAS MAHKAMAH AGUNG</p>
                            </div></a></div>
                        <div class="swiper-slide"><a href="http://www.dilmiltama.go.id/home/"><img
                                    src="img/dilmil-utama.png" class="img-fluid" style="max-width: 500%" alt=""><div class="image-hover">
                                <p>PENGADILAN MILITER UTAMA</p>
                            </div></a>
                        </div>
                        <div class="swiper-slide"><a href="http://www.dilmilti1-medan.go.id/"><img
                                    src="img/dilmilti-medan.png" class="img-fluid" style="max-width: 500%"
                                    alt=""><div class="image-hover">
                                <p>PENGADILAN MILITER TINGGI I MEDAN

</p>
                            </div></a></div>
                        <div class="swiper-slide"><a href="https://dilmil-aceh.go.id/"><img src="img/dilmil-aceh.png"
                                    class="img-fluid" style="max-width: 500%" alt=""><div class="image-hover">
                                <p>PENGADILAN MILITER I-01 BANDA ACEH</p>
                            </div></a></div>
                        <div class="swiper-slide"><a href="https://dilmil-medan.go.id/"><img src="img/dilmil-medan.png"
                                    class="img-fluid" style="max-width: 500%" alt=""><div class="image-hover">
                                <p>PENGADILAN MILITER I-02 MEDAN</p>
                            </div></a></div>
                        <div class="swiper-slide"><a href="https://dilmil-padang.go.id/"><img src="img/dilmil-padang.png"
                                    class="img-fluid" style="max-width: 500%" alt=""><div class="image-hover">
                                <p>PENGADILAN MILITER I-03 PADANG</p>
                            </div></a></div>
                        <div class="swiper-slide"><a href="https://web.dilmil-palembang.go.id/"><img
                                    src="img/dilmil-palembang.png" class="img-fluid" style="max-width: 500%"
                                    alt=""><div class="image-hover">
                                <p>PENGADILAN MILITER I-04 PALEMBANG</p>
                            </div></a>
                        </div>
                        <div class="swiper-slide"><a href="https://dilmil-banjarmasin.go.id/"><img
                                    src="img/dilmil-banjarmasin.png" class="img-fluid" style="max-width: 500%"
                                    alt=""><div class="image-hover">
                                <p>PENGADILAN MILITER I-06 BANJARMASIN</p>
                            </div></a></div>
                        <div class="swiper-slide"><a href="https://dilmil-balikpapan.go.id/"><img
                                    src="img/dilmil-balikpapan.png" class="img-fluid" style="max-width: 500%"
                                    alt=""><div class="image-hover">
                                <p>PENGADILAN MILITER I-07 BALIKPAPAN</p>
                            </div></a></div>
                        <div class="swiper-slide"><a href="https://siwas.mahkamahagung.go.id/"><img src="img/siwas.png"
                                    class="img-fluid" style="max-width: 500%" alt=""><div class="image-hover">
                                <p>SIWAS MAHKAMAH AGUNG RI</p>
                            </div></a></div>
                        <div class="swiper-slide"><a href="https://sippn.menpan.go.id/"><img src="img/sippn.png"
                                    class="img-fluid" style="max-width: 500%" alt=""><div class="image-hover">
                                <p>SIPPN KEMENPAN RB</p>
                            </div></a></div>
                        <div class="swiper-slide"><a href="https://www.lapor.go.id/"><img src="img/web-lapor.png"
                                    class="img-fluid" style="max-width: 500%" alt=""><div class="image-hover">
                                <p>E LAPOR</p>
                            </div></a></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- /Link Terkait Section -->


    </main>
@endsection
