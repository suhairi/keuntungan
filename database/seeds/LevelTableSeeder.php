<?php

use Illuminate\Database\Seeder;
use App\Level;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create(['name' => strtoupper('sys_admin'), 'position' => strtoupper('penolong pegawai teknologi maklumat')]);
        Level::create(['name' => strtoupper('pengurus besar'), 'position' => 'pengurus besar mada']);
        Level::create(['name' => strtoupper('pengarah BPIP'), 'position' => 'pengarah bahagian pengurusan institusi peladang']);
        Level::create(['name' => strtoupper('akauntan'), 'position' => 'akauntan bahagian pengurusan institusi peladang']);
        Level::create(['name' => strtoupper('kerani pendaftar'), 'position' => 'kerani bahagian pengurusan institusi peladang']);
    }
}
