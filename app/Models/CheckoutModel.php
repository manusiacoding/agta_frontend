<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CheckoutModel extends Model {

    // use HasFactory;

    // public function joinTable($id) {
        
    //     $datas = DB::table('products')
    //                     ->join('tbl_transaksi', 'tbl_transaksi.id_transaksi', '=', 'tbl_transaksi.id_transaksi')
    //                     ->where('products.id_produk', $id)->get();
                        
    //     $datas = DB::table('tbl_transaksi')
    //                     ->join('products', 'products.id_produk', '=', 'products.id_produk')
    //                     ->where('tbl_transaksi.id_transaksi', $id)->get();
                        
    //     return $datas;
                        
    // }

}