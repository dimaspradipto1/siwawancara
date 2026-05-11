<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use App\Models\Penilaian;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MahasiswaImport implements ToModel, WithHeadingRow
{
    /**
     * Isi nilai kosong dengan default, normalisasi jk (L→PRIA, P→WANITA)
     */
    private function fillEmpty(string $value, string $default = 'missing data'): string
    {
        $value = trim($value);
        return $value === '' ? $default : $value;
    }

    public function model(array $row)
    {
        // Skip baris yang benar-benar kosong (tidak ada kode pendaftar)
        $kode = trim($row['kode_pendaftar'] ?? '');
        if ($kode === '') {
            return null;
        }

        // Normalisasi jk: L → PRIA, P → WANITA
        $jkRaw = strtoupper(trim($row['jk'] ?? ''));
        if ($jkRaw === 'L') {
            $jkRaw = 'PRIA';
        } elseif ($jkRaw === 'P') {
            $jkRaw = 'WANITA';
        }

        return new Mahasiswa([
            'kode_pendaftar'    => $kode,
            'nama_mahasiswa'    => $this->fillEmpty($row['nama_mahasiswa'] ?? ''),
            'jalur_pendaftar'   => $this->fillEmpty($row['jalur_pendaftar'] ?? ''),
            'sistem_kuliah'     => $this->fillEmpty($row['sistem_kuliah'] ?? ''),
            'prodi_pilihan1'    => $this->fillEmpty($row['prodi_pilihan1'] ?? ''),
            'prodi_pilihan2'    => $this->fillEmpty($row['prodi_pilihan2'] ?? ''),
            'jk'                => $this->fillEmpty($jkRaw),
            'nowa'              => $this->fillEmpty($row['nowa'] ?? ''),
            'email'             => $this->fillEmpty($row['email'] ?? ''),
            'alamat'            => $this->fillEmpty($row['alamat'] ?? ''),
            'status_pekerjaan'  => $this->fillEmpty($row['status_pekerjaan'] ?? ''),
        ]);
    }
}
