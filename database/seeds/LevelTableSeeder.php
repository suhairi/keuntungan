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
        Level::create(['name' => strtoupper('pengurus besar'), 'position' => strtoupper('pengurus besar mada')]);
        Level::create(['name' => strtoupper('pengarah BPIP'), 'position' => strtoupper('pengarah bahagian pengurusan institusi peladang')]);
        Level::create(['name' => strtoupper('akauntan'), 'position' => strtoupper('akauntan bahagian pengurusan institusi peladang')]);
        Level::create(['name' => strtoupper('kerani pendaftar'), 'position' => strtoupper('kerani bahagian pengurusan institusi peladang')]);
        Level::create(['name' => strtoupper('pengurus wilayah'), 'position' => strtoupper('pengurus wilayah')]);
        Level::create(['name' => strtoupper('pengurus ppk'), 'position' => strtoupper('pengurus ppk')]);
        Level::create(['name' => strtoupper('kerani akaun'), 'position' => strtoupper('kerani akaun ppk')]);
    }
}
