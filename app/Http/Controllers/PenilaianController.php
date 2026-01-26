<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use App\Exports\PenilaianExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\DataTables\PenilaianDataTable;
use RealRashid\SweetAlert\Facades\Alert;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PenilaianDataTable $dataTable)
    {
        return $dataTable->render('penilaian.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        return view('penilaian.create', compact('mahasiswas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'indikator1' => 'required|integer',
            'indikator2' => 'required|integer',
            'indikator3' => 'required|integer',
            'indikator4' => 'required|integer',
            'indikator5' => 'required|integer',
            'indikator6' => 'required|integer',
            'prestasi_akademik' => 'nullable|string',
            'nilai_keislaman' => 'nullable|string',
            'komentar_interviewer' => 'nullable|string',
        ]);

        // Cek apakah mahasiswa sudah pernah dinilai
        $existingPenilaian = Penilaian::where('mahasiswa_id', $validatedData['mahasiswa_id'])->first();

        if ($existingPenilaian) {
            Alert::error('Error', 'Mahasiswa dengan kode pendaftar ini sudah pernah dinilai!')
                ->autoclose(3000)
                ->toToast()
                ->timerProgressBar();
            return redirect()->back()->withInput();
        }

        // Menghitung total points
        $totalPoints = $validatedData['indikator1'] + $validatedData['indikator2'] + $validatedData['indikator3'] + $validatedData['indikator4'] + $validatedData['indikator5'] + $validatedData['indikator6'];

        // Menghitung nilai akhir (total points / 30 * 100)
        $nilaiAkhir = ($totalPoints / 30) * 100;

        // Menyimpan data penilaian ke database
        Penilaian::create([
            'user_id' => Auth::id(),
            'mahasiswa_id' => $validatedData['mahasiswa_id'],
            'indikator1' => $validatedData['indikator1'],
            'indikator2' => $validatedData['indikator2'],
            'indikator3' => $validatedData['indikator3'],
            'indikator4' => $validatedData['indikator4'],
            'indikator5' => $validatedData['indikator5'],
            'indikator6' => $validatedData['indikator6'],
            'total_point' => $totalPoints,
            'nilai_akhir' => $nilaiAkhir,
            'prestasi_akademik' => $validatedData['prestasi_akademik'],
            'nilai_keislaman' => $validatedData['nilai_keislaman'],
            'komentar_interviewer' => $validatedData['komentar_interviewer'],
        ]);

        Alert::success('Success', 'Penilaian berhasil ditambahkan')->autoclose(2000)->toToast();
        return redirect()->route('penilaian.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(Penilaian $penilaian)
    {
        return view('penilaian.show', compact('penilaian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penilaian $penilaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penilaian $penilaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penilaian $penilaian)
    {
        $penilaian->delete();
        Alert::success('Success', 'Penilaian berhasil dihapus')->autoclose(2000)->toToast();
        return redirect()->route('penilaian.index');
    }

    public function export()
    {
        return Excel::download(new PenilaianExport, 'Penilaian_Mahasiswa.xlsx');
    }

    public function cariPendaftar(Request $request)
    {
        $kodePendaftar = $request->kode_pendaftar;

        // Cek apakah kode_pendaftar ada di database, mencari berdasarkan bagian akhir kode pendaftar
        $pendaftar = Mahasiswa::where('kode_pendaftar', 'like', '%' . $kodePendaftar . '%')->get();

        if ($pendaftar->isNotEmpty()) {
            return response()->json([
                'success' => true,
                'data' => $pendaftar,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan!',
            ]);
        }
    }

    public function checkExisting(Request $request)
    {
        $mahasiswaId = $request->mahasiswa_id;

        // Cek apakah mahasiswa sudah pernah dinilai
        $exists = Penilaian::where('mahasiswa_id', $mahasiswaId)->exists();

        return response()->json([
            'exists' => $exists
        ]);
    }
}
