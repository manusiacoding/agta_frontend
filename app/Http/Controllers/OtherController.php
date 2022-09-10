<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\Product;
use App\Models\ModelProduct;
use App\Models\TransactionDetail;

class OtherController extends Controller
{
    public function info(){
        // if(auth()->check()){
            return view('home.info', [
                'setting' => Setting::first()
            ]);
        // }else{
        //     return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        // }
    }

    public function blog(){
        // if(auth()->check()){
            return view('home.blog', [
                'blogs' => Blog::latest()->get()
            ]);
        // }else{
        //     return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        // }
    }

    public function rating(){
        // if(auth()->check()){
            $ratings = TransactionDetail::whereNotNull('id_transaksi')->whereStatusRating(true)->latest()->get();
            foreach($ratings as $rating){
                $rating['user'] = User::find($rating->id_user);
                $rating['produk'] = Product::find($rating->id_produk);
                $rating['model_produk'] = ModelProduct::find($rating->id_model_produk);
            }
            return view('home.rating', [
                'ratings' => $ratings
            ]);
        // }else{
        //     return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        // }
    }

    public function city($province_id){
        return response()->json(\DB::table('city')->whereProvinceId($province_id)->get(), 200);
    }

    public function subdistrict($city_id){
        return response()->json(\DB::table('subdistrict')->whereCityId($city_id)->get(), 200);
    }
}
