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
                                    @if($media->thumbnail)
                                        <img src="{{ asset('storage/' . $media->thumbnail) }}" class="img-fluid" alt="{{ $media->judul }}">
                                    @else
                                        <img src="{{ asset('img/default-social.jpg') }}" class="img-fluid" alt="{{ $media->judul }}">
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
                    {{ $socialMedia->links('pagination.custom') }}
                </div>
            </div>
        </section>
    </main>
@endsection