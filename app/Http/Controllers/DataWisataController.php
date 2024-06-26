<?php

namespace App\Http\Controllers;

use App\Models\DataWisata;
use App\Http\Requests\StoreDataWisataRequest;
use App\Http\Requests\UpdateDataWisataRequest;

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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataWisataRequest $request)
    {
        //
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
    public function edit(DataWisata $dataWisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataWisataRequest $request, DataWisata $dataWisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataWisata $dataWisata)
    {
        //
    }
}
