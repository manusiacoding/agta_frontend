<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;
use App\Models\Province;
use App\Models\City;
use App\Models\Subdistrict;
use App\Models\Transaction;
use App\Models\ModelProduct;
use App\Models\TransactionDetail;

class OrderController extends Controller
{
    public function index(){
        if(auth()->check()){

        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }

        $transactions = Transaction::whereIdUser(auth()->user()->id_user)->latest()->get();
        foreach ($transactions as $transaction) {
            $transaction['user'] = User::find($transaction->id_user);
            $transaction['subdisctrict'] = \DB::table('subdistrict')->find($transaction->id_subdistrict)->subdistrict;
            $transaction['city'] = \DB::table('city')->find($transaction->id_city)->city;
            $transaction['province'] = \DB::table('province')->find($transaction->id_province)->province;
            $transaction['detail'] = TransactionDetail::whereIdTransaksi($transaction->id_transaksi)->get();
            $transaction['total_harga_produk'] = TransactionDetail::whereIdTransaksi($transaction->id_transaksi)->sum('total_harga');
            foreach ($transaction['detail'] as $detail) {
                $detail['produk'] = Product::find($detail->id_produk);
                $detail['model_produk'] = ModelProduct::find($detail->id_model_produk);
            }
        }
        return view('home.order', [
            'transactions' => $transactions
        ]);
    }

    public function cancel($id){
        if(auth()->check()){
            Transaction::find($id)->update([
                'status' => 4
            ]);
            return redirect()->route('order')->with('success', 'Berhasil mengubah data');
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }

    public function rating(Request $request){
        if(auth()->check()){
            $data = $request->all();
            $transaksi_detail = TransactionDetail::find($data['id_transaksi_detail']);
            $transaksi_detail->update([
                'status_rating' => true,
                'bintang_rating' => $data['bintang'],
                'deskripsi_rating' => $data['deskripsi']
            ]);
            if(TransactionDetail::whereIdTransaksi($transaksi_detail->id_transaksi)->whereStatusRating(false)->first() == null){
                Transaction::find($transaksi_detail->id_transaksi)->update([
                    'status' => 4
                ]);
            }
            return redirect()->route('order')->with('success', 'Berhasil mengubah data');
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }
}
