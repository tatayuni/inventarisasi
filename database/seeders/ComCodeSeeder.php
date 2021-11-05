<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComCode;
use DB;

class ComCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('com_codes')->truncate();
        $data = [
            ['code_cd' => 'STATUS_ST_01', 'code_nm' => 'Menunggu Persetujuan', 'code_group' => 'STATUS_ST ', 'code_value' => ''],
            ['code_cd' => 'STATUS_ST_02', 'code_nm' => 'Disetujui', 'code_group' => 'STATUS_ST ', 'code_value' => ''],
            ['code_cd' => 'STATUS_ST_03', 'code_nm' => 'Ditolak', 'code_group' => 'STATUS_ST ', 'code_value' => ''],
            ['code_cd' => 'STATUS_ST_04', 'code_nm' => 'Sukses', 'code_group' => 'STATUS_ST ', 'code_value' => ''],
        ];

        foreach ($data as $datum){
            ComCode::create($datum);
        }
    }
}
