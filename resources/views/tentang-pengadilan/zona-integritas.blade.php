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

       <!-- Projects Section -->
    <section id="projects" class="projects section">

        <div class="container">
  
          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
  
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sertifikat">
                <div class="portfolio-content h-100">
                  <img src="img/z-e.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Zona Integritas Area I</p>
                    <a href="img/z-e.jpg" title="Zona Integritas – AREA I – Manajemen Perubahan" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="/ze-1" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sertifikat">
                <div class="portfolio-content h-100">
                  <img src="img/z-e.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Zona Integritas Area II</p>
                    <a href="img/z-e.jpg" title="Zona Integritas – AREA II – Penataan Tatalaksana" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="ze-2" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sertifikat">
                <div class="portfolio-content h-100">
                  <img src="img/z-e.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Zona Integritas Area III</p>
                    <a href="img/z-e.jpg" title="Zona Integritas – Area III – Penataan Sistem Manajemen SDM" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="ze-3" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/z-e.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Zona Integritas Area IV</p>
                    <a href="img/z-e.jpg" title="Zona Integritas – Area IV – Penguatan Akuntanbilitas" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="ze-4" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sertifikat">
                <div class="portfolio-content h-100">
                  <img src="img/z-e.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Zona Integritas Area V</p>
                    <a href="img/z-e.jpg" title="Zona Integritas – Area V – Penguatan Pengawasan" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="ze-5" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/z-e.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Zona Integritas Area VI</p>
                    <a href="img/z-e.jpg" title="Zona Integritas – Area VI – Penguatan Kualitas Pelayanan Publik" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="ze-6" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
  
      </section><!-- /Projects Section -->

    @endsection
