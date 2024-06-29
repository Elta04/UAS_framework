<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Karyawan;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard')->with([
            'totalKaryawan' => Karyawan::count(),
            'totalDokter' => Dokter::count(),
            'totalPasien' => Pasien::count(),
            'totalUser' => User::count(),
        ]);
    }
}
