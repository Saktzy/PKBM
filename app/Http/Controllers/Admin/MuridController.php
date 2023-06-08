<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Murid;

class MuridController extends Controller
{
    function index()
    {
        $data['list_murid'] = Murid::all();
        return view('content.admin.murid.index', $data);
    }
    function create()
    {
        return view('content.admin.murid.create');
    }
    function store()
    {
        $murid = new Murid();
        $murid->nim = request('nim');
        $murid->password = request('password');
        $murid->save();
        return redirect('admin/murid')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Murid $murid)
    {
        $murid->nim = request('nim');
        if (request('password')) $murid->password = request('password');
        $murid->save();

        return redirect('admin/murid')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Murid $murid)
    {
        $murid->delete();

        return redirect('admin/murid')->with('danger', 'Data Berhasil Dihapus');
    }
}
