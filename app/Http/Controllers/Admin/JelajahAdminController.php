<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jelajah;
use App\Http\Controllers\Controller;

class JelajahAdminController extends Controller
{
    function index()
    {
        $data['list_jelajah'] = Jelajah::all();
        return view('content.admin.jelajah.index', $data);
    }
    function create()
    {
        return view('content.admin.jelajah.create');
    }
    function store()
    {
        $jelajah = new Jelajah();
        $jelajah->nama = request('nama');
        $jelajah->link = request('link');
        $jelajah->save();
        return redirect('admin/jelajah');
    }
    function update(Jelajah $jelajah)
    {
        $jelajah->nama = request('nama');
        $jelajah->link = request('link');
        $jelajah->save();
        return redirect('admin/jelajah');
    }
    function destroy(Jelajah $jelajah)
    {
        $jelajah->delete();

        return redirect('admin/jelajah');
    }
}
