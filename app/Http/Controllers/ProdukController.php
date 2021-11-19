<?php

namespace App\Http\Controllers;

use App\Models\produk_model as ModelsProduk_model;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {

        $getproduk = ModelsProduk_model::all();

        return view('balajar_database.product', [
            'produk' => $getproduk
        ]);
    }

    public function destroy($id)
    {
        $getProduk = ModelsProduk_model::find($id);
        $getProduk->delete();
        return back();
    }
}
