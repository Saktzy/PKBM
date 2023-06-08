<?php

namespace App\Http\Controllers\Admin;

use App\Models\Beranda;
use App\Http\Controllers\Controller;

class BerandaAdminController extends Controller
{
    function index()
    {
        $data['list_beranda'] = Beranda::all();
        return view('content.admin.beranda.index', $data);
    }
    function create()
    {
        return view('content.admin.beranda.create');
    }
    function store()
    {
        $beranda = new Beranda();
        $beranda->nama = request('nama');
        $beranda->deskripsi = request('deskripsi');
        $beranda->save();
        $beranda->handleUploadFoto();
        return redirect('admin/beranda');
    }
    function update(Beranda $beranda)
    {
        $beranda->nama = request('nama');
        $beranda->deskripsi = request('deskripsi');
        $beranda->save();
        if (request('foto')) $beranda->handleUploadFoto();

        return redirect('admin/beranda');
    }
    function destroy(Beranda $beranda)
    {
        $beranda->delete();
        $beranda->handleDelete();

        return redirect('admin/beranda');
    }
}
