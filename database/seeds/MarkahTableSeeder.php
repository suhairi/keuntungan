<?php

use Illuminate\Database\Seeder;
use App\Markah;

class MarkahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Markah::create(['position' => strtoupper('Pengerusi Jemaah Pengarah'), 'mark' => 8, 'ppk_id' => 24]);
        Markah::create(['position' => strtoupper('Ahli Lembaga Pengarah'), 'mark' => 7, 'ppk_id' => 24]);
    }
}
