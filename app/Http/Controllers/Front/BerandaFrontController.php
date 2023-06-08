<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Beranda;
use App\Models\Jelajah;

class BerandaFrontController extends Controller
{
    function showBeranda()
    {
        $data['list_beranda'] = Beranda::all();
        return view('content.front.home', $data);
    }

    function showJelajah()
    {
        $data['list_jelajah'] = Jelajah::latest()->paginate(1);
        return view('content.front.jelajah', $data);
    }
}
