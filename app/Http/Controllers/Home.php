<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

class Home extends Controller
{
    public function index()
    {
        return view('home_page/index');
    }

    public function download()
    {
        return Storage::download('public/digitalpelajar.apk');
    }
}
