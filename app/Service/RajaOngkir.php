<?php

namespace App\Service;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use App\Models\Transaction;
use GuzzleHttp\Exception\RequestException;

class RajaOngkir
{
    public static function checkOngkir($data)
    {
        try {
            $client = new Client();
            $url = env('RAJA_ONGKIR_URL').'/cost';

            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Key' => env('RAJA_ONGKIR_API_KEY')
            ];

            $params= [
                'headers' => $headers,
                'form_params' => $data,
            ];

            $response = $client->request('POST', $url, $params);
            $body = json_decode($response->getBody(), true);

            return $body;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public static function updateDeliveryOrderStatus(){
        foreach (Transaction::whereNotNull('no_resi')->where('shipping_courier', '!=', ['agtas','agtac'])->whereStatus(2)->get() as $transaction) {
            try {
                $client = new Client();
                $url = env('RAJA_ONGKIR_URL').'/waybill';

                $headers = [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Key' => env('RAJA_ONGKIR_API_KEY')
                ];

                $params= [
                    'headers' => $headers,
                    'form_params' => [
                        'waybill' => $transaction->no_resi,
                        'courier' => $transaction->shipping_courier == 'J&T' ? 'jnt' : $transaction->shipping_courier
                    ],
                ];

                $response = $client->request('POST', $url, $params);
                $body = json_decode($response->getBody(), true);

                if($body['rajaongkir']['result']['delivered'] == true){
                    $transaction->update([
                        'status' => 3
                    ]);
                }

                $transaction->update([
                    'delivery_status' => json_encode($body)
                ]);
            } catch (\Throwable $th) {
                $th->getMessage();
            }
        }
    }
}
