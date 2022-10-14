<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Traveling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TravelingController
{
    public function index()
    {
        if (Auth::user()->level == 'admin') {
            $traveling = Traveling::all();
        }
        if (Auth::user()->level == 'perawat') {
            $traveling = Traveling::all();
        }
        if (Auth::user()->level == 'pasien') {
            $id = Auth::user()->id;
            $traveling = Traveling::where('pasien_id', '=', $id)->get();
        }
        return view('admin.traveling.index', compact('traveling'));
    }

    public function create()
    {
        $pasien = Pasien::all();
        return view('admin.traveling.create', compact('pasien'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "pasien_id" => "required|numeric",
            "asal_hd" => "required",
            "tujuan_hd" => "required",
            "diagnosa" => "required",
            "pertama" => "required|date",
            "terakhir" => "required|date",
            "frekuensi" => "required",
            "mesin" => "required",
            "dialisat" => "required",
            "aliran_dialisat" => "required",
            "aliran_darah" => "required",
            "lama" => "required",
            "heparinisasi" => "required",
            "akses_faskuler" => "required",
            "hbsag" => "required",
            "antihcv" => "required",
            "antihiv" => "required",
            "tglceklab" => "required|date",
            "beratbadan_akhir" => "required",
            "tekanan_darah" => "required",
            "obat" => "required",
            "tranfusi_terakhir" => "required",
            "goldar" => "required",
        ]);
        Traveling::create($request->all());
        return redirect()->route('traveling.index')->with('pesan', 'Data Behasil Ditambahkan.');
    }

    public function show(int $id)
    {
        $tra = Traveling::findOrFail($id);
        return view('admin.traveling.show', compact('tra'));
    }

    public function edit(int $id)
    {
        $tra = Traveling::findOrFail($id);
        return view('admin.traveling.edit', compact('tra'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            "pasien_id" => "required|numeric",
            "asal_hd" => "required",
            "tujuan_hd" => "required",
            "diagnosa" => "required",
            "pertama" => "required|date",
            "terakhir" => "required|date",
            "frekuensi" => "required",
            "mesin" => "required",
            "dialisat" => "required",
            "aliran_dialisat" => "required",
            "aliran_darah" => "required",
            "lama" => "required",
            "heparinisasi" => "required",
            "akses_faskuler" => "required",
            "hbsag" => "required",
            "antihcv" => "required",
            "antihiv" => "required",
            "tglceklab" => "required|date",
            "beratbadan_akhir" => "required",
            "tekanan_darah" => "required",
            "obat" => "required",
            "tranfusi_terakhir" => "required",
            "goldar" => "required",
        ]);
        $tra = Traveling::findOrFail($id);
        $tra->update($request->all());
        return redirect()->route('traveling.index')->with('pesan', 'Data Behasil Dirubah.');
    }

    public function destroy(int $id)
    {
        $tra = Traveling::findOrFail($id);
        $tra->delete();
        return redirect()->route('traveling.index')->with('pesan', 'Data Behasil Dihapuskan.');
    }
}
