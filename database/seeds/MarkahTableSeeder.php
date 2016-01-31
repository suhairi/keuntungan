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
        Markah::create(['position' => 'Pengerusi Jemaah Pengarah', 'mark' => 8]);
        Markah::create(['position' => 'Ahli Lembaga Pengarah', 'mark' => 7]);
    }
}
