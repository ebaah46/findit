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
        //Getting all roles from the roles model
        $role_agent  = Role::where('name','agent')->first();
        $role_client  = Role::where('name','client')->first();
        $role_admin  = Role::where('name','admin')->first();

        $agent = new User();
        $agent->name = 'agent1';
        $agent->email = 'baah@mail.com';
        $agent->password = bcrypt('agent123');
        $agent->phone = '0201234139';
        $agent->date_of_birth = '1991-11-30';
        $agent->type = 'agent';
        $agent->save();
        $agent->roles()->attach($role_agent);

        $client = new User();
        $client->name = 'client1';
        $client->email = 'baah@test.com';
        $client->password = bcrypt('client123');
        $client->phone = '0201234529';
        $client->date_of_birth = '1991-11-30';
        $client->type = 'client';
        $client->save();
        $client->roles()->attach($role_client);

        $admin = new User();
        $admin->name = 'admin1';
        $admin->email = 'admin@mail.com';
        $admin->password = bcrypt('admin123');
        $admin->phone = '0201234179';
        $admin->date_of_birth = '1991-11-30';
        $admin->type = 'admin';
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
