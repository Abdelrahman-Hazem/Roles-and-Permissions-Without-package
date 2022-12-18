<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super Admin
        $user = new User();
        $user->name = "super admin";
        $user->email ="superadmin@superadmin.com";
        $user->password =bcrypt('123456789');
        $user->role_id = 1;
        $user-> save();

        //  Admin
        $user = new User();
        $user->name = "admin";
        $user->email ="admin@admin.com";
        $user->password =bcrypt('123456789');
        $user->role_id = 2;
        $user-> save();

        // user
        $user = new User();
        $user->name = "user";
        $user->email ="user@user.com";
        $user->password =bcrypt('123456789');
        $user->role_id = 3;
        $user-> save();
    }
}
