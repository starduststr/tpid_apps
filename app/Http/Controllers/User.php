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
        $transaksi = $this->api->transaksi(1,$request->id_user,false,'lunas');
        $data = [
            'title' => 'Dashboard',
            'address' => 'dashboard',
            'transaksi' => $transaksi
        ];
        
        return view('users/dashboard', $data);
    }
}
