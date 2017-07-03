<?php

use Illuminate\Database\Seeder;
use App\Role;  



class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $owner = new Role();
        $owner->name = 'owner';
        $owner->display_name = 'Project Owner';
        $owner->description = 'User is the owner of the given project';
        $owner->save();

        $owner = new Role();
        $owner->name = 'admin';
        $owner->display_name = 'Admin User';
        $owner->description = 'User is the owner of the given project';
        $owner->save();  

        $owner = new Role();
        $owner->name = 'client';
        $owner->display_name = 'Shopper';
        $owner->description = 'User is the client of the given project';
        $owner->save();  
    }
}
