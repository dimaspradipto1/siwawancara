<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Border;

class BelumWawancaraExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    /**
     * Mengambil data Mahasiswa yang belum dinilai.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Mahasiswa::doesntHave('penilaians')->get();
    }

    /**
     * Menambahkan judul untuk kolom pada file Excel.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'No',
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
            'Status Pekerjaan'
        ];
    }

    /**
     * Menambahkan data dari setiap baris mahasiswa.
     *
     * @param  mixed  $mahasiswa
     * @return array
     */
    public function map($mahasiswa): array
    {
        static $rowNumber = 1; // Untuk nomor urut, dimulai dari 1

        return [
            $rowNumber++,
            $mahasiswa->kode_pendaftar,
            $mahasiswa->nama_mahasiswa,
            $mahasiswa->jalur_pendaftar,
            $mahasiswa->sistem_kuliah,
            $mahasiswa->prodi_pilihan1,
            $mahasiswa->prodi_pilihan2,
            $mahasiswa->jk,
            $mahasiswa->nowa,
            $mahasiswa->email,
            $mahasiswa->alamat,
            $mahasiswa->status_pekerjaan
        ];
    }

    /**
     * Menambahkan style untuk Excel.
     *
     * @param Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet)
    {
        $lastRow = $sheet->getHighestRow();
        $lastColumn = $sheet->getHighestColumn();
        $range = 'A1:' . $lastColumn . $lastRow;

        return [
            // Style header baris 1
            1    => ['font' => ['bold' => true]],
            
            // Tambahkan border untuk semua cell yang memiliki data
            $range => [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['argb' => 'FF000000'],
                    ],
                ],
            ],
        ];
    }
}
