<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;

class GuruController extends Controller
{
    function index()
    {
        $data['list_guru'] = Guru::all();
        return view('content.admin.guru.index', $data);
    }
    function create()
    {
        return view('content.admin.guru.create');
    }
    function store()
    {
        $guru = new Guru();
        $guru->nip = request('nip');
        $guru->password = request('password');
        $guru->save();
        return redirect('admin/guru')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Guru $guru)
    {
        $guru->nip = request('nip');
        if (request('password')) $guru->password = request('password');
        $guru->save();

        return redirect('admin/guru')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect('admin/guru')->with('danger', 'Data Berhasil Dihapus');
    }
}
