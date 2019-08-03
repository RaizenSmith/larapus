<?php

use Illuminate\Database\Seeder;

class error extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = "chansmithgt";
        $user->email = "chansmithgt@gmail.com";
        $user->password = bcrypt("123123123");
        $user->save();
    }
}
