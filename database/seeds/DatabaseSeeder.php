<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(PpkTableSeeder::class);
         $this->call(LevelTableSeeder::class);
         $this->call(MarkahTableSeeder::class);
         $this->call(BankTableSeeder::class);
    }
}
