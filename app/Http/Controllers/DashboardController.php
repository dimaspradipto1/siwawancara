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
        $penilaian = Penilaian::count();
        $mahasiswa = Mahasiswa::count();
        $user = User::count();
        $interviewer = User::where('is_interviewer', 1)->count();
        return view('layouts.dashboard.index', compact('penilaian', 'mahasiswa', 'user', 'interviewer'));
    }
}
