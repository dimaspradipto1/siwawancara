<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalMahasiswa = Mahasiswa::count();
        $totalPenilaian = Penilaian::count();
        $totalUsers = User::count();
        $totalInterviewers = User::where('is_interviewer', 1)->count();
        $belumWawancara = Mahasiswa::doesntHave('penilaians')->count();

        return view('layouts.dashboard.index', compact(
            'totalMahasiswa',
            'totalPenilaian',
            'totalUsers',
            'totalInterviewers',
            'belumWawancara'
        ));
    }
}
