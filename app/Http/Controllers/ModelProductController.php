<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelProduct;

class ModelProductController extends Controller {

    public function __construct() {
        $this->ModelProduct = new ModelProduct();
    }

    public function index() {
        if(auth()->check()){
            $data = [
                'modelproducts' => $this->ModelProduct->allData(),
            ];
            return view('product.shop', $data);
        }else{
            return redirect('login')->with('failed', 'Silahkan login terlebih dahulu');
        }
    }

}
