<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|unique:users,email',
            'telepon' => 'required|min:12',
            'alamat'  => 'required|string|max:100',
            'role'    => 'required|string|in:super-admin,kasir',
        ]);

        return redirect()->back()->with('success', 'Berhasil menambahkan user');
    }
}
