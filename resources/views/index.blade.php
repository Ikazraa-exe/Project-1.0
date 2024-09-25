@extends('layouts-front.main')

@section('container')
    <main class="main">

        <script>
            function showPopup() {
                const popup = document.getElementById('popup');
                popup.style.display = 'flex';
                setTimeout(() => {
                    popup.classList.add('show');
                }, 500);
            }

            function closePopup() {
                const popup = document.getElementById('popup');
                popup.classList.remove('show');
                popup.classList.add('hide');
                setTimeout(() => {
                    popup.style.display = 'none';
                    popup.classList.remove('hide');
                }, 500);
            }

            // Memanggil fungsi showPopup setelah halaman dimuat
            window.onload = function() {
                showPopup();
            };
        </script>

        <div class="popup" id="popup">
            <div class="popup-content">
                <img src="img/popup.png" alt="QR Code">
                <button class="close-btn" onclick="closePopup()">tutup</button>
            </div>
        </div>

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="info d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-8 text-center">
                            <h2 class="">Selamat Datang <br> Di Portal Pengadilan Militer I-05 Pontianak</h2>

                        </div>
                    </div>
                </div>
            </div>

            <div id="section-fqREP4OWmC-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="img/dilmil-depan.jpg" alt="dilmil-depan.jpg">
                </div>

                <div class="carousel-item">
                    <img src="img/ptsp.jpeg" alt="ptsp.jpeg">
                </div>

                <div class="carousel-item">
                    <img src="img/apel.jpeg" alt="apel.jpeg">
                </div>

                <div class="carousel-item">
                    <img src="img/sidang1.jpeg" alt="sidang1.jpeg">
                </div>

                <div class="carousel-item">
                    <img src="img/sidang2.jpeg" alt="sidang2.jpeg">
                </div>

                <a class="carousel-control-prev" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>

        </section>
        <!-- /Hero Section -->

        <!-- New Carousel Section -->
        <section id="new-carousel" class="carousel section mt-5">
            <div class="carousel-container">
                <div id="new-carousel-example" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators color-warning">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                                aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                                aria-label="Slide 7"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                                aria-label="Slide 8"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
                                aria-label="Slide 9"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9"
                                aria-label="Slide 10"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10"
                                aria-label="Slide 11"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/MA.jpg" class="d-block w-90" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Korpri.jpg" class="d-block w-90" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/banner-hut-tni-1.jpg" class="d-block w-90" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Banner-Germas.jpg" class="d-block w-90" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Banner-ZI.jpg" class="d-block w-90" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/skm-1.jpg" class="d-block w-90" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/skm-2.jpeg" class="d-block w-90" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/skm-3.jpg" class="d-block w-90" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/MAKLUMAT.jpg" class="d-block w-90" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Gratifikasi-5.jpg" class="d-block w-90" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Sumpah-Pemuda.jpg" class="d-block w-90" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section><!-- /New Carousel Section -->

        <!-- Berita Section -->
        <section id="berita" class="blog-posts section">
            <div class="container section-title" data-aos="fade-up">
                <h2>BERITA TERBARU</h2>
                <p>Pengadilan Militer I-05 Pontianak</p>
            </div>

            <div class="container">
                <div class="row gy-4">
                    @foreach ($beritas as $berita)
                        <div class="col-lg-4">
                            <article class="position-relative h-100">
                                <div class="post-img position-relative overflow-hidden">
                                    @if ($berita->thumbnail)
                                        <img src="{{ asset('storage/' . $berita->thumbnail) }}" class="img-fluid"
                                            alt="">
                                    @else
                                        <img src="{{ asset('img/default-news.jpg') }}" class="img-fluid" alt="">
                                    @endif
                                    <span class="post-date">{{ $berita->tanggal->format('d M Y') }}</span>
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        {{ Str::limit($berita->judul, 50, '...') }}
                                    </h3>
                                    <hr>
                                    <a href="{{ route('berita.show', $berita) }}" class="readmore stretched-link">
                                        <span>Read More</span><i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="{{ route('berita.index') }}" class="btn btn-warning">Lihat Semua Berita</a>
                </div>
            </div>
        </section>

        <!-- Berita MA Section -->
        <section id="beritama" class="blog-posts section">
            <div class="container section-title" data-aos="fade-up">
                <h2>BERITA TERBARU</h2>
                <p>Mahkamah Agung</p>
            </div>

            <div class="container">
                <div class="row gy-4">
                    @foreach ($beritamas as $beritama)
                        <div class="col-lg-4">
                            <article class="position-relative h-100">
                                <div class="post-img position-relative overflow-hidden">
                                    @if ($beritama->thumbnail)
                                        <img src="{{ asset('storage/' . $beritama->thumbnail) }}" class="img-fluid"
                                            alt="">
                                    @else
                                        <img src="{{ asset('img/ma-1.jpg') }}" class="img-fluid" alt="">
                                    @endif
                                    <span class="post-date">{{ $beritama->tanggal->format('d M Y') }}</span>
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        {{ Str::limit($beritama->judul, 50, '...') }}
                                    </h3>
                                    <hr>
                                    <a href="{{ route('beritama.show', $beritama) }}" class="readmore stretched-link">
                                        <span>Read More</span><i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="{{ route('beritama.index') }}" class="btn btn-warning">Lihat Semua Berita MA</a>
                </div>
            </div>
        </section>

        <section id="blog-posts" class="blog-posts section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="">PENGUMUMAN TERBARU</h2>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @foreach ($pengumumen as $pengumuman)
                        <div class="col-lg-4">
                            <article class="position-relative h-100">
                                <div class="post-img position-relative overflow-hidden">
                                    @if ($pengumuman->thumbnail)
                                        <img src="{{ asset('storage/' . $pengumuman->thumbnail) }}" class="img-fluid"
                                            alt="">
                                    @else
                                        <img src="{{ asset('img/default-news.jpg') }}" class="img-fluid" alt="">
                                    @endif
                                    {{-- <span class="post-date">{{ $pengumuman->tanggal->format('d M Y') }}</span> --}}
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        {{ Str::limit($pengumuman->judul, 50, '...') }}
                                    </h3>
                                    <hr>
                                    <a href="{{ route('pengumuman.show', $pengumuman) }}"
                                        class="readmore stretched-link">
                                        <span>Read More</span><i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="{{ route('pengumuman.index') }}" class="btn btn-warning">Lihat Semua Pengumuman</a>
                </div>
            </div>
        </section>

        <section id="blog-posts" class="blog-posts section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="">MEDIA SOSIAL</h2>
                <p>Badan Peradilan Militer I-05 Pontianak</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @foreach ($socialMedia as $media)
                        <div class="col-lg-4">
                            <article class="position-relative h-100">
                                <div class="post-img position-relative overflow-hidden">
                                    @if ($media->thumbnail)
                                        <img src="{{ asset('storage/' . $media->thumbnail) }}" class="img-fluid"
                                            alt="{{ $media->judul }}">
                                    @else
                                        <img src="{{ asset('img/default-social.jpg') }}" class="img-fluid"
                                            alt="{{ $media->judul }}">
                                    @endif
                                    {{-- <span class="post-date">{{ $media->created_at->format('d M Y') }}</span> --}}
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        {{ Str::limit($media->judul, 50, '...') }}
                                    </h3>
                                    <hr>
                                    <a href="{{ $media->link }}" class="readmore stretched-link" target="_blank">
                                        <span>Kunjungi</span><i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="{{ route('social-media.index') }}" class="btn btn-warning">Lihat Semua Postingan</a>
                </div>
            </div>
        </section>


        <!-- iframe Section -->
        <section
            class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-d344af5 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-sticky-section-no"
            data-id="d344af5" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ce36cf7"
                    data-id="ce36cf7" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-f8459c3 elementor-widget elementor-widget-html"
                            data-id="f8459c3" data-element_type="widget" data-widget_type="html.default">
                            <div class="elementor-widget-container" style="display: flex; justify-content: center;">
                                <iframe src="https://sipp.dilmil-pontianak.go.id/list_jadwal_sidang" height="500px"
                                    width="1200px">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /iframe Section -->


        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>APLIKASI PENGADILAN</h2>

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
                          "breakpoints": 
                          {
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
                        <div class="swiper-slide"><a href="https://siwas.mahkamahagung.go.id/"><img
                                    src="img/pengaduan-siwas.png" class="img-fluid" style="max-width: 130%"alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://sikep.mahkamahagung.go.id/site/login"><img
                                    src="img/sikep.png" class="img-fluid" style="max-width: 130%"alt=""></a></div>
                        <div class="swiper-slide"><a href="https://komdanas.mahkamahagung.go.id/"><img
                                    src="img/komdanas.png" class="img-fluid" style="max-width: 130%"alt=""></a></div>
                        <div class="swiper-slide"><a href="https://sipp-ma.mahkamahagung.go.id/"><img
                                    src="img/sipp-ma.png" class="img-fluid" style="max-width: 130%"alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="https://putusan3.mahkamahagung.go.id/pengadilan/profil/pengadilan/dilmil-i-05-pontianak.html"><img
                                    src="img/putusan.png" class="img-fluid" style="max-width: 130%"alt=""></a></div>
                        <div class="swiper-slide"><a href="https://eberpadu.mahkamahagung.go.id/"><img
                                    src="img/e-berpadu.png" class="img-fluid" style="max-width: 130%"alt=""></a></div>
                        <div class="swiper-slide"><a href="https://jdih.dilmil-pontianak.go.id/"><img src="img/jdih.png"
                                    class="img-fluid" style="max-width: 130%"alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="https://drive.google.com/drive/folders/1-RK23sUqRkKwy6-gY-ZShpN6ov6O6FnT"><img
                                    src="img/sakip.png" class="img-fluid" style="max-width: 130%"alt=""></a></div>
                        <div class="swiper-slide"><a href="https://sipp.dilmil-pontianak.go.id/list_jadwal_sidang"><img
                                    src="img/jadwal-sidang.png" class="img-fluid" style="max-width: 130%"alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://linktube.com/dilmil05-pontianak"><img
                                    src="img/survey.png" class="img-fluid" style="max-width: 130%"alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="https://api.whatsapp.com/send/?phone=6282157031770&text&type=phone_number&app_absent=0"><img
                                    src="img/sipopmil.png" class="img-fluid" style="max-width: 130%"alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="https://play.google.com/store/apps/details?id=com.sipopmilupgrade"><img
                                    src="img/prima.png" class="img-fluid" style="max-width: 130%"alt=""></a></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

            <br>
            <div class="zona-integritas">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2 style="color: white; font-size: 32px; z-index: 2;">ZONA INTEGRITAS</h2>
                </div>
                <div class="zona-integritas-grid-container">
                    <div class="zona-integritas-grid-item">
                        <a href="/ze-1">
                            <img src="img/z-e.jpg" alt="Zona Integritas 1">
                            <div class="overlay">AREA I</div>
                        </a>
                    </div>
                    <div class="zona-integritas-grid-item">
                        <a href="/ze-2">
                            <img src="img/z-e.jpg" alt="Zona Integritas 2">
                            <div class="overlay">AREA II</div>
                        </a>
                    </div>
                    <div class="zona-integritas-grid-item">
                        <a href="/ze-3">
                            <img src="img/z-e.jpg" alt="Zona Integritas 3">
                            <div class="overlay">AREA III</div>
                        </a>
                    </div>
                    <div class="zona-integritas-grid-item">
                        <a href="/ze-4">
                            <img src="img/z-e.jpg" alt="Zona Integritas 4">
                            <div class="overlay">AREA IV</div>
                        </a>
                    </div>
                    <div class="zona-integritas-grid-item">
                        <a href="/ze-5">
                            <img src="img/z-e.jpg" alt="Zona Integritas 5">
                            <div class="overlay">AREA V</div>
                        </a>
                    </div>
                    <div class="zona-integritas-grid-item">
                        <a href="/ze-6">
                            <img src="img/z-e.jpg" alt="Zona Integritas 6">
                            <div class="overlay">AREA VI</div>
                        </a>
                    </div>
                </div>
            </div>


        </section><!-- /Clients Section -->


    </main>
@endsection
