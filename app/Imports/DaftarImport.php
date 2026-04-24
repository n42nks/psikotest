<?php

namespace App\Imports;

use App\Models\tbpendaftar;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DaftarImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    * @return int
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        $tgl_daftar = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1])->format("Y-m-d");
        
        $tgl_lahir = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5])->format("Y-m-d");
        $npm = $row[0];

        $cekRow = tbpendaftar::where("NPM", $npm)->count();

        if($cekRow < 1){
            return new tbpendaftar([
              'NPM' => $npm,
              'TGL_DAFTAR' => $tgl_daftar,
              'GEL_DAFTAR' => $row[2],
              'NAMA' => $row[3],
              'TMP_LAHIR' => $row[4],
              'TGL_LAHIR' => $tgl_lahir,
              'JKELAMIN' => $row[6],
              'AGAMA' => $row[7],
              'ALAMAT1' => $row[8],
              'TELEPON' => $row[9],
              'KOTA' => $row[10],
              'KD_JURUSAN' => $row[11]

                // 'npm' => $row[0],
                // 'nama' => $row[1],
                // 'kota' => $row[2],
                // 'sekolah' => $row[3]
            ]);
        }else{
            return null;
        }
    }
}
