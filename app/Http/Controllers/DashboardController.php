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

    public function Info()
    {
        // $blog_post = [];
        $title = "INFO WISATA";
        return view('halaman-pengunjung.info-wisata', [
            'title' => $title,
            // 'datawisatas' => DataWisata::all()
        ]);
    }
}
