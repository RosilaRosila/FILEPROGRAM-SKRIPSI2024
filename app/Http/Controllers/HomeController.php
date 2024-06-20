<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function dashboard()
    {
        $title = "DASHBOARD";
        return view('dashboard', [
            'title' => $title,
        ]);
    }

    public function dwisata()
    {
        $title = "DATA WISATA";
        return view('data-wisata', [
            'title' => $title,
        ]);
    }

    public function addwisata()
    {
        $title = "DATA WISATA";
        return view('admin.addatawisata', [
            'title' => $title,
        ]);
    }
}
