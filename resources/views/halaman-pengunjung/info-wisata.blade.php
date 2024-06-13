@extends('layouts.dashboardinfo')
@section('container')
<br>
<div class="card-body">
    <h5 class="card-title">Wisata - Wisata Kabupaten Pangandaran</h5>
    <p class="card-text">Terdapat 12 wisata yang berada di kabupaten pangandaran.</p>
</div>
<br>
<div class="container">
    <main class="grid">
        <article>
            <img src="{{ asset('/') }}assets/img/ptnpnd.jpg" height="200vh">
            <div class="content">
                <p>Pantai Pangandaran</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Pantai-Pangandaran" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        <article>
            <img src="{{ asset('/') }}assets/img/ptkrp.jpg" height="200vh">
            <div class="content">
                <p>Pantai Karapyak</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Pantai-Karapyak" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        <article>
            <img src="{{ asset('/') }}assets/img/ptnbth.jpg" height="200vh">
            <div class="content">
                <p>Pantai Batuhiu</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Pantai-Batuhiu" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        <article>
            <img src="{{ asset('/') }}assets/img/ptbtk.jpg" height="200vh">
            <div class="content">
                <p>Pantai Batukaras</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Pantai-Batukaras" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        <article>
            <img src="{{ asset('/') }}assets/img/grcanyon.jpg" height="200vh">
            <div class="content">
                <p>Cukang Taneuh/Green Canyon</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Green-Canyon" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        <article>
            <img src="{{ asset('/') }}assets/img/bdctm.jpg" height="200vh">
            <div class="content">
                <p>Body Rafting Citumang</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Body-Rafting-Citumang" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        <article>
            <img src="{{ asset('/') }}assets/img/cagaralam.jpg" height="200vh">
            <div class="content">
                <p style="font-size: 13px; ">Taman Wisata Alam Pangandaran (Cagar Alam)</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Cagar-Alam" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        <article>
            <img src="{{ asset('/') }}assets/img/ptkrn.jpg" height="200vh">
            <div class="content">
                <p>Pantai Karangnini</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Pantai-Karangnini" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        <article>
            <img src="{{ asset('/') }}assets/img/crbj.jpg" height="200vh">
            <div class="content">
                <p>Curug Bojong</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Curug-Bojong" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        <article>
            <img src="{{ asset('/') }}assets/img/ptnmds.jpg" height="200vh">
            <div class="content">
                <p>Pantai Madasari</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Pantai-Madasari" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        <article>
            <img src="{{ asset('/') }}assets/img/bdstr.jpg" height="200vh">
            <div class="content">
                <p>Body Rafting Santirah</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Body-Rafting-Santirah" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        <article>
            <img src="{{ asset('/') }}assets/img/bdcwy.jpeg" height="200vh">
            <div class="content">
                <p>Body Rafting Ciwayang</p>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/Body-Rafting-Ciwayang" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
    </main>
</div>
<br>
@endsection