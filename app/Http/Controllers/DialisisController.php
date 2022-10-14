<?php

namespace App\Http\Controllers;

use App\Models\Dialisis;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DialisisController
{
    public function otomatis($id)
    {
        $dt = Dialisis::where('pasien_id', $id)->latest('id')->first();
        if ($dt) {
            return response()->json([
                'data' => $dt->hd + 1
            ]);
        } else {
            return response()->json([
                'data' => 1
            ]);
        }
    }

    public function index()
    {
        if (Auth::user()->level == 'admin') {
            $dialisis = Dialisis::all();
        }
        if (Auth::user()->level == 'perawat') {
            $dialisis = Dialisis::all();
        }
        if (Auth::user()->level == 'pasien') {
            $id = Auth::user()->id;
            $dialisis = Dialisis::where('pasien_id', '=', $id)->get();
        }
        return view('admin.dialisis.index', compact('dialisis'));
    }

    public function create()
    {
        if (Auth::user()->level == 'admin' or Auth::user()->level == 'perawat') {
            $pasien = Pasien::all();
            $hdke = 1;
        }
        if (Auth::user()->level == 'pasien') {
            $pasien = Auth::user()->id;
            $dialisis = Dialisis::where('pasien_id', $pasien)->latest('id')->first();
            if ($dialisis) {
                $hdke = $dialisis->hd + 1;
            } else {
                $hdke = 1;
            }
        }
        return view('admin.dialisis.create', compact('pasien', 'hdke'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required',
            'tanggal' => 'required|date',
            'hd' => 'required',
            'hf' => 'required',
            'pre_beratbadan' => 'required',
            'post_beratbadan' => 'required',
            'pre_tdarah' => 'required',
            'post_tdarah' => 'required',
        ]);
        Dialisis::create($request->all());
        return redirect()->route('dialisis.index')->with('pesan', 'Data Behasil Ditambahkan.');
    }

    public function show(int $id)
    {
        $dia = Dialisis::findOrFail($id);
        return view('admin.dialisis.show', compact('dia'));
    }

    public function edit(int $id)
    {
        $dia = Dialisis::findOrFail($id);
        return view('admin.dialisis.edit', compact('dia'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'pasien_id' => 'required',
            'tanggal' => 'required|date',
            'hd' => 'required',
            'hf' => 'required',
            'pre_beratbadan' => 'required',
            'post_beratbadan' => 'required',
            'pre_tdarah' => 'required',
            'post_tdarah' => 'required',
        ]);
        $dia = Dialisis::findOrFail($id);
        $dia->update($request->all());
        return redirect()->route('dialisis.index')->with('pesan', 'Data Behasil Dirubah.');
    }

    public function destroy(int $id)
    {
        $dia = Dialisis::findOrFail($id);
        $dia->delete();
        return redirect()->route('dialisis.index')->with('pesan', 'Data Behasil Dihapus.');
    }
}
