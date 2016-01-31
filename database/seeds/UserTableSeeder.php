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
            'password'  => bcrypt('suhairi'),
            'level_id'     => '1',
            'ppk_id'    => '1'
        ]);

        User::create([
            'name'      => strtoupper('Mohd Fouzi Bin Ali'),
            'email'     => 'fouzi@mada.gov.my',
            'password'  => bcrypt('password'),
            'level_id'     => '2',
            'ppk_id'    => '1'
        ]);

        User::create([
            'name'      => strtoupper('Rozaidi Bin Sharee'),
            'email'     => 'rozaidi@mada.gov.my',
            'password'  => bcrypt('password'),
            'level_id'     => '3',
            'ppk_id'    => '1'
        ]);






    }
}
