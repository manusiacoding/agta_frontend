<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Multipart;
use App\Models\Setting;
use App\Models\User;
use App\Models\Product;
use App\Models\Transaction;
use App\Service\RajaOngkir;
use App\Models\ModelProduct;
use App\Models\TransactionDetail;

class CartController extends Controller
{
    public function index(){
        if(auth()->check()){
            $transaction_details = TransactionDetail::whereIdUser(auth()->user()->id_user)->whereNull('id_transaksi')->get();

            if(count($transaction_details) > 0){
                $admin = User::whereEmail('admin@agta.com')->first();
                $data = [
                    'origin' => $admin->id_subdistrict,
                    'originType' => 'subdistrict',
                    'destination' => auth()->user()->id_subdistrict,
                    'destinationType' => 'subdistrict',
                    'weight' => TransactionDetail::whereIdUser(auth()->user()->id_user)->whereNull('id_transaksi')->sum('total_berat_produk'),
                    'courier' => 'jne:wahana:jnt:lion:anteraja',
                ];
                $shippings = RajaOngkir::checkOngkir($data);
                $total_harga = TransactionDetail::whereIdUser(auth()->user()->id_user)->whereNull('id_transaksi')->sum('total_harga');
                foreach($transaction_details as $td){
                    $td['produk'] = Product::find($td->id_produk);
                    $td['model_produk'] = ModelProduct::find($td->id_model_produk);
                }
            }

            return view('home.cart', [
                'transaction_details' => $transaction_details,
                'shippings' => $shippings ?? null,
                'total_harga' => $total_harga ?? null,
                'setting' => Setting::first()
            ]);
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }

    public function update(Request $request){
        if(auth()->check()){
            $data = $request->all();
            foreach ($data['id_model_produk'] as $key => $id_model_produk) {
                $model_produk = ModelProduct::find($id_model_produk);
                $produk = Product::find($model_produk->id_produk);
                $transaction_detail = TransactionDetail::whereIdUser(auth()->user()->id_user)->whereNull('id_transaksi')->whereIdModelProduk($id_model_produk)->first();
                $transaction_detail->update([
                    // 'nama_produk' => $produk->nama_produk,
                    'nama_model' => $model_produk->nama_model,
                    'ukuran_produk' => $model_produk->ukuran_produk,
                    'berat_produk' => $model_produk->berat_produk,
                    'total_berat_produk' => $model_produk->berat_produk * $data['jumlah_model_produk'][$key],
                    'gambar_produk' => $model_produk->gambar_produk,
                    'harga_produk' => $produk->harga_produk,
                    'jumlah_produk' => $data['jumlah_model_produk'][$key],
                    'total_harga' => $produk->harga_produk * $data['jumlah_model_produk'][$key]
                ]);
            }
            return redirect()->route('cart')->with('success', 'Berhasil mengubah data');
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }

    public function checkout(Request $request){
        if(auth()->check()){
            $data = $request->all();
            $data['pengiriman'] = explode(',', $data['pengiriman']);
            $admin = User::whereEmail('admin@agta.com')->first();

            $transaction = Transaction::create([
                'id_user' => auth()->user()->id_user,
                'id_province' => auth()->user()->id_province,
                'id_city' => auth()->user()->id_city,
                'id_subdistrict' => auth()->user()->id_subdistrict,
                'alamat' => auth()->user()->address,

                'shipping_origin' => $admin->id_subdistrict,
                'shipping_originType' => 'subdistrict',
                'shipping_destination' => auth()->user()->id_subdistrict,
                'shipping_destinationType' => 'subdistrict',
                'shipping_weight' => TransactionDetail::whereIdUser(auth()->user()->id_user)->whereNull('id_transaksi')->sum('total_berat_produk'),
                'shipping_courier' => $data['pengiriman'][0],
                'shipping_courier_name' => $data['pengiriman'][1],
                'shipping_service' => $data['pengiriman'][2],
                'shipping_description' => $data['pengiriman'][3],
                'shipping_value' => $data['pengiriman'][4],
                'shipping_etd' => $data['pengiriman'][5],
                'shipping_note' => $data['pengiriman'][6],

                'total_berat' => TransactionDetail::whereIdUser(auth()->user()->id_user)->whereNull('id_transaksi')->sum('total_berat_produk'),
                'total_harga' => TransactionDetail::whereIdUser(auth()->user()->id_user)->whereNull('id_transaksi')->sum('total_harga')+$data['pengiriman'][4],
                'bukti_transfer' => Multipart::imageUpload($request->bukti_transfer)
            ]);
            TransactionDetail::whereIdUser(auth()->user()->id_user)->whereNull('id_transaksi')->update([
                'id_transaksi' => $transaction->id_transaksi
            ]);
            return redirect()->route('order')->with('success', 'Berhasil menambah data');;
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }

    public function delete($id){
        if(auth()->check()){
            TransactionDetail::find($id)->delete();
            return redirect()->route('cart')->with('success', 'Berhasil menghapus data');
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }
}
