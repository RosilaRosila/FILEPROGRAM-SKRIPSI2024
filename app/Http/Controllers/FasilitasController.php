<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFasilitasRequest;
use App\Http\Requests\UpdateFasilitasRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{

    public function __construct()
    {
        // $this->middleware(['permission:view_dashboard']);
    }
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
        $tittle = "FASILITAS";
        return view('admin.addfasilitas', [

            'title' => $tittle,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'namaicon' => 'required',
            'imgicon' => 'required|image|mimes:jpg,jpeg,png,gif,webp',
        ]);

        // $icn = $request->file('imgicon')->extension();
        // $img_final = time() . '.' . $icn;
        // $request->file('imgicon')->move(public_path('icons/'), $img_final);

        $filename = Null;
        $path = Null;

        if ($request->has('imgicon')) {
            $file = $request->file('imgicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;

            $path = 'icons/';
            $file->move($path, $filename);
        }

        Fasilitas::create([
            'namaicon' => $request->namaicon,
            'imgicon' => $path . $filename
        ]);

        return redirect()->route('admin.data-fasilitas')->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        // $datafasilitas = Fasilitas::findOrFail($id);
        $title = "Fasilitas";
        return view('admin.editfasilitas',  [
            // compact('datafasilitas'),
            'title' => $title,
            'datafasilitas' => Fasilitas::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'namaicon' => 'required',
            'imgicon' => 'required|image|mimes:jpg,jpeg,png,gif,webp',
        ]);

        $datafasilitas = Fasilitas::where('id', $id)->first();

        if ($request->has('imgicon')) {
            $file = $request->file('imgicon');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;

            $path = 'icons/';
            $file->move($path, $filename);

            if (File::exists($datafasilitas->imgicon)) {
                File::delete($datafasilitas->imgicon);
            }
        }

        $datafasilitas->update([
            'namaicon' => $request->namaicon,
            'imgicon' => $path . $filename
        ]);

        return redirect()->route('admin.data-fasilitas')->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fasilitas $fasilitas)
    {
        //
    }

    public function delete($id)
    {
        $datafasilitas = Fasilitas::where('id', $id)->first();

        if (File::exists($datafasilitas->imgicon)) {
            File::delete($datafasilitas->imgicon);
        }

        $datafasilitas->delete();

        return redirect()->route('admin.data-fasilitas')->with(['success' => 'Data Berhasil Ditambahkan']);
    }
}
