<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataWisata;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDataWisataRequest;
use App\Http\Requests\UpdateDataWisataRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

// use App\Http\Controllers\DataWisataController;

class DataWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "DATA WISATA";
        return view('admin.addatawisata', [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,webp',
            'deskripsi' => 'required',
            'readmore' => 'required',
            'imgheader' => 'required|image|mimes:jpg,jpeg,png,gif,webp',
            'alamat' => 'required',
        ]);

        /* ----- Filename Image ----- */
        $ext = Null;
        $final_name = Null;

        if ($request->has('image')) {
            $file_img = $request->file('image');
            $extention_img = $file_img->getClientOriginalExtension();
            $ext = time() . '.' . $extention_img;

            $final_name = 'uploads/';
            $file_img->move($final_name, $ext);
        }

        /* ----- Filename Image Header ----- */
        $ext_hdr = Null;
        $final_hdr = Null;

        if ($request->has('imgheader')) {
            $file_hdr = $request->file('imgheader');
            $extention_hdr = $file_hdr->getClientOriginalExtension();
            $ext_hdr = time() . '.' . $extention_hdr;

            $final_hdr = 'uploads/';
            $file_hdr->move($final_hdr, $ext_hdr);
        }

        DataWisata::create([
            'title' => $request->title,
            'image' => $final_name . $ext,
            'deskripsi' => $request->deskripsi,
            'readmore' => $request->readmore,
            'imgheader' => $final_hdr . $ext_hdr,
            'alamat' => $request->alamat,
        ]);

        // return redirect()->route('admin.admin_data_wisata')->with('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('admin.data-wisata')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataWisata $dataWisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        // $dwist = DataWisata::where('id', $id)->first();
        $title = "DATA WISATA";
        return view('admin.editdatawisata', [
            'title' => $title,
            'datawisatas' => DataWisata::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,webp',
            'deskripsi' => 'required',
            'readmore' => 'required',
            'imgheader' => 'required|image|mimes:jpg,jpeg,png,gif,webp',
            'alamat' => 'required',
        ]);

        $datawisatas = DataWisata::where('id', $id)->first();

        if ($request->has('image')) {
            $file_img = $request->file('image');
            $extention_img = $file_img->getClientOriginalExtension();
            $ext = time() . '.' . $extention_img;

            $final_name = 'uploads/';
            $file_img->move($final_name, $ext);

            if (File::exists($datawisatas->image)) {
                File::delete($datawisatas->image);
            }
        }



        if ($request->has('imgheader')) {
            $file_hdr = $request->file('imgheader');
            $extention_hdr = $file_hdr->getClientOriginalExtension();
            $ext_hdr = time() . '.' . $extention_hdr;

            $final_hdr = 'uploads/';
            $file_hdr->move($final_hdr, $ext_hdr);

            if (File::exists($datawisatas->imgheader)) {
                File::delete($datawisatas->imgheader);
            }
        }

        $datawisatas->update([
            'title' => $request->title,
            'image' => $final_name . $ext,
            'deskripsi' => $request->deskripsi,
            'readmore' => $request->readmore,
            'imgheader' => $final_hdr . $ext_hdr,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('admin.data-wisata')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //

        $datawisatas = DataWisata::where('id', $id)->first();

        if (File::exists($datawisatas->image)) {
            File::delete($datawisatas->image);
        }

        if (File::exists($datawisatas->imgheader)) {
            File::delete($datawisatas->imgheader);
        }

        $datawisatas->delete();

        return redirect()->route('admin.data-wisata')->with('success', 'Data Berhasil Ditambahkan');
    }
}
