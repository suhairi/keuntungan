<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ibu Pejabat - id = 1

        User::create([
            'name'      => strtoupper('Suhairi Abdul Hamid'),
            'email'     => 'suhairi81@gmail.com',
            'phone'     => '601114962017',
            'password'  => bcrypt('suhairi'),
            'level_id'     => '1',
            'ppk_id'    => '1'
        ]);

        User::create([
            'name'      => strtoupper('Mohd Fouzi Bin Ali'),
            'email'     => 'fouzi@mada.gov.my',
            'phone'     => '60194800115',
            'password'  => bcrypt('password'),
            'level_id'     => '2',
            'ppk_id'    => '1'
        ]);

        User::create([
            'name'      => strtoupper('Rozaidi Bin Sharee'),
            'email'     => 'rozaidi@mada.gov.my',
            'phone'     => '60172576108',
            'password'  => bcrypt('password'),
            'level_id'     => '3',
            'ppk_id'    => '1'
        ]);

        User::create([
            'name'      => strtoupper('noorazeawaty binti salleh'),
            'email'     => 'noorazeawaty@gmail.com',
            'phone'     => '60125025621',
            'password'  => bcrypt('password'),
            'level_id'     => '5',
            'ppk_id'    => '1'
        ]);

        User::create([
            'name'      => strtoupper('farishah binti khamis'),
            'email'     => 'farishah_mada@gmail.com',
            'phone'     => '60194442045',
            'password'  => bcrypt('password'),
            'level_id'     => '5',
            'ppk_id'    => '1'
        ]);

        User::create([
            'name'      => strtoupper('mohd safiq bin abd aziz'),
            'email'     => 'mohd_safiq666@yahoo.com',
            'phone'     => '60124988532',
            'password'  => bcrypt('password'),
            'level_id'     => '5',
            'ppk_id'    => '1'
        ]);

        User::create([
            'name'      => strtoupper('mohd izani bin saberi'),
            'email'     => 'izani_saberi@yahoo.com',
            'phone'     => '60194236679',
            'password'  => bcrypt('password'),
            'level_id'     => '5',
            'ppk_id'    => '1'
        ]);       


        User::create([
            'name'      => strtoupper('Muhamad Hishamudin bin mohd noor'),
            'email'     => 'muhamad.hishamudin@mada.gov.my',
            'password'  => bcrypt('password'),
            'level_id'     => '6',
            'ppk_id'    => '4'
        ]);

        User::create([
            'name'      => strtoupper('ulul azmi bin mohamad noor'),
            'email'     => 'ulul.azmi@mada.gov.my',
            'phone'     => '60194703544',
            'password'  => bcrypt('password'),
            'level_id'     => '7',
            'ppk_id'    => '24'
        ]);

        User::create([
            'name'      => strtoupper('nor shahidah bt yahya'),
            'email'     => 'norshahidah@mada.gov.my',
            'password'  => bcrypt('password'),
            'level_id'     => '8',
            'ppk_id'    => '24'
        ]);










    }
}
