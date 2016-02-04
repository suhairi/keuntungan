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
        Ppk::create(['code' => 'HQ', 'name' => strtoupper('ibu pejabat'), 'fullname' => strtoupper('IBU PEJABAT MADA')]);
        Ppk::create(['code' => 'W1', 'name' => strtoupper('Wilayah 1'), 'fullname' => strtoupper('pejabat wilayah 1')]);
        Ppk::create(['code' => 'W2', 'name' => strtoupper('Wilayah 2'), 'fullname' => strtoupper('pejabat wilayah 2')]);
        Ppk::create(['code' => 'W3', 'name' => strtoupper('Wilayah 3'), 'fullname' => strtoupper('pejabat wilayah 3')]);
        Ppk::create(['code' => 'W4', 'name' => strtoupper('Wilayah 4'), 'fullname' => strtoupper('pejabat wilayah 4')]);

        // PPK Wilayah 1
        Ppk::create(['code' => strtoupper('A1'), 'name' => strtoupper('arau'), 'fullname' => strtoupper('pertubuhan peladang kawasan A1')]);
        Ppk::create(['code' => strtoupper('B1'), 'name' => strtoupper('kayang'), 'fullname' => strtoupper('pertubuhan peladang kawasan B1')]);
        Ppk::create(['code' => strtoupper('C1'), 'name' => strtoupper('kangar'), 'fullname' => strtoupper('pertubuhan peladang kawasan C1')]);
        Ppk::create(['code' => strtoupper('D1'), 'name' => strtoupper('tambun tulang'), 'fullname' => strtoupper('pertubuhan peladang kawasan D1')]);
        Ppk::create(['code' => strtoupper('E1'), 'name' => strtoupper('simpang empat'), 'fullname' => strtoupper('pertubuhan peladang kawasan E1')]);

        // PPK Wilayah 2
        Ppk::create(['code' => strtoupper('A2'), 'name' => strtoupper('kodiang'), 'fullname' => strtoupper('pertubuhan peladang kawasan A2')]);
        Ppk::create(['code' => strtoupper('B2'), 'name' => strtoupper('sanglang'), 'fullname' => strtoupper('pertubuhan peladang kawasan b2')]);
        Ppk::create(['code' => strtoupper('C2'), 'name' => strtoupper('kerpan'), 'fullname' => strtoupper('pertubuhan peladang kawasan c2')]);
        Ppk::create(['code' => strtoupper('D2'), 'name' => strtoupper('tunjang'), 'fullname' => strtoupper('pertubuhan peladang kawasan d2')]);
        Ppk::create(['code' => strtoupper('E2'), 'name' => strtoupper('kubang sepat'), 'fullname' => strtoupper('pertubuhan peladang kawasan e2')]);
        Ppk::create(['code' => strtoupper('F2'), 'name' => strtoupper('jerlun'), 'fullname' => strtoupper('pertubuhan peladang kawasan f2')]);
        Ppk::create(['code' => strtoupper('G2'), 'name' => strtoupper('jitra'), 'fullname' => strtoupper('pertubuhan peladang kawasan g2')]);
        Ppk::create(['code' => strtoupper('H2'), 'name' => strtoupper('kepala batas'), 'fullname' => strtoupper('pertubuhan peladang kawasan h2')]);
        Ppk::create(['code' => strtoupper('I2'), 'name' => strtoupper('kuala sungai'), 'fullname' => strtoupper('pertubuhan peladang kawasan i2')]);

        // PPK Wilayah 3
        Ppk::create(['code' => strtoupper('A3'), 'name' => strtoupper('hutan kampung'), 'fullname' => strtoupper('pertubuhan peladang kawasan A3')]);
        Ppk::create(['code' => strtoupper('B3'), 'name' => strtoupper('alor senibong'), 'fullname' => strtoupper('pertubuhan peladang kawasan b3')]);
        Ppk::create(['code' => strtoupper('C3'), 'name' => strtoupper('tajar'), 'fullname' => strtoupper('pertubuhan peladang kawasan c3')]);
        Ppk::create(['code' => strtoupper('D3'), 'name' => strtoupper('titi haji idris'), 'fullname' => strtoupper('pertubuhan peladang kawasan d3')]);
        Ppk::create(['code' => strtoupper('E3'), 'name' => strtoupper('kokbah'), 'fullname' => strtoupper('pertubuhan peladang kawasan e3')]);
        Ppk::create(['code' => strtoupper('F3'), 'name' => strtoupper('pendang'), 'fullname' => strtoupper('pertubuhan peladang kawasan f3')]);

        // PPK Wilayah 4
        Ppk::create(['code' => strtoupper('A4'), 'name' => strtoupper('batas paip'), 'fullname' => strtoupper('pertubuhan peladang kawasan A4')]);
        Ppk::create(['code' => strtoupper('B4'), 'name' => strtoupper('pengkalan kundor'), 'fullname' => strtoupper('pertubuhan peladang kawasan b4')]);
        Ppk::create(['code' => strtoupper('C4'), 'name' => strtoupper('kangkong'), 'fullname' => strtoupper('pertubuhan peladang kawasan c4')]);
        Ppk::create(['code' => strtoupper('D4'), 'name' => strtoupper('permatang buluh'), 'fullname' => strtoupper('pertubuhan peladang kawasan d4')]);
        Ppk::create(['code' => strtoupper('E4'), 'name' => strtoupper('bukit besar'), 'fullname' => strtoupper('pertubuhan peladang kawasan e4')]);
        Ppk::create(['code' => strtoupper('F4'), 'name' => strtoupper('sungai limau dalam'), 'fullname' => strtoupper('pertubuhan peladang kawasan f4')]);
        Ppk::create(['code' => strtoupper('G4'), 'name' => strtoupper('guar chempedak'), 'fullname' => strtoupper('pertubuhan peladang kawasan g4')]);
    }
}
