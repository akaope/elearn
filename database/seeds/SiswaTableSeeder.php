<?php

use Illuminate\Database\Seeder;
use \App\Siswa;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
			"ucode_siswa" => "100000000010101",
			"nama_siswa" => "Ope",
			"ucode_kelas" => "200002212001001"
		]);
    }
}
