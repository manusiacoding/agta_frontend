<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CheckoutModel;

class CheckoutController extends Controller {

    public function __construct() {
        $this->CheckoutModel = new CheckoutModel();
    }

    public function checkout() {
        if(auth()->check()){
            return view('transaction.checkout');
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }
}
