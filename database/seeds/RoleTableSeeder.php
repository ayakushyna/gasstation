<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->save();
        $role_manager = new Role();
        $role_manager->name = 'manager';
        $role_manager->save();
        $role_client = new Role();
        $role_client->name = 'client';
        $role_client->save();
    }
}
