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

        // Level 1, SYS_ADMIN

        User::create([
            'name'      => strtoupper('Suhairi Abdul Hamid'),
            'email'     => 'suhairi81@gmail.com',
            'phone'     => '601114962017',
            'password'  => bcrypt('suhairi'),
            'level_id'     => '1',
            'ppk_id'    => '1'
        ]);

        // Level 2, PENGURUS BESAR MADA

        User::create([
            'name'      => strtoupper('Mohd Fouzi Bin Ali'),
            'email'     => 'fouzi@mada.gov.my',
            'phone'     => '60194800115',
            'password'  => bcrypt('password'),
            'level_id'     => '2',
            'ppk_id'    => '1'
        ]);

        // Level 3, PENGARAH BPIP

        User::create([
            'name'      => strtoupper('Rozaidi Bin Sharee'),
            'email'     => 'rozaidi@mada.gov.my',
            'phone'     => '60172576108',
            'password'  => bcrypt('password'),
            'level_id'     => '3',
            'ppk_id'    => '1'
        ]);

        // Level 4, AKAUNTAN

        User::create([
            'name'      => strtoupper('mohamad izham bin ahmad'),
            'email'     => 'ahmadizham12@gmail.com',
            'phone'     => '601113045141',
            'password'  => bcrypt('password'),
            'level_id'     => '4',
            'ppk_id'    => '1'
        ]);

        // Level 5, KERANI PENDAFTAR

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

        // Level 6, PENGURUS WILAYAH

        User::create([
            'name'      => strtoupper('Muhamad Hishamudin bin mohd noor'),
            'email'     => 'muhamad.hishamudin@mada.gov.my',
            'password'  => bcrypt('password'),
            'level_id'     => '6',
            'ppk_id'    => '4'
        ]);

        // Level 7, PENGURUS PPK

        User::create([
            'name'      => strtoupper('ulul azmi bin mohamad noor'),
            'email'     => 'ulul.azmi@mada.gov.my',
            'phone'     => '60194703544',
            'password'  => bcrypt('password'),
            'level_id'     => '7',
            'ppk_id'    => '24'
        ]);

        // Level 8, KERANI AKAUN

        User::create([
            'name'      => strtoupper('nor shahidah bt yahya'),
            'email'     => 'norshahidah@mada.gov.my',
            'password'  => bcrypt('password'),
            'level_id'     => '8',
            'ppk_id'    => '24'
        ]);

    }
}
