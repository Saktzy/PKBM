<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;

class AdminController extends Controller
{
    function index()
    {
        $data['list_admin'] = Admin::all();
        return view('content.admin.admin.index', $data);
    }
    function create()
    {
        return view('content.admin.admin.create');
    }
    function store()
    {
        $admin = new Admin();
        $admin->username = request('username');
        $admin->password = request('password');
        $admin->save();
        return redirect('admin/admin')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Admin $admin)
    {
        $admin->username = request('username');
        if (request('password')) $admin->password = request('password');
        $admin->save();

        return redirect('admin/admin')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect('admin/admin')->with('danger', 'Data Berhasil Dihapus');
    }
}
