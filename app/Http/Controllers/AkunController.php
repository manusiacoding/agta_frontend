<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AkunController extends Controller
{
    public function index(Request $request){
        if(auth()->check()){
            return view('home.akun', [
                'provinces' => \DB::table('province')->get(),
                'citys' => \DB::table('city')->whereProvinceId(auth()->user()->id_province)->get(),
                'subdistricts' => \DB::table('subdistrict')->whereCityId(auth()->user()->id_city)->get(),
            ]);
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }

    public function update(Request $request){
        if(auth()->check()){
            $data = $request->all();
            $data['password'] = $request->password ? bcrypt($request->password) : auth()->user()->password;
            User::find(auth()->user()->id_user)->update($data);
            return redirect()->back()->with('success', 'Berhasil mengubah data');
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }
}
