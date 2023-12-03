<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesertas')->insert([
            'nama' => 'kayla',
            'jeniskelamin' => 'cewe',
            'asalsekolah' => 'SMKN 1 SURABAYA',
            'kelas' => '11 BD 1',
            'alamat' => 'Kedurus',
            'nik' => '432875',
            'notlp' => '0538385485'
        ]);
    }
}
