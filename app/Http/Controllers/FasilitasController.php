<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFasilitasRequest;
use App\Http\Requests\UpdateFasilitasRequest;

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
        $title = "FASILITAS";
        return view('fasilitas', [
            'title' => $title,
            'fasilitas' => Fasilitas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "FASILITAS";
        return view('admin.addfasilitas', [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFasilitasRequest $request)
    {
        //
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
    public function edit(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFasilitasRequest $request, Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fasilitas $fasilitas)
    {
        //
    }
}
