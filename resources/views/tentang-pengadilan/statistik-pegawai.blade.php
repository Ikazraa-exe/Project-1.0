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

        <!-- Constructions Section -->
        <section id="constructions" class="constructions section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="">STATISTIK PEGAWAI</h2>
            </div><!-- End Section Title -->

            <div class="container data-container">

                <div class="table-container">

                    <table class="table" data-aos="fade-up" data-aos-delay="100">
                        <tr>
                            <th colspan="2">KEADAAN SDM APARATUR PENGADILAN MILITER I-05 PONTIANAK</th>
                        </tr>
                        <tr>
                            <td><b>PERSONIL</b></td>
                            <td><b>JUMLAH</b></td>
                        </tr>
                        <tr>
                            <td>TNI</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>ASN</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>PPNPN</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td><b>JUMLAH</b></td>
                            <td><b>35</b></td>
                        </tr>
                    </table>
                </div>

                <div class="table-container">

                    <table class="table" data-aos="fade-up" data-aos-delay="100">
                        <tr>
                            <th colspan="5">KEADAAN SDM APARATUR PENGADILAN BERDASARKAN JABATAN DAN PANGKAT</th>
                        </tr>
                        <tr>
                            <td><b>JABATAN</b></td>
                            <td><b>PANGKAT</b></td>
                            <td><b>JUMLAH PERSONIL</b></td>
                            <td><b>TNI / ASN / PPNPN</b></td>
                            <td><b>PENDIDIKAN</b></td>
                        </tr>
                        <tr>
                            <td>KADILMIL</td>
                            <td>KOLONEL CHK</td>
                            <td>1</td>
                            <td>TNI</td>
                            <td>S1</td>
                        </tr>
                        <tr>
                            <td>WAKADILMIL</td>
                            <td>-</td>
                            <td>(KOSONG)</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>POKKIMMIL</td>
                            <td>LETKOL CHK</td>
                            <td>2</td>
                            <td>TNI</td>
                            <td>S2</td>
                        </tr>
                        <tr>
                            <td>POKKIMMIL</td>
                            <td>MAYOR CHK/H</td>
                            <td>2</td>
                            <td>TNI</td>
                            <td>S1/S2</td>
                        </tr>
                        <tr>
                            <td>SEKRETARIS</td>
                            <td>MAYOR CHK</td>
                            <td>1</td>
                            <td>TNI</td>
                            <td>S1</td>
                        </tr>
                        <tr>
                            <td>PANITERA</td>
                            <td>KAPTEN CHK</td>
                            <td>1</td>
                            <td>TNI</td>
                            <td>S1</td>
                        </tr>
                        <tr>
                            <td>PANMUD PIDANA</td>
                            <td>LETTU CHK</td>
                            <td>1</td>
                            <td>TNI</td>
                            <td>S2</td>
                        </tr>
                        <tr>
                            <td>PANMUD HUKUM</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>PP</td>
                            <td>KAPTEN/LETDA CHK</td>
                            <td>2</td>
                            <td>TNI</td>
                            <td>S1/S2</td>
                        </tr>
                        <tr>
                            <td>KASUBBAG</td>
                            <td>PENATA TK.I/IIID</td>
                            <td>3</td>
                            <td>ASN</td>
                            <td>S1</td>
                        </tr>
                        <tr>
                            <td>ANALIS</td>
                            <td><p>PENATA /IIIC</p>
                                <p>PENATA MUDA TK.I/IIIB</p></td>
                            <td><p>1</p>
                            <p>2</p></td>
                            <td>ASN</td>
                            <td>S1</td>
                        </tr>
                        <tr>
                            <td>ANALIS</td>
                            <td>PENATA MUDA /IIIA</td>
                            <td>1</td>
                            <td>ASN</td>
                            <td>S1</td>
                        </tr>
                        <tr>
                            <td>BENDAHARA PENGELUARAN</td>
                            <td>PENGATUR /IIC</td>
                            <td>1</td>
                            <td>ASN</td>
                            <td>D3</td>
                        </tr>
                        <tr>
                            <td>BENDAHARA PENERIMAAN</td>
                            <td>SERMA</td>
                            <td>1</td>
                            <td>TNI</td>
                            <td>SMA</td>
                        </tr>
                        <tr>
                            <td>PENGELOLA PERKARA</td>
                            <td>PENGATUR /IIC</td>
                            <td>1</td>
                            <td>ASN</td>
                            <td>D3</td>
                        </tr>
                        <tr>
                            <td>PENGADMINISTRASI</td>
                            <td>PENATA MUDA TK.I /IIIB</td>
                            <td>4</td>
                            <td>ASN</td>
                            <td>SMA</td>
                        </tr>
                        <tr>
                            <td>PPNPN</td>
                            <td>-</td>
                            <td>4</td>
                            <td>PPNPN</td>
                            <td>S1 / D3</td>
                        </tr>
                        <tr>
                            <td>PPNPN</td>
                            <td>-</td>
                            <td>5</td>
                            <td>PPNPN</td>
                            <td>SMA</td>
                        </tr>
                            
                    </table>
                </div>
    </main>
@endsection
