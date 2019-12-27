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
        /*
         * Client role seed
         */
        $role_client = new Role();
        $role_client->name = 'client';
        $role_client->description = 'client role for viewing services';
        $role_client->save();

        /*
         *Agent role seed
         */

        $role_agent = new Role();
        $role_agent->name = 'agent';
        $role_agent->description = 'agent role for providing services';
        $role_agent->save();

        /*
        * Admin role seed
        */
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'administrator role for user';
        $role_admin->save();
    }
}
