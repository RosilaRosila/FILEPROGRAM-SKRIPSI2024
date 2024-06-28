<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\DataWisata;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
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
    public function dwisata(): View
    {
        // $datawisatas = DataWisata::with('title')->paginate(2);
        $title = "DATA WISATA";
        return view('data-wisata', [
            'title' => $title,
            'datawisatas' => DB::table('data_wisatas')->paginate(2)
        ]);
    }

    // public function addwisata()
    // {
    //     $title = "DATA WISATA";
    //     return view('admin.addatawisata', [
    //         'title' => $title,
    //     ]);
    // }

    public function dfasilitas()
    {
        $title = "FASILITAS";
        return view('fasilitas', [
            'title' => $title,
            'datafasilitas' => DB::table('fasilitas')->paginate(5)
        ]);
    }


    public function dtiket()
    {
        $title = "DATA TIKET";
        return view('data-tiket', [
            'title' => $title,
        ]);
    }
}
