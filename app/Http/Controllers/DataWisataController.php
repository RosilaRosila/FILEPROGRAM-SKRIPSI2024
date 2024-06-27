<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataWisata;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDataWisataRequest;
use App\Http\Requests\UpdateDataWisataRequest;
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
        $title = "DATA WISATA";
        return view('data-wisata', [
            'title' => $title,
            'datawisatas' => DataWisata::all()
        ]);
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
            'image' => 'required|image|mimes:jpg,jpeg,png,gif',
            'deskripsi' => 'required',
            'readmore' => 'required',
            'imgheader' => 'required|image|mimes:jpg,jpeg,png,gif',
            'alamat' => 'required',
        ]);

        $ext = $request->file('image')->extension();
        $final_name = time() . '.' . $ext;
        $request->file('image')->move(public_path('uploads/'), $final_name);

        $extimg = $request->file('imgheader')->extension();
        $final_img = time() . '.' . $extimg;
        $request->file('imgheader')->move(public_path('uploads/'), $final_img);

        $obj = new DataWisata();
        $obj->title = $request->title;
        $obj->image = $final_name;
        $obj->deskripsi = $request->deskripsi;
        $obj->readmore = $request->readmore;
        $obj->imgheader = $final_img;
        $obj->alamat = $request->alamat;
        $obj->save();

        // DataWisata::create([
        //     'title' => $request->title,
        //     'image' => $final_name,
        //     'deskripsi' => $request->deskripsi,
        //     'readmore' => $request->readmore,
        //     'imgheader' => $final_img,
        //     'alamat' => $request->alamat,
        // ]);

        // return redirect()->route('admin.admin_data_wisata')->with('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('admin.admin_data_wisata')->with('success', 'Data Berhasil Ditambahkan');
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
        //
        $obj = DataWisata::where('id', $id)->first();
        if ($request->hasFile('image', 'imgheader')) {
            $request->validate([
                'image' => 'image|mimes:jpg,jpeg,png,gif',
                'imgheader' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/' . $obj->image,));
            unlink(public_path('uploads/' . $obj->imgheader));
            $ext = $request->file('image')->extension();
            $extimg = $request->file('imgheader')->extension();
            $final_name = time() . '.' . $ext;
            $final_img = time() . '.' . $extimg;
            $request->file('image')->move(public_path('uploads/'), $final_name);
            $request->file('imgheader')->move(public_path('uploads/'), $final_img);
            $obj->image = $final_name;
            $obj->imgheader = $final_img;
        }

        $obj->title = $request->title;
        // $obj->image = $final_name;
        $obj->deskripsi = $request->deskripsi;
        $obj->readmore = $request->readmore;
        // $obj->imgheader = $final_img;
        $obj->alamat = $request->alamat;
        $obj->update();

        return redirect()->route('admin.admin_data_wisata')->with('success', 'Slide is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //

        $dt_wisata = DataWisata::where('id', $id)->first();
        $image_path = public_path('uploads/' . $dt_wisata->image);
        $image_hdr = public_path('uploads/' . $dt_wisata->imgheader);
        // unlink(public_path('uploads/' . $dt_wisata->image,));
        // unlink(public_path('uploads/' . $dt_wisata->imgheader));
        if (file_exists($image_path or $image_hdr)) {
            Storage::delete($image_path or $image_hdr);
        }

        $dt_wisata->delete();

        return redirect()->back()->with('success', 'Slide is updated successfully.');
    }
}
