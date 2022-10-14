<?php

namespace App\Http\Controllers;

use App\Models\Dialisis;
use App\Models\Pasien;
use App\Models\Traveling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        if (Auth::user()->level == 'admin' or Auth::user()->level == 'perawat') {
            $pasien = Pasien::get();
            $traveling = Traveling::get();
            $dialisis = Dialisis::get();
            return view('admin.home.index', compact('pasien', 'traveling', 'dialisis'));
        }
        if (Auth::user()->level == 'pasien') {
            $id = Auth::user()->id;
            $dialisis = Dialisis::where('pasien_id', '=', $id)->get();
            return view('admin.home.index', compact('dialisis'));
        }
    }
}
