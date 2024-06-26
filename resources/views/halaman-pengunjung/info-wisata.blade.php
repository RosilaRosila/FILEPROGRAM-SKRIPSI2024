@extends('layouts.dashboardinfo')
@section('container')
<br>
<br>
<br>
<div class="card-body mt-4">
    <h5 class="card-title">Wisata - Wisata Kabupaten Pangandaran</h5>
    <p class="card-text">Terdapat 12 wisata yang berada di kabupaten pangandaran.</p>
</div>
<br>
<div class="container">
    <main class="grid">
        @foreach($datawisatas as $dwisata)
        <article>
            <img src="{{ asset($dwisata->image) }}" height="200vh">
            <div class="content">
                <p>{{ $dwisata->title }}</p>
                <div class="card-body">
                    <a href="{{ route('pengunjung_detail_wisata', $dwisata->id) }}" class="btn border-dark center-block">Lihat Detail Informasi</a>
                </div>
            </div>
        </article>
        @endforeach
    </main>
</div>
<br>
@endsection