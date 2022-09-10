<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show() {
        return view('auth.login');
    }

    /**
     * Handle account login request
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $user = User::whereUsername($request->username)->first();
        if (!Hash::check($request->password, $user->password ?? null)) {
            return redirect()->back()->withInput($request->all())->with('failed', 'Username atau password anda salah');
        }

        Auth::login($user);
        return $this->authenticated($request, $user);
    }

    /**
     * Handle response after user authenticated
     *
     * @param Request $request
     * @param Auth $user
     *
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }

}
