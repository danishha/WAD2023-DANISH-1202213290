<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('showroom.index', [
            'showroom' => Showroom::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('showroom.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Showroom::create([
            'nama_mobil' => $data['name'],
            'brand_mobil' => $data['brand'],
            'warna_mobil' => $data['warna'],
            'tipe_mobil' => $data['tipe'],
            'harga_mobil' => $data['harga'],
        ]);
        return redirect()->route('showroom.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Showroom $showroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Showroom $showroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Showroom $showroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Showroom $showroom)
    {
        //
    }
}