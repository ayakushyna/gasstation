<?php

use Illuminate\Database\Seeder;
use App\Role;
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
        $role_admin = Role::where('name','admin')->first();
        $role_manager  = Role::where('name', 'manager')->first();
        $role_client = Role::where('name', 'client')->first();


        $admin = new User();
        $admin->name = 'Admin Name';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('admin');
        $admin->id_role = 1;
        $admin->save();
//        $admin->roles()->associate($role_admin);


        $manager = new User();
        $manager->name = 'Manager Name';
        $manager->email = 'manager@manager.com';
        $manager->password = bcrypt('manager');
        $manager->id_role = 2;
        $manager->save();
//        $manager->roles()->associate($role_manager);


        $client = new User();
        $client->name = 'Client Name';
        $client->email = 'client@client.com';
        $client->password = bcrypt('client');
        $client->id_role = 2;
        $client->save();
//        $client->roles()->associate($role_client);
    }
}
