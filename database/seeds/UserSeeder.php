<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat role Admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();
    
        //Membuat role Member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //Membuat Sample admin
        $admin = new User();
        $admin->name = "chansmithgt";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("admin123");
        $admin->save();
        $admin->attachRole($adminRole);

        //Membuat Sample member
        $member = new User();
        $member->name = "MemberQ";
        $member->email = "memberQ@gmail.com";
        $member->password = bcrypt("member123");
        $member->save();
        $member->attachRole($memberRole);
    }
}