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

        @if($is_single)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div id="blog-details" class="blog-details section">
                        <article class="article">
                            <div class="meta-bottom text-center">
                                <i class="bi bi-person"></i> <span>{{ $beritas->first()->penulis }}</span> 
                                <i class="bi bi-clock"></i> <span>{{ $beritas->first()->tanggal->format('d M Y') }}</span>
                            </div>
                            <div class="container-header text-center">
                                <h2>{{ $beritas->first()->judul }}</h2>
                            </div>
        
                            @if($beritas->first()->thumbnail)
                                <div class="post-img text-center">
                                    <img src="{{ asset('storage/' . $beritas->first()->thumbnail) }}" alt="" class="img-fluid">
                                </div>
                            @endif
        
                            <div class="content">
                                {!! $beritas->first()->konten !!}
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
                    <p>Badan Peradilan Militer I-05 Pontianak</p>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="row gy-4">
                        @foreach ($beritas as $berita)
                            <div class="col-lg-4">
                                <article class="position-relative h-100">
                                    <div class="post-img position-relative overflow-hidden">
                                        @if($berita->thumbnail)
                                            <img src="{{ asset('storage/' . $berita->thumbnail) }}" class="img-fluid" alt="">
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
                        {{ $beritas->links('pagination.custom') }}
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection