<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api;

class User extends Controller
{
    protected $api;

    public function __construct()
    {
        $this->api = new Api;
    }

    public function dashboard(Request $request)
    {
        // $transaksi = $this->api->transaksi(1,$request->id_user,false,'lunas');
        $data = [
            'title' => 'Dashboard',
            'address' => 'dashboard',
            
        ];

        return view('users/dashboard', $data);
    }

    public function getTransaksi(Request $request)
    {
        // dd($request);
        $transaksi = $this->api->transaksi($request->page,$request->id_user,$request->email_user,$request->filter_status);

        return $transaksi;
    }

    public function kategori()
    {
        return $this->api->kategori();
    }

    public function pulsa()
    {
        $data = [
            'title' => 'Pulsa',            
        ];

        return view('users/pulsa', $data);
    }
}
