<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\ModelProduct;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class ProductController extends Controller {

    public function index(Request $request, $kategori, $urutkan, $keyword){
        if(auth()->check()){
            $data_kategori = $request->kategori ?? $kategori;
            $data_urutkan = $request->urutkan ?? $urutkan;
            $data_keyword = $request->keyword ?? $keyword;

            if($data_keyword != 'null'){
                if($data_kategori == 'Semua'){
                    if($data_urutkan == 'Terbaru'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->orderBy('id_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Terlama'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->orderBy('id_produk', 'DESC')->get();
                    }else if($data_urutkan == 'Harga Terendah'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->orderBy('harga_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Harga Tertinggi'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->orderBy('harga_produk', 'DESC')->get();
                    }else if($data_urutkan == 'Nama Produk (A-Z)'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->orderBy('nama_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Nama Produk (Z-A)'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->orderBy('nama_produk', 'DESC')->get();
                    }
                }else{
                    if($data_urutkan == 'Terbaru'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->whereJenisProduk($data_kategori)->orderBy('id_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Terlama'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->whereJenisProduk($data_kategori)->orderBy('id_produk', 'DESC')->get();
                    }else if($data_urutkan == 'Harga Terendah'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->whereJenisProduk($data_kategori)->orderBy('harga_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Harga Tertinggi'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->whereJenisProduk($data_kategori)->orderBy('harga_produk', 'DESC')->get();
                    }else if($data_urutkan == 'Nama Produk (A-Z)'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->whereJenisProduk($data_kategori)->orderBy('nama_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Nama Produk (Z-A)'){
                        $products = Product::Where('nama_produk', 'like', '%' . $data_keyword . '%')->whereJenisProduk($data_kategori)->orderBy('nama_produk', 'DESC')->get();
                    }
                }
            }else{
                if($data_kategori == 'Semua'){
                    if($data_urutkan == 'Terbaru'){
                        $products = Product::orderBy('id_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Terlama'){
                        $products = Product::orderBy('id_produk', 'DESC')->get();
                    }else if($data_urutkan == 'Harga Terendah'){
                        $products = Product::orderBy('harga_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Harga Tertinggi'){
                        $products = Product::orderBy('harga_produk', 'DESC')->get();
                    }else if($data_urutkan == 'Nama Produk (A-Z)'){
                        $products = Product::orderBy('nama_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Nama Produk (Z-A)'){
                        $products = Product::orderBy('nama_produk', 'DESC')->get();
                    }
                }else{
                    if($data_urutkan == 'Terbaru'){
                        $products = Product::whereJenisProduk($data_kategori)->orderBy('id_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Terlama'){
                        $products = Product::whereJenisProduk($data_kategori)->orderBy('id_produk', 'DESC')->get();
                    }else if($data_urutkan == 'Harga Terendah'){
                        $products = Product::whereJenisProduk($data_kategori)->orderBy('harga_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Harga Tertinggi'){
                        $products = Product::whereJenisProduk($data_kategori)->orderBy('harga_produk', 'DESC')->get();
                    }else if($data_urutkan == 'Nama Produk (A-Z)'){
                        $products = Product::whereJenisProduk($data_kategori)->orderBy('nama_produk', 'ASC')->get();
                    }else if($data_urutkan == 'Nama Produk (Z-A)'){
                        $products = Product::whereJenisProduk($data_kategori)->orderBy('nama_produk', 'DESC')->get();
                    }
                }
            }

            foreach ($products as $product) {
                $product['harga_produk_rp'] = number_format($product['harga_produk']);
                $product['model_produk'] = ModelProduct::whereIdProduk($product->id_produk)->first();
                $product['array_model_produk'] = ModelProduct::whereIdProduk($product->id_produk)->latest()->get();
            }

            return view('home.product', [
                'products' => $products,
                'kategori' => $data_kategori,
                'urutkan' => $data_urutkan,
                'keyword' => $data_keyword
            ]);
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }

    public function detail($slug){
        if(auth()->check()){
            $item = Product::whereSlug($slug)->first();
            $item['model_produk'] = ModelProduct::whereIdProduk($item->id_produk)->get();
            return view('home.product-detail', [
                'item' => $item
            ]);
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }

    public function addToCart(Request $request){
        if(auth()->check()){
            $data = $request->all();
            $jumlah = array_map('intval', explode(',', implode(',', $data['jumlah'])));
            if(array_sum($jumlah) == 0){
                return redirect()->back();
            }
            foreach ($data['id_model'] as $key => $id_model) {
                if($data['jumlah'][$key] != 0){
                    $model_produk = ModelProduct::find($id_model);
                    $produk = Product::find($model_produk->id_produk);
                    $transaction_detail = TransactionDetail::whereNull('id_transaksi')->whereIdUser(auth()->user()->id_user)->whereIdProduk($produk->id_produk)->whereIdModelProduk($id_model)->first();
                    if($transaction_detail){
                        $transaction_detail->update([
                            // 'nama_produk' => $data['jumlah'][$key] == 0 ? $transaction_detail->nama_produk : $produk->nama_produk,
                            'nama_model' => $data['jumlah'][$key] == 0 ? $transaction_detail->nama_model : $model_produk->nama_model,
                            'ukuran_produk' => $data['jumlah'][$key] == 0 ? $transaction_detail->ukuran_produk : $model_produk->ukuran_produk,
                            'berat_produk' => $data['jumlah'][$key] == 0 ? $transaction_detail->berat_produk : $model_produk->berat_produk,
                            'total_berat_produk' => $data['jumlah'][$key] == 0 ? $transaction_detail->total_berat_produk : $model_produk->berat_produk * $data['jumlah'][$key],
                            'gambar_produk' => $data['jumlah'][$key] == 0 ? $transaction_detail->gambar_produk : $model_produk->gambar_produk,
                            'harga_produk' => $data['jumlah'][$key] == 0 ? $transaction_detail->harga_produk : $produk->harga_produk,
                            'jumlah_produk' => $data['jumlah'][$key] == 0 ? $transaction_detail->jumlah_produk : $data['jumlah'][$key],
                            'total_harga' => $data['jumlah'][$key] == 0 ? $transaction_detail->total_harga : $produk->harga_produk * $data['jumlah'][$key]
                        ]);
                    }else{
                        TransactionDetail::create([
                            // 'id_transaksi' => $transaction->id_transaksi,
                            'id_transaksi' => null,
                            'id_user' => auth()->user()->id_user,
                            'id_produk' => $produk->id_produk,
                            'id_model_produk' => $model_produk->id_model,
                            // 'nama_produk' => $produk->nama_produk,
                            'nama_model' => $model_produk->nama_model,
                            'ukuran_produk' => $model_produk->ukuran_produk,
                            'berat_produk' => $model_produk->berat_produk,
                            'total_berat_produk' => $model_produk->berat_produk * $data['jumlah'][$key],
                            'gambar_produk' => $model_produk->gambar_produk,
                            'harga_produk' => $produk->harga_produk,
                            'jumlah_produk' => $data['jumlah'][$key],
                            'total_harga' => $produk->harga_produk * $data['jumlah'][$key]
                        ]);
                    }
                }
            }
            return redirect('cart')->with('success', 'Berhasil menambah data');
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart() {
        if(auth()->check()){
            return view('transaction.cart-page');
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function addToCart($id_produk) {
    //     $product = Product::findOrFail($id_produk);

    //     $cart = session()->get('cart', []);

    //     if(isset($cart[$id_produk])) {
    //         $cart[$id_produk]['quantity']++;
    //     } else {
    //         $cart[$id_produk] = [
    //             "nama_produk" => $product->nama_produk,
    //             "quantity" => 1,
    //             "harga_produk" => $product->harga_produk,
    //             "deskripsi_produk" => $product->deskripsi_produk,
    //             "jenis_produk" => $product->jenis_produk
    //         ];
    //     }

    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Product added to cart successfully!');
    // }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function update(Request $request) {
    //     if($request->id_produk && $request->quantity){
    //         $cart = session()->get('cart');
    //         $cart[$request->id_produk]["quantity"] = $request->quantity;
    //         session()->put('cart', $cart);
    //         session()->flash('success', 'Cart updated successfully');
    //     }
    // }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function remove(Request $request) {
    //     if($request->id_produk) {
    //         $cart = session()->get('cart');
    //         if(isset($cart[$request->id_produk])) {
    //             unset($cart[$request->id_produk]);
    //             session()->put('cart', $cart);
    //         }
    //         session()->flash('success', 'Product removed successfully');
    //     }
    // }

}
