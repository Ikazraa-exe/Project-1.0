@extends('layouts-front.main')
@section('container')
    <main class="main">
        <!-- Page Title -->

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

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="blog-details" class="blog-details section">
                        <div class="container">
                            <article class="article">
                                <div class="container-header">
                                    <div class="title-container">
                                        <h2>{{ $beritama->judul }}</h2>
                                    </div>
                                </div>

                                <div class="post-img">
                                    <img src="{{ asset('storage/' . $beritama->thumbnail) }}" alt="" class="img-fluid">
                                </div>

                                <div class="content ">
                                    {!! $beritama->konten !!}
                                </div>

                                <div class="meta-bottom">
                                    <i class="bi bi-person"></i> <span>{{ $beritama->penulis }}</span>
                                    <i class="bi bi-clock"></i> <span>{{ $beritama->tanggal->format('d M Y') }}</span>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection