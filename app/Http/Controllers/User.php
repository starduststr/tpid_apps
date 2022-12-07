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
        $data = [
            'title' => 'Dashboard',
            'address' => 'dashboard'
        ];
        dd($this->api->transaksi(1,$request->id_user,false,'lunas'));
        return view('users/dashboard', $data);
    }
}
