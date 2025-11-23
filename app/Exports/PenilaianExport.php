<?php

namespace App\Exports;

use App\Models\Penilaian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PenilaianExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * Mengambil seluruh data Penilaian.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Penilaian::with('mahasiswa', 'user')->get(); // Mengambil data Penilaian beserta relasi mahasiswa dan user
    }

    /**
     * Menambahkan judul untuk kolom pada file Excel.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'No', // Kolom nomor urut
            'Nama Interviewer', // Nama user (interviewer)
            'Kode Pendaftar', 
            'Nama Mahasiswa',
            'Jalur Pendaftar',
            'Sistem Kuliah',
            'Prodi Pilihan 1',
            'Prodi Pilihan 2',
            'Jenis Kelamin',
            'No WA',
            'Email',
            'Alamat',
            'Status Pekerjaan',
            'Indikator 1',
            'Indikator 2',
            'Indikator 3',
            'Indikator 4',
            'Indikator 5',
            'Indikator 6',
            'Total Point',
            'Nilai Akhir',
            'Prestasi Akademik',
            'Nilai Keislaman',
            'Komentar Interviewer',
        ];
    }

    /**
     * Menambahkan data dari setiap baris penilaian.
     *
     * @param  mixed  $penilaian
     * @return array
     */
    public function map($penilaian): array
    {
        static $rowNumber = 1; // Untuk nomor urut, dimulai dari 1

        return [
            $rowNumber++, // Nomor urut
            $penilaian->user ? $penilaian->user->name : 'N/A', // Nama Interviewer (user relasi)
            $penilaian->mahasiswa ? $penilaian->mahasiswa->kode_pendaftar : 'N/A', // Kode Pendaftar 
            $penilaian->mahasiswa ? $penilaian->mahasiswa->nama_mahasiswa : 'N/A', // Nama Mahasiswa
            $penilaian->mahasiswa ? $penilaian->mahasiswa->jalur_pendaftar : 'N/A', // Jalur Pendaftar
            $penilaian->mahasiswa ? $penilaian->mahasiswa->sistem_kuliah : 'N/A', // Sistem Kuliah
            $penilaian->mahasiswa ? $penilaian->mahasiswa->prodi_pilihan1 : 'N/A', // Prodi Pilihan 1
            $penilaian->mahasiswa ? $penilaian->mahasiswa->prodi_pilihan2 : 'N/A', // Prodi Pilihan 2
            $penilaian->mahasiswa ? $penilaian->mahasiswa->jk : 'N/A', // Jenis Kelamin
            $penilaian->mahasiswa ? $penilaian->mahasiswa->nowa : 'N/A', // No WA
            $penilaian->mahasiswa ? $penilaian->mahasiswa->email : 'N/A', // Email
            $penilaian->mahasiswa ? $penilaian->mahasiswa->alamat : 'N/A', // Alamat
            $penilaian->mahasiswa ? $penilaian->mahasiswa->status_pekerjaan : 'N/A', // Status Pekerjaan
            $penilaian->indikator1, // Indikator 1 
            $penilaian->indikator2, // Indikator 2
            $penilaian->indikator3, // Indikator 3
            $penilaian->indikator4, // Indikator 4
            $penilaian->indikator5, // Indikator 5
            $penilaian->indikator6, // Indikator 6
            $penilaian->total_point, // Total Point
            $penilaian->nilai_akhir, // Nilai Akhir
            $penilaian->prestasi_akademik, // Prestasi Akademik
            $penilaian->nilai_keislaman, // Nilai Keislaman
            $penilaian->komentar_interviewer, // Komentar Interviewer
        ];
    }
}
