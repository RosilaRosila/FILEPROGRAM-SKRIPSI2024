@extends('layouts.dashboardinfo')
@section('container')

<br>
<div class="container">

    <div class="card o-hidden border-0  my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset('/') }}assets/img/logokp.png" class="mx-auto d-block" width="300" height="300" alt="" style="margin-top: 150px;">
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h3 class="h4 text-gray-900 mb-4">Pesan Tiket Wisata</h3>
                        </div>
                        <hr style="border: 1px double black;">
                        <br>
                        <form class="user">
                            <div class="form-group">
                                <label for="txtname" class="form-label">Masukan Nama Lengkap Anda (Enter your full name)</label>
                                <input type="text" class="form-control form-control" id="txtname" placeholder="Nama Lengkap" name="name">
                            </div>
                            <div class="form-group">
                                <label for="txttiket" class="form-label">Pilih Tiket Wisata (choose your tour ticket)</label>
                                <select name="tiket" class="form-control" id="txttiket">
                                    <option value="" selected>Tiket Wisata</option>
                                    <option value="1">1. Pantai Pangandaran</option>
                                    <option value="2">2. Mobil</option>
                                    <option value="3">3. Bus</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txtjumlah" class="form-label">Masukan Jumlah Orang (Enter the number of people)</label>
                                <input type="number" class="form-control" id="txtjumlah" placeholder="Jumlah Orang" name="txtjumlah">
                            </div>
                            <div class="form-group">
                                <label for="txtkendaraan" class="form-label">Pilih Jenis Kendaraan (select your vehicle type)</label>
                                <select name="kendaraan" class="form-control" id="txtkendaraan">
                                    <option value="" selected>Kendaraan</option>
                                    <option value="1">1. Motor</option>
                                    <option value="2">2. Mobil</option>
                                    <option value="3">3. Bus</option>
                                </select>
                            </div>
                            <!-- <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="txtjumlah" class="form-label">Masukan Jumlah Orang (Enter the number of people)</label>
                                    <input type="number" class="form-control" id="txtjumlah" placeholder="Jumlah Orang" name="txtjumlah">
                                </div>
                                <div class="col-sm-6">
                                    <label for="txtkendaraan" class="form-label">Pilih Jenis Kendaraan (select your vehicle type)</label>
                                    <select name="kendaraan" class="form-control" id="txtkendaraan">
                                        <option value="" selected>Kendaraan</option>
                                        <option value="1">1. Motor</option>
                                        <option value="2">2. Mobil</option>
                                        <option value="3">3. Bus</option>
                                    </select>

                                </div>
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="txtplat" class="form-label">Masukan Plat Kendaraan Anda</label>
                                <input type="text" class="form-control form-control" id="txtplat" placeholder="Z 1234 UC" name="txtplat">
                            </div> -->
                            <div class="form-group mt-4">
                                <label for="txttanggal" class="form-label">Masukan Tanggal Liburan/Kunjungan (Enter the date of your visit)</label>
                                <input type="date" name="tgl" class="form-control" id="txttanggal">
                            </div>
                            <br>
                            <a href="login.html" class="btn btn-primary btn-user btn-block">
                                Pesan Tiket
                            </a>
                        </form>
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <a href="login.html" class="btn btn-danger btn-block">
                                    Hubungi Kami
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="login.html" class="btn btn-success btn-block">
                                    Beri Ulasan
                                </a>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>


    </div>

</div>



@endsection