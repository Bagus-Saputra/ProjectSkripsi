<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index(){
        $products = Produk::select('nama_batik', 'gambar', 'harga', 'deskripsi')->paginate(12);
        return view('home', compact('products'));
        // return view('home');
    }

    public function produkk(){
        $products = Produk::select('nama_batik', 'gambar', 'harga', 'deskripsi')->paginate(10);
        return view('produk', compact('products'));
        // return view('produk');
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
        //
    }
}
