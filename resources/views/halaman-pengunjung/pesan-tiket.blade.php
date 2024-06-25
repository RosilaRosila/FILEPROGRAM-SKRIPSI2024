@extends('layouts.dashboardinfo')
@section('container')

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
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Pilih Tempat Wisata">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="number" class="form-control" id="exampleInputPassword" placeholder="Masukan Jumlah Orang">
                                </div>
                                <div class="col-sm-6">
                                    <select name="kendaraan" class="form-control">
                                        <option value="">Pilih Jenis Kendaraan</option>
                                        <option value="motor">1. Motor</option>
                                        <option value="mobil">2. Mobil</option>
                                        <option value="bus">3. Bus</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <label>Masukan Tanggal Liburan</label>
                                <input type="date" name="tgl" class="form-control">
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