@extends('layouts-front.main')
@section('container')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade" style="background-image: url('{{ asset('img/dilmil-depan.jpg') }}');">
            <div class="container position-relative">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Beranda</a></li>
                        <li class="current">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        @if ($is_single)
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div id="blog-details" class="blog-details section">
                            <article class="article">
                                <div class="container-header text-center">
                                    <h2>{{ $beritamas->first()->judul }}</h2>
                                </div>

                                @if ($beritamas->first()->thumbnail)
                                    <div class="post-img text-center">
                                        <img src="{{ asset('storage/' . $beritamas->first()->thumbnail) }}" alt=""
                                            class="img-fluid">
                                    </div>
                                @endif

                                <div class="content">
                                    {!! $beritamas->first()->konten !!}
                                </div>

                                <div class="meta-bottom text-center">
                                    <i class="bi bi-person"></i> <span>{{ $beritamas->first()->penulis }}</span>
                                    <i class="bi bi-clock"></i>
                                    <span>{{ $beritamas->first()->tanggal->format('d M Y') }}</span>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <section id="blog-posts" class="blog-posts section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2 class="">BERITA TERBARU</h2>
                    <p>Mahkamah Agung</p>
                </div><!-- End Section Title -->

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
                        {{ $beritamas->links('pagination.custom') }}
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection
