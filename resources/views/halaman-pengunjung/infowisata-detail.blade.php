@extends('layouts.dashboardinfo-detail')
@section('container')
<br>
<br>
<br>
<br>
<br>
<div class="image-header">
    <div class="card mb-3">
        <img class="card-img-top" src="{{ asset($datawisatas->imgheader) }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title" style="font-weight: bold;">{{ $datawisatas->title }}</h5>
            <p class="card-text" style="text-align: justify;">
                {{ $datawisatas->deskripsi }}
                <span id="dots">...</span><span id="more">
                    {{ $datawisatas->readmore }}
                </span>
            </p>
            <button onclick="myFunction()" id="myBtn">Read more</button>
        </div>
    </div>
    <br>
    <br>
    <!-- ---------- ALAMAT ---------- -->
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <p class="card-header" style="font-size: 16px; font-weight:bold;">Alamat</p>
                        <div class="card-body">
                            <p style="font-size: 13px; font-weight:bold;">{{ $datawisatas->title }}</p>
                            <img src="{{ asset('/') }}assets/img/place-marker.png" alt="deskripsi gambar" style="height:30px;">
                            <span style="font-size: 12px;">{{ $datawisatas->alamat }}</span>
                        </div>
                    </div>
                    <br>
                    <!-- ---------- FASILITAS ---------- -->
                    <div class="card">
                        <p class="card-header" style="font-size: 16px; font-weight:bold;">Fasilitas</p>
                        <div class="card-body">
                            <div class="header-fasilitas">
                                <main class="grid">
                                    <article>
                                        <div class="content">
                                            <img src="{{ asset('/') }}assets/img/icon/restoran.png" alt="deskripsi gambar" style="height:25px;">
                                            <span style="font-size: 12px;">&nbsp Restoran</span>
                                        </div>
                                    </article>
                                    <article>
                                        <div class="content">
                                            <img src="{{ asset('/') }}assets/img/icon/hotel.png" alt="deskripsi gambar" style="height:22px;">
                                            <span style="font-size: 12px;">&nbsp Hotel/Penginapan/Pondok</span>
                                        </div>
                                    </article>
                                    <article>
                                        <div class="content">
                                            <img src="{{ asset('/') }}assets/img/icon/parking.png" alt="deskripsi gambar" style="height:25px;">
                                            <span style="font-size: 12px;">&nbsp Tempat Parkir</span>
                                        </div>
                                    </article>
                                    <article>
                                        <div class="content">
                                            <img src="{{ asset('/') }}assets/img/icon/toilet.png" alt="deskripsi gambar" style="height:21px;">
                                            <span style="font-size: 12px;">&nbsp Toilet Umum</span>
                                        </div>
                                    </article>
                                    <article>
                                        <div class="content">
                                            <img src="{{ asset('/') }}assets/img/icon/camp.png" alt="deskripsi gambar" style="height:25px;">
                                            <span style="font-size: 12px;">&nbsp Tempat Perkemahan</span>
                                        </div>
                                    </article>
                                    <article>
                                        <div class="content">
                                            <img src="{{ asset('/') }}assets/img/icon/mosque.png" alt="deskripsi gambar" style="height:25px;">
                                            <span style="font-size: 12px;">&nbsp Mushola</span>
                                        </div>
                                    </article>
                                    <article>
                                        <div class="content">
                                            <img src="{{ asset('/') }}assets/img/icon/cafe.png" alt="deskripsi gambar" style="height:22px;">
                                            <span style="font-size: 12px;">&nbsp Warung Kopi</span>
                                        </div>
                                    </article>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------- INFO HARGA TIKET ---------- -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <p class="card-header" style="font-size: 16px; font-weight:bold;">Info Harga Tiket</p>
                        <div class="card-body">
                            <p style="text-align: justify; font-size:14px;">
                                Tiket Masuk Pangandaran <span style="font-weight: bold;">Per 05 Januari 2024 </span>
                                tarif Zonasi sesuai dengan Peraturan Pemerintah Daerah <span style="font-weight: bold;">08 Tahun 2023</span> tentang
                                Pajak Daerah dan Retribusi Daerah Dan yang sebelumnya di hitung per jenis kendaraan
                                kini di hitung tarif Perorangan.
                            </p>
                            <div class="judul-header">
                                <p style="font-weight: bold; font-size:13px">Tiket Obyek Wisata Pantai Karapyak</p>
                            </div>
                            <div class="grid-isi">
                                <div class="isi">
                                    <p>1. Pantai Pangandaran + Batu Hiu</p>
                                </div>
                                <div class="isi-harga">
                                    <p>Rp.20.000/orang</p>
                                </div>
                                <div class="isi">
                                    <p>2. Pantai Karapyak </p>
                                </div>
                                <div class="isi-harga">
                                    <p>Rp.6.000/orang </p>
                                </div>
                            </div>
                            <div class="judul-header"></div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="{{ route('pesan-tiket') }}" class="btn btn-primary center-block">Pesan Tiket Wisata Sekarang</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection