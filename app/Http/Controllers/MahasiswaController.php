<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\DataTables\MahasiswaDataTable;
use RealRashid\SweetAlert\Facades\Alert;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MahasiswaDataTable $dataTable)
    {
        return $dataTable->render('mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();    

        Mahasiswa::create($data);

        Alert::success('Success', 'Mahasiswa berhasil ditambahkan')
            ->autoclose(2000)
            ->toToast()
            ->timerProgressBar();

        return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->all());
        Alert::success('Success', 'Mahasiswa berhasil diubah')->autoclose(2000)->toToast();
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        Alert::success('Success', 'Mahasiswa berhasil dihapus')->autoclose(2000)->toToast();
        return redirect()->route('mahasiswa.index');
    }

    public function import(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls,csv',
        ]);
        Excel::import(new MahasiswaImport(), $request->file('excel_file'));
        Alert::success('Success', 'Mahasiswa berhasil diimport')->autoclose(2000)->toToast();
        return redirect()->route('mahasiswa.index');
    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->ids; // array id
    
        if (!$ids || count($ids) === 0) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data yang dipilih.'
            ], 422);
        }
    
        Mahasiswa::whereIn('id', $ids)->delete();
    
        return response()->json([
            'success' => true,
            'message' => 'Data terpilih berhasil dihapus.'
        ]);
    }
    
    public function deleteAll()
    {
        Mahasiswa::query()->delete();
    
        return response()->json([
            'success' => true,
            'message' => 'Semua data berhasil dihapus.'
        ]);
    }
}
