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
  
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-sertifikat">Sertifikat</li>
              <li data-filter=".filter-piagam">Piagam</li>
              <li data-filter=".filter-penilaian">Penilaian</li>
            </ul><!-- End Portfolio Filters -->
  
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sertifikat">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-1.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Sertifikat Tahun 2017</h4>
                    <p>Sertifikat ISO 9001 : 2015</p>
                    <a href="img/piagam-1.jpeg" title="Sertifikat ISO 9001 : 2015 (NQA Indonesia)" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sertifikat">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-2.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Sertifikat Tahun 2017</h4>
                    <p>Akreditasi Penjaminan Mutu</p>
                    <a href="img/piagam-2.jpeg" title="Akreditasi Penjaminan Mutu (Terakreditasi “B” Baik)" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-3.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Piagam Tahun 2017</h4>
                    <p>Peringkat II Penilaian Kinerja Terbaik Semester I</p>
                    <a href="img/piagam-3.jpeg" title="Peringkat II Penilaian Kinerja Terbaik Semester I (KPPN Pontianak)" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-4.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Piagam Tahun 2018</h4>
                    <p>Terbaik Dalam Strategi Komunikasi Pengelolaan Keuangan Negara</p>
                    <a href="img/piagam-4.png" title="Terbaik Dalam Strategi Komunikasi Pengelolaan Keuangan Negara (KPPN Pontianak )" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sertifikat">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-5.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Sertifkat Tahun 2018</h4>
                    <p>Satuan Kerja Paling Aktif dan Kooperatif</p>
                    <a href="img/piagam-5.png" title="Satuan Kerja Paling Aktif dan Kooperatif (KPPN Pontianak)" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-6.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Piagam Tahun 2018</h4>
                    <p>Juara 1 Lomba PTSP Lingkungan Peradilan Militer</p>
                    <a href="img/piagam-6.png" title="Juara 1 Lomba PTSP Lingkungan Peradilan Militer (Dirjen Badilmiltun MARI)" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-7.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Piagam Tahun 2019</h4>
                    <p>Terbaik 1 Realisasi Anggaran Semester I</p>
                    <a href="img/piagam-7.png" title="Terbaik 1 Realisasi Anggaran Semester I (KPPN Pontianak)" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-8.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Piagam Tahun 2019</h4>
                    <p>Terbaik Ketepatan Waktu Penyelesaian Tagihan</p>
                    <a href="img/piagam-8.png" title="Terbaik Ketepatan Waktu Penyelesaian Tagihan (KPPN Pontianak)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sertifikat">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-9.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Sertifkat Tahun 2019</h4>
                    <p>Surveillence Akreditasi</p>
                    <a href="img/piagam-9.png" title="Surveillence Akreditasi (Terakreditasi “A” Excellent dengan nilai tertinggi 966)" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-10.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Piagam Tahun 2019</h4>
                    <p>Predikat Terbaik Pengelolaan Implementasi Data Perkara pada SIPP dengan Data Error 0 (Nol)</p>
                    <a href="img/piagam-10.png" title="Predikat Terbaik Pengelolaan Implementasi Data Perkara pada SIPP dengan Data Error 0 (Nol) (Ditjen Badilmiltun MARI)" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-11.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Piagam Tahun 2020</h4>
                    <p>Terbaik 2 Laporan Pertanggung jawaban Bendahara Periode Semester I</p>
                    <a href="img/piagam-11.png" title="Terbaik 2 Laporan Pertanggung jawaban Bendahara Periode Semester I (KPPN Pontianak)" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-12.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Piagam Tahun 2020</h4>
                    <p>Satuan Kerja dengan Raihan IKPA Maksimal (Nilai 100) Tingkat Wilayah Prov. Kalimantan Barat</p>
                    <a href="img/piagam-12.png" title="Satuan Kerja dengan Raihan IKPA Maksimal (Nilai 100) Tingkat Wilayah Prov. Kalimantan Barat (KPPN Pontianak)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-13.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Piagam Tahun 2020</h4>
                    <p>Unit Kerja Berpredikat WBK</p>
                    <a href="img/piagam-13.png" title="Unit Kerja Berpredikat WBK (Kemenpan RB)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-14.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Piagam Tahun 2022</h4>
                    <p>Peringkat 1 Pengadilan Terbaik Dalam Pelaksanaan Keterbukaan Informasi Kategori Pengadilan Militer Tipe A</p>
                    <a href="img/piagam-14.png" title="Peringkat 1 Pengadilan Terbaik Dalam Pelaksanaan Keterbukaan Informasi Kategori Pengadilan Militer Tipe A (Mahkamah Agung Republik Indonesia)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-penilaian">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-15.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Penilaian Tahun 2022</h4>
                    <p>Peringkat 3 Penilaian Website Lingkungan Peradilan Militer</p>
                    <a href="img/piagam-15.png" title="Peringkat 3 Penilaian Website Lingkungan Peradilan Militer (Dirjen Badilmiltun MARI)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sertifikat">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-16.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Sertifikat Tahun 2022</h4>
                    <p>Surveillence Akreditasi</p>
                    <a href="img/piagam-16.png" title="Surveillence Akreditasi (Terakreditasi “A” Excellence)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-piagam">
                <div class="portfolio-content h-100">
                  <img src="img/piagam-17.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Piagam Tahun 2023</h4>
                    <p>Piagam Apresiasi TERBAIK Dalam Alokasi SDM</p>
                    <a href="img/piagam-17.jpg" title="Piagam Apresiasi TERBAIK Dalam Alokasi SDM (SAPDA)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
  
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
  
      </section><!-- /Projects Section -->

    @endsection
