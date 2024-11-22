<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukDataController extends Controller
{
    public function index(){

        $product = Produk::all();
        return view('back.dataproduk', compact('product'));
    }
    
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'nama_batik' => 'required|string|max:255',
            'jenis_batik' => 'required|string|max:255',
            'warna' => 'required|string|max:255',
            'bahan' => 'required|string|max:255',
            'kualitas' => 'required|string|max:255',
            'harga' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);
    
        // Debugging
        \Log::info($request->all());
    
        $product = new Produk();
        $product->nama_batik = $request->nama_batik;
        $product->jenis_batik = $request->jenis_batik;
        $product->warna = $request->warna;
        $product->bahan = $request->bahan;
        $product->kualitas = $request->kualitas;
        $product->harga = $request->harga;
        $product->deskripsi = $request->deskripsi;
    
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/product'), $imageName);
            $product->gambar = $imageName;
        }
    
        $product->save();
    
        \Log::info('Product saved: ' . $product->id);
    
        session()->flash('alert', 'success');
        session()->flash('message', 'Produk berhasil ditambahkan');
        return redirect()->route('product.index');
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
        $request->validate([
            'nama_batik' => 'required|string|max:255',
            'jenis_batik' => 'required|string|max:255',
            'warna' => 'required|string|max:255',
            'bahan' => 'required|string|max:255',
            'kualitas' => 'required|string|max:255',
            'harga' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);
    
        $product = Produk::findOrFail($id);
        $product->nama_batik = $request->nama_batik;
        $product->jenis_batik = $request->jenis_batik;
        $product->warna = $request->warna;
        $product->bahan = $request->bahan;
        $product->kualitas = $request->kualitas;
        $product->harga = $request->harga;
        $product->deskripsi = $request->deskripsi;
    
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/product'), $imageName);
            $product->gambar = $imageName;
        }
    
        $product->save();
    
        return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Temukan produk berdasarkan ID
        $product = Produk::find($id);

        // Periksa apakah produk ditemukan
        if (!$product) {
            session()->flash('alert', 'error');
            session()->flash('message', 'Produk gagal dihapus');
            return redirect()->route('product.index');
        }

        // Lakukan penghapusan
        $product->delete();

        // Redirect dengan pesan sukses
    

        session()->flash('alert', 'success');
        session()->flash('message', 'Produk berhasil dihapus');
        return redirect()->route('product.index');
    }
}
