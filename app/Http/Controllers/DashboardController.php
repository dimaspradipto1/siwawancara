<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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

        $months = collect(range(0, 5))
            ->map(fn ($offset) => Carbon::now()->subMonths($offset))
            ->reverse();

        $chartLabels = $months->map(fn (Carbon $month) => $month->format('M'))->all();
        $chartPenilaian = $months->map(fn (Carbon $month) => Penilaian::whereYear('created_at', $month->year)
            ->whereMonth('created_at', $month->month)
            ->count())->all();
        $chartMahasiswa = $months->map(fn (Carbon $month) => Mahasiswa::whereYear('created_at', $month->year)
            ->whereMonth('created_at', $month->month)
            ->count())->all();

        return view('layouts.dashboard.index', compact(
            'totalMahasiswa',
            'totalPenilaian',
            'totalUsers',
            'totalInterviewers',
            'belumWawancara',
            'chartLabels',
            'chartPenilaian',
            'chartMahasiswa'
        ));
    }
}
