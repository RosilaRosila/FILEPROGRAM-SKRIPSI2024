<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /* ---------- HALAMAN SIDEBAR ADMIN ---------- */

    /* -------- MENU DASHBOARD -------- */
    public function dashboard()
    {
        $title = "DASHBOARD";
        return view('dashboard', [
            'title' => $title,
        ]);
    }

    /* -------- MENU DATA WISATA -------- */
    public function dwisata()
    {
        $title = "DATA WISATA";
        return view('data-wisata', [
            'title' => $title,
        ]);
    }

    // public function addwisata()
    // {
    //     $title = "DATA WISATA";
    //     return view('admin.addatawisata', [
    //         'title' => $title,
    //     ]);
    // }
}
