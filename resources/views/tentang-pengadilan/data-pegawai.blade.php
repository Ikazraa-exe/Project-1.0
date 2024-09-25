@extends('layouts-front.main')

@section('container')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade" style="background-image: url({{ asset('img/dilmil-depan.jpg') }});">
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

        <!-- Pegawai Section -->
        <section id="pegawai" class="pegawai section">
            <div class="container section-title" data-aos="fade-up">
                <h2>{{ strtoupper($title) }}</h2>
            </div>

            <div class="container">
                @foreach ($pegawai as $p)
                    <div class="data-container" data-aos="fade-up" data-aos-delay="100">
                        <div class="table-container">
                            <div class="photo">
                                <img src="{{ url('storage/' . $p->foto) }}" alt="{{ $p->nama }}">
                            </div>
                            <div class="table-wrapper">
                                <table class="table">
                                    <tr>
                                        <th colspan="2">{{ $p->posisi }}</th>
                                    </tr>
                                    <tr>
                                        <td data-label="Nama">Nama</td>
                                        <td>{{ $p->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Pangkat dan Golongan">Pangkat dan Golongan</td>
                                        <td>{{ $p->pangkat_dan_golongan }}</td>
                                    </tr>
                                    <tr>
                                        <td data-label="NRP">NRP</td>
                                        <td>{{ $p->nrp }}</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Jabatan">Jabatan</td>
                                        <td>{{ $p->jabatan }}</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Tempat Tanggal Lahir">Tempat Tanggal Lahir</td>
                                        <td>{{ $p->tempat_tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Agama">Agama</td>
                                        <td>{{ $p->agama }}</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Pendidikan">Pendidikan</td>
                                        <td>
                                            @if ($p->pendidikan)
                                                @foreach ($p->pendidikan as $pendidikan)
                                                    <p>{{ $pendidikan['jenjang'] }} {{ $pendidikan['institusi'] }}
                                                        ({{ $pendidikan['tahun'] }})
                                                    </p>
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                    @if ($p->lhkpn_asn)
                                        <tr>
                                            <td data-label="LHKPN/ASN">LHKPN/ASN</td>
                                            <td>
                                                <a href="{{ $p->lhkpn_asn }}" target="_blank">(KLIK UNTUK MELIHAT LEBIH
                                                    DETAIL)</a>
                                            </td>
                                        </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
