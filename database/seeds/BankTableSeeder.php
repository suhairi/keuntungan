<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Bank;

class BankTableSeeder extends Seeder
{
    public function run()
    {
    	Bank::create(['short_name' => strtoupper('CIMB'), 'name' => strtoupper('CIMB Bank berhad')]);
    	Bank::create(['short_name' => strtoupper('Maybank'), 'name' => strtoupper('maybank berhad')]);
    	Bank::create(['short_name' => strtoupper('Agro'), 'name' => strtoupper('agrobank')]);
    	Bank::create(['short_name' => strtoupper('bank islam'), 'name' => strtoupper('bank islam malaysia berhad')]);
    	Bank::create(['short_name' => strtoupper('ambank'), 'name' => strtoupper('ambank berhad')]);
    	Bank::create(['short_name' => strtoupper('rhb'), 'name' => strtoupper('rhb bank berhad')]);
    	Bank::create(['short_name' => strtoupper('public bank'), 'name' => strtoupper('public bank berhad')]);
    	Bank::create(['short_name' => strtoupper('hsbc'), 'name' => strtoupper('hsbc bank berhad')]);
    	Bank::create(['short_name' => strtoupper('ocbc'), 'name' => strtoupper('ocbc bank berhad')]);
    	Bank::create(['short_name' => strtoupper('affin'), 'name' => strtoupper('affin bank berhad')]);
    	Bank::create(['short_name' => strtoupper('hong leong'), 'name' => strtoupper('hong leong bank berhad')]);
    	Bank::create(['short_name' => strtoupper('standard chartered'), 'name' => strtoupper('standard chartered bank (m) berhad')]);
    	Bank::create(['short_name' => strtoupper('BSN'), 'name' => strtoupper('bank simpanan nasional')]);
        
    }
}
