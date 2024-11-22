<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use Illuminate\Http\Request;

class RekDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
            $rekomen = Rekomendasi::all();
            return view('back.datarekomendasi', compact('rekomen'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          // Temukan produk berdasarkan ID
          $rekomen = Rekomendasi::find($id);

          // Periksa apakah produk ditemukan
          if (!$rekomen) {
              return redirect()->route('reko.index')->with('error', 'Product not found.');
          }
  
          // Lakukan penghapusan
          $rekomen->delete();
  
          // Redirect dengan pesan sukses
          return redirect()->route('reko.index')->with('success', 'Product deleted successfully.');
    }
}
