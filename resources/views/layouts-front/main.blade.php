<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Portal | {{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send/?phone=6282157031770&text&type=phone_number&app_absent=0" class="float"
        target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

    @include('partials.navbar')

    <main id="main">
        @yield('container')
    </main>

    @php
        $footer = App\Models\Footer::first();
    @endphp

    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-2">
                <div class="col-lg-3 col-md-6 footer-about">
                    <a href="/" class="logo d-flex align-items-center">
                        <img src="{{ asset('img/logo_dilmill.png') }}" alt="logo">
                    </a>
                    <div class="footer-contact pt-3">
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="mailto:{{ $footer->email }}"><i class="bi bi-envelope"></i></a>
                        <a href="{{ $footer->facebook }}"><i class="bi bi-facebook"></i></a>
                        <a href="{{ $footer->instagram }}"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $footer->youtube }}"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 footer-links">
                    <h4>Info Kantor</h4>
                    <ul>
                        <li>
                            <p>Email : <a href="mailto:{{ $footer->email }}">{{ $footer->email }}</a></p>
                        </li>
                        <li>
                            <p>Telp/Fax : {{ $footer->phone_fax }}</p>
                        </li>
                        <li>
                            <p>Alamat : {{ $footer->address }}</p>
                        </li>
                        <li>
                            <p>Whatsapp : {{ $footer->whatsapp }}</p>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-links">
                    <h4>Jam Kerja Pelayanan</h4>
                    <ul>
                        {!! nl2br(e($footer->working_hours)) !!}
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-links">
                    <h4>Google Maps</h4>
                    <ul>
                        <li>
                            <iframe src="{{ $footer->google_maps_embed }}" width="300" height="150"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="copyright text-center">
                <p>&copy; {{ date('Y') }} <a href="/">Pengadilan Militer I-05 Pontianak</a></p>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

            <div id="google_translate_element" class="translate-container">
    <div id="translate-menu" class="translate-menu">
        <!-- This part will be dynamically populated by Google Translate -->
    </div>
</div>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

    {{-- Script Voice --}}
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=KYaHzDYI"></script>

    <script src="translate.js"></script>

    <script type="text/javascript">
function googleTranslateFunction(){
new google.translate.TranslateElement({pageLanguage:'en', layout:google.translate.TranslateElement.InlineLayout.SIMPLE},'google_translate_element');
} </script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateFunction"></script>

</body>

</html>
