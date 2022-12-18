<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "Super Admin";
        $role->permissions = '["show posts","edit posts","create posts","delete posts"]';
        $role-> save();

        $role = new Role();
        $role->name = "Admin";
        $role->permissions = '["show posts","edit posts","create posts"]';
        $role-> save();

        $role = new Role();
        $role->name = "user";
        $role->permissions = '["show posts","create posts"]';
        $role-> save();
    }
}
