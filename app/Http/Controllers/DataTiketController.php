<?php

namespace App\Http\Controllers;

use App\Models\DataTiket;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDataTiketRequest;
use App\Http\Requests\UpdateDataTiketRequest;
use Illuminate\Http\Request;

class DataTiketController extends Controller
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
        $title = "DATA TIKET";
        return view('admin.addtiket', [
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
            'namawst' => 'required',
            'harga' => 'required'
        ]);

        DataTiket::create([
            'namawst' => $request->namawst,
            'harga' => $request->harga
        ]);

        return redirect()->route('admin.data-tiket')->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(DataTiket $dataTiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $title = "DATA TIKET";
        return view('admin.edittiket', [
            'title' => $title,
            'datatikets' => DataTiket::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'namawst' => 'required',
            'harga' => 'required'
        ]);

        $datatikets = DataTiket::where('id', $id)->first();

        $datatikets->update([
            'namawst' => $request->namawst,
            'harga' => $request->harga
        ]);

        return redirect()->route('admin.data-tiket')->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataTiket $dataTiket)
    {
        //
    }

    public function delete($id)
    {
        $datatikets = DataTiket::where('id', $id)->first();

        $datatikets->delete();

        return redirect()->route('admin.data-tiket')->with(['success' => 'Data Berhasil Ditambahkan']);
    }
}
