<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekomendasi;
use App\Models\Produk;

class HalPesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reqrekomendasi');
    }

    public function hasil()
    {
        $products = Produk::select('nama_batik', 'gambar', 'harga', 'deskripsi')->paginate(12);
        return view('hasilrek', compact('products'));
        // return view('hasilrek');
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
    $validatedData = $request->validate([
        'nama_pelanggan' => 'required|string|max:255',
        'jenis_batik' => 'required|string|max:255',
        'warna' => 'required|string|max:255',
        'bahan' => 'required|string|max:255',
        'kualitas' => 'required|string|max:255',
        'harga' => 'required|integer',
    ]);

    // Store the input data
    $rekomendasi = Rekomendasi::create($validatedData);

    // Get the price range from products
    $minPrice = Produk::min('harga');
    $maxPrice = Produk::max('harga');

    // Calculate similarity
    $products = Produk::all();
    $recommendedProducts = $products->filter(function ($product) use ($rekomendasi, $minPrice, $maxPrice) {
        // Exclude products with a price higher than the customer's input price
        if ($product->harga > $rekomendasi->harga) {
            return false;
        }

        $similarity = 0;

        // Calculate attribute similarities
        $similarity += 0.22 * ($product->jenis_batik == $rekomendasi->jenis_batik ? 1 : 0);
        $similarity += 0.15 * ($product->warna == $rekomendasi->warna ? 1 : 0);
        $similarity += 0.22 * ($product->bahan == $rekomendasi->bahan ? 1 : 0);
        $similarity += 0.05 * ($product->kualitas == $rekomendasi->kualitas ? 1 : 0);

        // Calculate price similarity
        $priceDifference = abs($product->harga - $rekomendasi->harga);
        $priceSimilarity = 1 - $priceDifference / ($maxPrice - $minPrice);
        $similarity += 0.36 * $priceSimilarity;

        $product->similarity = $similarity * 100; // convert to percentage

        return true;
    })->filter(function ($product) {
        return $product->similarity >= 60;
    })->sortByDesc('similarity');

    // If no products meet the criteria, return back with an error message
    if ($recommendedProducts->isEmpty()) {
        return back()->withErrors(['No products found that match the criteria. Please try again with different inputs.'])->withInput();
    }

    // Pass the recommended products to the results view
    return view('hasilrek', ['products' => $recommendedProducts]);
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
