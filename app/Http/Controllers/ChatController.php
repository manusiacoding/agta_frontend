<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Multipart;
use App\Models\Chat;

class ChatController extends Controller
{
    public function storeText(Request $request){
        $result = Chat::create([
            'id_pengirim' => auth()->user()->id_user,
            'id_penerima' => 0,
            'pesan' => $request->pesan
        ]);
    }

    public function storeImage(Request $request){
        $result = Chat::create([
            'id_pengirim' => auth()->user()->id_user,
            'id_penerima' => 0,
            'tipe' => 1,
            'pesan' => Multipart::imageUpload($request->pesan_gambar)
        ]);
        return response()->json($result['pesan'], 200);
    }
}
