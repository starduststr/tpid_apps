<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api;
use Illuminate\Support\Arr;

class Produk extends Controller
{
    protected $api;

    public function __construct()
    {
        $this->api = new Api;
    }

    public function produk(Request $request)
    {
        $data = [
            'data' => $this->api->produk(2)
        ];
        // dd(array_merge(['page'=>1], ['data'=>2]));
        return view('users/produk',$data);
    }
}
