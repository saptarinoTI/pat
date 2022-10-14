<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasienController
{
    public function index()
    {
        if (Auth::user()->level == 'admin') {
            $pasien = Pasien::all();
        }
        if (Auth::user()->level == 'perawat') {
            $pasien = Pasien::all();
        }
        if (Auth::user()->level == 'pasien') {
            $id = Auth::user()->id;
            $pasien = Pasien::where('id', '=', $id)->get();
        }

        return view('admin.pasien.index', compact('pasien'));
    }

    public function create()
    {
        return view('admin.pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:pasien,id',
            'name' => 'required',
            'tempatlahir' => 'required',
            'tgllahir' => 'required|date',
            'jkelamin' => 'required',
            'alamat' => 'required',
            'telpon' => 'required|numeric',
            'hari' => 'required',
            'shift' => 'required',
            'keterangan' => 'required',
        ]);
        Pasien::create([
            'id' => $request->id,
            'user_id' => $request->id,
            'nama' => $request->name,
            'tempatlahir' => $request->tempatlahir,
            'tgllahir' => $request->tgllahir,
            'jkelamin' => $request->jkelamin,
            'alamat' => $request->alamat,
            'telpon' => $request->telpon,
            'hari' => $request->hari,
            'shift' => $request->shift,
            'keterangan' => $request->keterangan,
        ]);
        User::create([
            'id' => $request->id,
            'name' => $request->name,
            'password' => Hash::make('pasien'),
            'level' => 'pasien',
        ]);
        return redirect()->route('pasien.index')->with('pesan', 'Data Behasil Ditambahkan.');
    }

    public function show(int $id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('admin.pasien.show', compact('pasien'));
    }

    public function edit(int $id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('admin.pasien.edit', compact('pasien'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'tempatlahir' => 'required',
            'tgllahir' => 'required|date',
            'jkelamin' => 'required',
            'alamat' => 'required',
            'telpon' => 'required|numeric',
            'hari' => 'required',
            'shift' => 'required',
            'keterangan' => 'required',
        ]);
        $pasien = Pasien::findOrFail($id);
        $pasien->nama = $request->name;
        $pasien->tempatlahir = $request->tempatlahir;
        $pasien->tgllahir = $request->tgllahir;
        $pasien->jkelamin = $request->jkelamin;
        $pasien->alamat = $request->alamat;
        $pasien->telpon = $request->telpon;
        $pasien->hari = $request->hari;
        $pasien->shift = $request->shift;
        $pasien->keterangan = $request->keterangan;
        $pasien->save();
        return redirect()->route('pasien.index')->with('pesan', 'Data Berhasil Dirubah!');
    }

    public function destroy(int $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('pasien.index')->with('pesan', 'Data Berhasil Dihapus!');
    }
}
