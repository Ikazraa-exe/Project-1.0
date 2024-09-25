<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritamaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SocialMediaController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('layanan-publik/social-media', [SocialMediaController::class, 'index'])->name('social-media.index');

Route::get('tentang-pengadilan/{kategori}', [PegawaiController::class, 'index'])->name('pegawai.kategori');

Route::get('layanan-publik/berita', [BeritaController::class, 'index'])->name('berita.index');

Route::get('layanan-publik/berita/{berita}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('layanan-publik/beritama', [BeritamaController::class, 'index'])->name('beritama.index'); 

Route::get('layanan-publik/beritama/{beritama}', [BeritamaController::class, 'show'])->name('beritama.show');

Route::get('layanan-publik/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');

Route::get('layanan-publik/pengumuman/{pengumuman}', [PengumumanController::class, 'show'])->name('pengumuman.show');

Route::get('/kata-sambutan', function () {
    return view(
        'tentang-pengadilan/kata-sambutan',
        [
            'title' => 'Kata Sambutan'
        ]
    );
});

Route::get('/visi-misi-motto', function () {
    return view(
        '/tentang-pengadilan/visi-misi-motto',
        [
            'title'=> 'Visi Misi dan Motto'
        ]
    );
});

Route::get('/sejarah-pengadilan', function () {
    return view(
        '/tentang-pengadilan/sejarah-pengadilan',
        [
            'title'=> 'Sejarah Pengadilan',
        ]
    );
});

Route::get('/tugas-pokok-fungsi-pengadilan', function () {
    return view(
        '/tentang-pengadilan/tugas-pokok-fungsi-pengadilan',
        [
            'title'=> 'Tugas Pokok dan Fungsi Pengadilan',
        ]
    );
});

Route::get('/subbag-umum-keuangan', function () {
    return view(
        '/tentang-pengadilan/subbag-umum-keuangan',
        [
            'title'=> 'Sub Bagian Umum Keuangan',
        ]
    );
});

Route::get('/subbag-kepegawaian-ortala', function () {
    return view(
        '/tentang-pengadilan/subbag-kepegawaian-ortala',
        [
            'title'=> 'Sub Bagian Kepegawaian dan Ortala',
        ]
    );
});

Route::get('/subbag-ptip', function () {
    return view(
        '/tentang-pengadilan/subbag-ptip',
        [
            'title'=> 'Sub Bagian PTIP',
        ]
    );
});

Route::get('/panitera', function () {
    return view(
        '/tentang-pengadilan/panitera',
        [
            'title'=> 'Panitera',
        ]
    );
});

Route::get('/panitera-muda-pidana', function () {
    return view(
        'tentang-pengadilan/panitera-muda-pidana',
        [
            'title'=> 'Panitera Muda Pidana ',
        ]
    );
});

Route::get('/panitera-muda-hukum', function () {
    return view(
        '/tentang-pengadilan/panitera-muda-hukum',
        [
            'title'=> 'Panitera Muda Hukum',
        ]
    );
});

Route::get('/wilayah-hukum-dilmil', function () {
    return view(
        '/tentang-pengadilan/wilayah-hukum-dilmil',
        [
            'title'=> 'Wilayah Hukum Dilmil',
        ]
    );
});

Route::get('/struktur-organisasi', function () {
    return view(
        '/tentang-pengadilan/struktur-organisasi',
        [
            'title'=> 'Struktur Organisasi',
        ]
    );
});

Route::get('/pohon-kinerja', function () {
    return view(
        '/tentang-pengadilan/pohon-kinerja',
        [
            'title'=> 'Pohon Kinerja',
        ]
    );
});

Route::get('/statistik-pegawai', function () {
    return view(
        '/tentang-pengadilan/statistik-pegawai',
        [
            'title'=> 'Statistik Pegawai',
        ]
    );
});

Route::get('/agen-perubahan', function () {
    return view(
        '/tentang-pengadilan/agen-perubahan',
        [
            'title'=> 'Agen Perubahan',
        ]
    );
});

Route::get('/pegawai-teladan', function () {
    return view(
        '/tentang-pengadilan/pegawai-teladan',
        [
            'title'=> 'Profil Pegawai Teladan',
        ]
    );
});

Route::get('/agen-perubahan-2024', function () {
    return view(
        '/tentang-pengadilan/agen-perubahan-2024',
        [
            'title'=> 'Agen Perubahan 2024',
        ]
    );
});

Route::get('/agen-perubahan-2023', function () {
    return view(
        '/tentang-pengadilan/agen-perubahan-2023',
        [
            'title'=> 'Agen Perubahan 2023',
        ]
    );
});

Route::get('/agen-perubahan-2022', function () {
    return view(
        '/tentang-pengadilan/agen-perubahan-2022',
        [
            'title'=> 'Agen Perubahan 2022',
        ]
    );
});

Route::get('/pegawai-teladan-2024', function () {
    return view(
        '/tentang-pengadilan/pegawai-teladan-2024',
        [
            'title'=> 'Pegawai Teladan',
        ]
    );
});

Route::get('/pegawai-teladan-2023', function () {
    return view(
        '/tentang-pengadilan/pegawai-teladan-2023',
        [
            'title'=> 'Pegawai Teladan 2023',
        ]
    );
});

Route::get('/pegawai-teladan-2022', function () {
    return view(
        '/tentang-pengadilan/pegawai-teladan-2022',
        [
            'title'=> 'Pegawai Teladan 2022',
        ]
    );
});

Route::get('/pengawasan-kode-etik', function () {
    return view(
        '/tentang-pengadilan/pengawasan-kode-etik',
        [
            'title'=> 'Pengawasan Kode Etik',
        ]
    );
});

Route::get('/delapan-nilai-utama', function () {
    return view(
        '/tentang-pengadilan/delapan-nilai-utama',
        [
            'title'=> '8 Nilai Utama Mahkamah Agung RI',
        ]
    );
});

Route::get('/zona-integritas', function () {
    return view(
        '/tentang-pengadilan/zona-integritas',
        [
            'title'=> 'Zona Integritas',
        ]
    );
});

Route::get('/ze-1', function () {
    return view(
        '/tentang-pengadilan/ze-1',
        [
            'title'=> 'Zona Integritas Area I',
        ]
    );
});

Route::get('/ze-2', function () {
    return view(
        '/tentang-pengadilan/ze-2',
        [
            'title'=> 'Zona Integritas Area II',
        ]
    );
});

Route::get('/ze-3', function () {
    return view(
        '/tentang-pengadilan/ze-3',
        [
            'title'=> 'Zona Integritas Area III',
        ]
    );
});

Route::get('/ze-4', function () {
    return view(
        '/tentang-pengadilan/ze-4',
        [
            'title'=> 'Zona Integritas Area IV',
        ]
    );
});

Route::get('/ze-5', function () {
    return view(
        '/tentang-pengadilan/ze-5',
        [
            'title'=> 'Zona Integritas Area V',
        ]
    );
});

Route::get('/ze-6', function () {
    return view(
        '/tentang-pengadilan/ze-6',
        [
            'title'=> 'Zona Integritas Area VI',
        ]
    );
});

Route::get('/survei-kepuasan', function () {
    return view(
        '/tentang-pengadilan/survei-kepuasan',
        [
            'title'=> 'Hasil Survei Indeks Kepuasan Masyarakat',
        ]
    );
});

Route::get('/survei-persepsi-korupsi', function () {
    return view(
        '/tentang-pengadilan/survei-persepsi-korupsi',
        [
            'title'=> 'Hasil Survei Indeks Persepsi Korupsi',
        ]
    );
});

Route::get('/survei-spak-spkp', function () {
    return view(
        '/tentang-pengadilan/survei-spak-spkp',
        [
            'title'=> 'Hasil SPAK dan Hasil SPKP',
        ]
    );
});

Route::get('/piagam-penghargaan', function () {
    return view('
    /tentang-pengadilan/piagam-penghargaan',
        [
            'title'=> 'Piagam Penghargaan',
        ]
    );
});

Route::get('/ptsp', function () {
    return view(
        '/layanan-publik/ptsp',
        [
            'title'=> 'Pelayanan Terpadu Satu Pintu',
        ]
    );
});

Route::get('/tata-tertib', function () {
    return view(
        '/layanan-publik/tata-tertib',
        [
            'title'=> 'Tata Tertib di Pengadilan dan Persidangan',
        ]
    );
});

Route::get('/penerimaan-pegawai', function () {
    return view(
        '/layanan-publik/penerimaan-pegawai',
        [
            'title'=> 'Penerimaan Pegawai',
        ]
    );
});

Route::get('/mekanisme-permohonan-informasi', function () {
    return view(
        '/layanan-publik/mekanisme-permohonan-informasi',
        [
            'title'=> 'Mekanisme Permohonan Informasi',
        ]
    );
});

Route::get('/biaya-memperoleh-permohonan', function () {
    return view(
        '/layanan-publik/biaya-memperoleh-permohonan',
        [
            'title'=> 'Biaya Memperoleh Peromohonan Informasi',
        ]
    );
});

Route::get('/hak-pemohon-informasi', function () {
    return view(
        '/layanan-publik/hak-pemohon-informasi',
        [
            'title'=> 'Hak-hak Pemohon Informasi',
        ]
    );
});

Route::get('/mekanisme-keberatan', function () {
    return view(
        '/layanan-publik/mekanisme-keberatan',
        [
            'title'=> 'Mekanisme Keberatan Atas Permohonan Informasi ',
        ]
    );
});

Route::get('/laporan-permohonan', function () {
    return view(
        '/layanan-publik/laporan-permohonan',
        [
            'title'=> 'Laporan Permohonan Informasi',
        ]
    );
});

Route::get('/pejabat-pengelola', function () {
    return view(
        '/layanan-publik/pejabat-pengelola',
        [
            'title'=> 'Pejabat Pengelola Informasi dan Dokumentasi',
        ]
    );
});

Route::get('/mekanisme-pengaduan', function () {
    return view(
        '/layanan-publik/mekanisme-pengaduan',
        [
        'title'=> 'Mekanisme Pengaduan',
        ]
    );
});

Route::get('/hak-pelapor-terlapor', function () {
    return view(
        '/layanan-publik/hak-pelapor-terlapor',
        [
            'title'=> 'Hak-hak Pelapor dan Terlapor',
        ]
    );
});

Route::get('/laporan-pengaduan', function () {
    return view(
        '/layanan-publik/laporan-pengaduan',
        [
            'title'=> 'Laporan Pengaduan',
        ]
    );
});

Route::get('/artikel', function () {
    return view(
        '/layanan-publik/artikel',
        [
            'title'=> 'Artikel',
        ]
    );
});

Route::get('/maklumat-pelayanan', function () {
    return view(
        '/layanan-publik/maklumat-pelayanan',
        [
            'title'=> 'Maklumat Pelayanan',
        ]
    );
});

Route::get('/standar-pelayanan-pengadilan', function () {
    return view(
        '/layanan-publik/standar-pelayanan-pengadilan',
        [
            'title'=> 'Standar Pelayanan Pengadilan',
        ]
    );
});

Route::get('/biaya-perkara', function () {
    return view(
        '/transparansi/biaya-perkara',
        [
            'title'=> 'Biaya Perkara',
        ]
    );
});

Route::get('/laporan-keuangan-perkara', function () {
    return view(
        '/transparansi/laporan-keuangan-perkara',
        [
            'title'=> 'Laporan Keuangan Perkara',
        ]
    );
});

Route::get('/pelaksanaan-sidang-keliling', function () {
    return view(
        '/layanan-hukum/pelaksanaan-sidang-keliling',
        [
            'title'=> 'Pelaksanaan Sidang Keliling',
        ]
    );
});

Route::get('/peraturan-perundangan', function () {
    return view(
        '/layanan-hukum/peraturan-perundangan',
        [
            'title'=> 'Peraturan Perundangan-Undangan',
        ]
    );
});

Route::get('/yurisprudensi-2', function () {
    return view(
        '/layanan-hukum/yurisprudensi-2',
        [
            'title'=> 'Yurisprudensi',
        ]
    );
});

Route::get('/sop-penerimaan', function () {
    return view(
        '/layanan-hukum/sop-penerimaan',
        [
            'title'=> 'SOP Penerimaan Berkas Perkara Tk.Pertama',
        ]
    );
});

Route::get('/sop-hukum-banding', function () {
    return view(
        '/layanan-hukum/sop-hukum-banding',
        [
            'title'=> 'SOP Permohonan Upaya Hukum Banding',
        ]
    );
});

Route::get('/sop-hukum-kasasi', function () {
    return view(
        '/layanan-hukum/sop-hukum-kasasi',
        [
            'title'=> 'SOP Permohonan Upaya Hukum Kasasi',
        ]
    );
});

Route::get('/sop-hukum-pk', function () {
    return view(
        '/layanan-hukum/sop-hukum-pk',
        [
            'title'=> 'SOP Upaya Hukum PK',
        ]
    );
});

Route::get('/sop-hukum-grasi', function () {
    return view(
        '/layanan-hukum/sop-hukum-grasi',
        [
            'title'=> 'SOP Upaya Hukum Grasi',
        ]
    );
});

Route::get('/sop-penyelesaian-perkara', function () {
    return view(
        '/layanan-hukum/sop-penyelesaian-perkara',
        [
            'title'=> 'Standar Operasional  dan Prosedur Penyelesaian Perkara Tk. Pertama',
        ]
    );
});

Route::get('/standar-operasional', function () {
    return view(
       '/layanan-hukum/standar-operasional',
        [
            'title'=> 'Standar Operasional Prosedur (SOP)',
        ]
    );
});

Route::get('/putusan-absentia', function () {
    return view(
        '/transparansi/putusan-absentia',
        [
            'title'=> 'Putusan In Absentia',
        ]
    );
});

Route::get('/putusan-absentia-juni-2023', function () {
    return view(
        '/transparansi/putusan-absentia-juni-2023',
        [
            'title'=> 'Putusan In Absentia Juni 2023',
        ]
    );
});

Route::get('/putusan-absentia-mei-2023', function () {
    return view(
        '/transparansi/putusan-absentia-mei-2023',
        [
            'title'=> 'Putusuan In Absentia Mei 2023',
        ]
    );
});

Route::get('/putusan-absentia-maret-2023', function () {
    return view(
        '/transparansi/putusan-absentia-maret-2023',
        [
            'title'=> 'Putusan In absentia Maret 2023',
        ]
    );
});

Route::get('/program-kerja', function () {
    return view(
        '/transparansi/program-kerja',
        [
            'title'=> 'Program Kerja',
        ]
    );
});

Route::get('/rencana-kerja-anggaran', function () {
    return view(
        '/transparansi/rencana-kerja-anggaran',
        [
            'title'=> 'Rencana Kerja Anggaran/Usulan Awal RKA-KL',
        ]
    );
});

Route::get('/lkjlp', function () {
    return view(
        '/transparansi/lkjlp',
        [
            'title'=> 'Laporan Kinerja Instansi Pemerintah',
        ]
    );
});

Route::get('/rencana-strategis', function () {
    return view(
        '/transparansi/rencana-strategis',
        [
            'title'=> 'Rencana Strategis',
        ]
    );
});

Route::get('/review-kinerja-utama', function () {
    return view(
        '/transparansi/review-kinerja-utama',
        [
            'title'=> 'Review Indikator Kinerja Utama',
        ]
    );
});

Route::get('/rencana-kinerja-tahunan', function () {
    return view(
        '/transparansi/rencana-kinerja-tahunan',
        [
            'title'=> 'Rencana Kinerja Tahunan',
        ]
    );
});

Route::get('/rencana-aksi-kinerja', function () {
    return view(
        '/transparansi/rencana-aksi-kinerja',
        [
            'title'=> 'Rencana Aksi Kinerja',
        ]
    );
});

Route::get('/perjanjian-kinerja-tahunan', function () {
    return view(
        '/transparansi/perjanjian-kinerja-tahunan',
        [
            'title'=> 'Perjanjian Kinerja Tahunan ',
        ]
    );
});

Route::get('/penilaian-sakip', function () {
    return view(
        '/transparansi/penilaian-sakip',
        [
            'title'=> 'Penilaian SAKIP',
        ]
    );
});
Route::get('/laporan-tahunan', function () {
    return view(
        '/transparansi/laporan-tahunan',
        [
            'title'=> 'Laporan Tahunan',
        ]
    );
});

Route::get('/dipa-01-bua-mari', function () {
    return view(
        '/transparansi/dipa-01-bua-mari',
        [
            'title'=> 'DIPA 01 BUA MARI',
        ]
    );
});

Route::get('/dipa-05-ditjen', function () {
    return view(
        '/transparansi/dipa-05-ditjen',
        [
            'title'=> 'DIPA 05 DITJEN BADIMILTUN MA RI',
        ]
    );
});

Route::get('/laporan-keuangan', function () {
    return view(
        '/transparansi/laporan-keuangan',
        [
            'title'=> 'Laporan Keuangan',
        ]
    );
});

Route::get('/realisasi-anggaran-2024', function () {
    return view(
        '/transparansi/realisasi-anggaran-2024',
        [
            'title'=> 'Realisasi Anggaran Tahun 2024',
        ]
    );
});

Route::get('/realisasi-anggaran-2023', function () {
    return view(
        '/transparansi/realisasi-anggaran-2023',
        [
            'title'=> 'Realisasi Anggaran Tahun 2023',
        ]
    );
});

Route::get('/realisasi-anggaran-2022', function () {
    return view(
        '/transparansi/realisasi-anggaran-2022',
        [
            'title'=> 'Realisasi Anggaran Tahun 2022',
        ]
    );
});

Route::get('/realisasi-anggaran-2021', function () {
    return view(
        '/transparansi/realisasi-anggaran-2021',
        [
            'title'=> 'Realisasi Anggaran Tahun 2021',
        ]
    );
});

Route::get('/realisasi-anggaran-2020', function () {
    return view(
        '/transparansi/realisasi-anggaran-2020',
        [
            'title'=> 'Realisasi Anggaran Tahun 2020',
        ]
    );
});

Route::get('/statistik-perkara-pertahun', function () {
    return view(
        '/transparansi/statistik-perkara-pertahun',
        [
            'title'=> 'Statistik Perkara Pertahun ',
        ]
    );
});

Route::get('/data-statistik-2024', function () {
    return view(
        '/transparansi/data-statistik-2024',
        [
            'title'=> 'Data Statistik Perkara TA. 2024',
        ]
    );
});

Route::get('/data-statistik-2023', function () {
    return view(
        '/transparansi/data-statistik-2023',
        [
            'title'=> 'Data Statistik Perkara TA. 2023',
        ]
    );
});

Route::get('/data-statistik-2022', function () {
    return view(
        '/transparansi/data-statistik-2022',
        [
            'title'=> 'Data Statistik Perkara TA. 2022',
        ]
    );
});

Route::get('/data-statistik-2021', function () {
    return view(
        '/transparansi/data-statistik-2021',
        [
            'title'=> 'Data Statistik Perkara TA. 2021',
        ]
    );
});

Route::get('/data-statistik-2020', function () {
    return view(
        '/transparansi/data-statistik-2020',
        [
            'title'=> 'Data Statistik Perkara TA. 2020',
        ]
    );
});

Route::get('/kinerja-penyelesaian-perkara', function () {
    return view(
        '/transparansi/kinerja-penyelesaian-perkara',
        [
            'title'=> 'Kinerja Penyelesaian Perkara Sebelum dan Setelah Reformasi Birokrasi',
        ]
    );
});

Route::get('/laporan-kinerja-hakim-panitera', function () {
    return view(
        '/transparansi/laporan-kinerja-hakim-panitera',
        [
            'title'=> 'Laporan Kinerja Hakim dan Panitera',
        ]
    );
});

Route::get('/lhkpn-lhkasn', function () {
    return view(
        '/transparansi/lhkpn-lhkasn',
        [
            'title'=> 'LHKPN dan LHKASN',
        ]
    );
});

Route::get('/barang-milik-negara', function () {
    return view(
        '/transparansi/barang-milik-negara',
        [
            'title'=> 'Daftar Barang Milik Negara (BMN)',
        ]
    );
});

Route::get('/surat-keputusan-2023', function () {
    return view(
        '/transparansi/surat-keputusan-2023',
        [
            'title'=> 'Surat keputusan TA. 2023',
        ]
    );
});

Route::get('/link-terkait', function () {
    return view(
        'link-terkait',
        [
            'title'=> 'Link Terkait',
        ]
    );
});

