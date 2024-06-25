<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $title = "DASHBOARD";
        return view('halaman-pengunjung.home', [
            'title' => $title,
        ]);
    }

    public function info()
    {
        // $blog_post = [];
        $title = "INFO WISATA";
        return view('halaman-pengunjung.info-wisata', [
            'title' => $title,
            // 'datawisatas' => DataWisata::all()
        ]);
    }

    public function tiket()
    {
        // $blog_post = [];
        $title = "PESAN TIKET";
        return view('halaman-pengunjung.pesan-tiket', [
            'title' => $title,
            // 'datawisatas' => DataWisata::all()
        ]);
    }
}
