<?php

use Illuminate\Database\Seeder;
use App\Ppk;

class PpkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeding Table PPK
        Ppk::create(['code' => 'HQ', 'name' => strtoupper('ibu pejabat')]);
        Ppk::create(['code' => 'W1', 'name' => strtoupper('Wilayah 1')]);
        Ppk::create(['code' => 'W2', 'name' => strtoupper('Wilayah 2')]);
        Ppk::create(['code' => 'W3', 'name' => strtoupper('Wilayah 3')]);
        Ppk::create(['code' => 'W4', 'name' => strtoupper('Wilayah 4')]);

        // PPK Wilayah 1
        Ppk::create(['code' => strtoupper('A1'), 'name' => strtoupper('arau')]);
        Ppk::create(['code' => strtoupper('B1'), 'name' => strtoupper('kayang')]);
        Ppk::create(['code' => strtoupper('C1'), 'name' => strtoupper('kangar')]);
        Ppk::create(['code' => strtoupper('D1'), 'name' => strtoupper('tambun tulang')]);
        Ppk::create(['code' => strtoupper('E1'), 'name' => strtoupper('simpang empat')]);

        // PPK Wilayah 2
        Ppk::create(['code' => strtoupper('A2'), 'name' => strtoupper('kodiang')]);
        Ppk::create(['code' => strtoupper('B2'), 'name' => strtoupper('sanglang')]);
        Ppk::create(['code' => strtoupper('C2'), 'name' => strtoupper('kerpan')]);
        Ppk::create(['code' => strtoupper('D2'), 'name' => strtoupper('tunjang')]);
        Ppk::create(['code' => strtoupper('E2'), 'name' => strtoupper('kubang sepat')]);
        Ppk::create(['code' => strtoupper('F2'), 'name' => strtoupper('jerlun')]);
        Ppk::create(['code' => strtoupper('G2'), 'name' => strtoupper('jitra')]);
        Ppk::create(['code' => strtoupper('H2'), 'name' => strtoupper('kepala batas')]);
        Ppk::create(['code' => strtoupper('I2'), 'name' => strtoupper('kuala sungai')]);

        // PPK Wilayah 3
        Ppk::create(['code' => strtoupper('A3'), 'name' => strtoupper('hutan kampung')]);
        Ppk::create(['code' => strtoupper('B3'), 'name' => strtoupper('alor senibong')]);
        Ppk::create(['code' => strtoupper('C3'), 'name' => strtoupper('tajar')]);
        Ppk::create(['code' => strtoupper('D3'), 'name' => strtoupper('titi haji idris')]);
        Ppk::create(['code' => strtoupper('E3'), 'name' => strtoupper('kokbah')]);
        Ppk::create(['code' => strtoupper('F3'), 'name' => strtoupper('pendang')]);

        // PPK Wilayah 4
        Ppk::create(['code' => strtoupper('A4'), 'name' => strtoupper('batas paip')]);
        Ppk::create(['code' => strtoupper('B4'), 'name' => strtoupper('pengkalan kundor')]);
        Ppk::create(['code' => strtoupper('C4'), 'name' => strtoupper('kangkong')]);
        Ppk::create(['code' => strtoupper('D4'), 'name' => strtoupper('permatang buluh')]);
        Ppk::create(['code' => strtoupper('E4'), 'name' => strtoupper('bukit besar')]);
        Ppk::create(['code' => strtoupper('F4'), 'name' => strtoupper('sungai limau dalam')]);
        Ppk::create(['code' => strtoupper('G4'), 'name' => strtoupper('guar chempedak')]);
    }
}
