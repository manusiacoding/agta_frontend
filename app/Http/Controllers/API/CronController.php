<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Service\RajaOngkir;

class CronController extends Controller
{
    public function rajaOngkirUpdateDeliveryOrderStatus(){
        return RajaOngkir::updateDeliveryOrderStatus();
    }
}
