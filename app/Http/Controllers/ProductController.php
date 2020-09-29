<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public function showProducts($slug)
    // {
    //     $data = Product::where('product_slug', $slug)->first();
    //     // dd($data);
    //     return view('product', compact('data'));
    // }

    public function show()
    {
        $data = Product::get();
        // dd($data);

        return view('product', compact('data'));
    }

    public function edit($id)
    {
        // mengambil data product berdasarkan id yang dipilih
        $data = Product::where('product_id', $id)->first();
        // passing data produk yang didapat ke view edit.blade.php
        return view('edit', compact('data'));
    }

    public function update(Request $request)
    {
        // validasi form
        $this->validate($request, [
            'product_title' => 'required',
            'product_slug' => 'required',
            'product_image' => 'required',
        ]);

        Product::where('product_id', $request->id)->update([
            'product_title' => $request->product_title,
            'product_slug' => $request->product_slug,
            'product_image' => $request->product_image,
        ]);

        return redirect('/product')->with('status', 'Data berhasil Diubah');
    }
}
