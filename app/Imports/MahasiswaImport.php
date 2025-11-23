<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MahasiswaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // ambil value + trim
        $kode   = trim($row['kode_pendaftar'] ?? '');
        $nama   = trim($row['nama_mahasiswa'] ?? '');
        $jalur  = trim($row['jalur_pendaftar'] ?? '');
        $sistem = trim($row['sistem_kuliah'] ?? '');
        $p1     = trim($row['prodi_pilihan1'] ?? '');
        $p2     = trim($row['prodi_pilihan2'] ?? '');
        $jk     = trim($row['jk'] ?? '');
        $nowa   = trim($row['nowa'] ?? '');
        $email  = trim($row['email'] ?? '');
        $alamat = trim($row['alamat'] ?? '');
        $status = trim($row['status_pekerjaan'] ?? '');

        // skip kalau wajib kosong
        if ($kode === '' || $nama === '' || $jalur === '' || $sistem === '' || $p1 === '' || $jk === '' || $nowa === '' || $email === '' || $alamat === '' || $status === '') {
            return null;
        }

        // JK wajib cuma 2 pilihan
        if ($jk !== 'Laki-laki' && $jk !== 'Perempuan') {
            return null;
        }

        return new Mahasiswa([
            'kode_pendaftar'    => $kode,
            'nama_mahasiswa'    => $nama,
            'jalur_pendaftar'   => $jalur,
            'sistem_kuliah'     => $sistem,
            'prodi_pilihan1'    => $p1,
            'prodi_pilihan2'    => $p2, // boleh kosong tapi jangan null -> sudah '' kalau kosong
            'jk'                => $jk,
            'nowa'              => $nowa,
            'email'             => $email,
            'alamat'            => $alamat,
            'status_pekerjaan'  => $status,
        ]);
    }
}
