<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController
{
    public function index()
    {
        $users = User::where('level', 'admin')
            ->orWhere('level', 'perawat')
            ->get();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:users,id',
            'name' => 'required',
            'password' => 'required',
            'level' => 'required|in:admin,perawat,pasien',
        ]);
        User::create([
            'id' => $request->id,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);
        return redirect()->route('users.index')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function show(int $id)
    {
    }

    public function edit(int $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'level' => 'required|in:admin,perawat,pasien',
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->level = $request->level;
        $user->save();
        return redirect()->route('users.index')->with('pesan', 'Data Berhasil Dirubah!');
    }

    public function destroy(int $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('pesan', 'Data Berhasil Dihapus!');
    }
}
