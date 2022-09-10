<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegisterController extends Controller {

    public function show() {
        return view('auth.register', [
            'provinces' => \DB::table('province')->get()
        ]);
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request) {
        $data = $request->all();

        if(User::whereEmail($data['email'])->first()){
            return redirect()->back()->withInput($request->all())->with('failed', 'Email sudah digunakan');
        }
        if(User::whereUsername($data['username'])->first()){
            return redirect()->back()->withInput($request->all())->with('failed', 'Username sudah digunakan');
        }

        $user = User::create($data);
        auth()->login($user);
        return redirect('/')->with('success', "Akun berhasil didaftarkan");
    }

}
