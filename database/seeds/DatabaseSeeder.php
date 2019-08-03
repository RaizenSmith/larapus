<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
// use App\Permision

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(UserSeeder::class);

        
    }
}
