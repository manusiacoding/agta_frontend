<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Product;
use App\Models\HomeModel;
use App\Models\ModelProduct;
use App\Models\TransactionDetail;

class HomeController extends Controller {

    public function __construct() {
        $this->HomeModel = new HomeModel();
    }

    public function index(){
        $products = Product::latest()->get();
        foreach ($products as $product) {
            $product['harga_produk_rp'] = number_format($product['harga_produk']);
            $product['model_produk'] = ModelProduct::whereIdProduk($product->id_produk)->first();
            $product['array_model_produk'] = ModelProduct::whereIdProduk($product->id_produk)->latest()->get();
        }

        $banners = Banner::latest()->get();
        foreach ($banners as $banner) {
            $banner['produk'] = Product::find($banner->id_produk);
        }

        return view('home.index', [
            'banners' => $banners,
            'products' => $products
        ]);
    }
}
