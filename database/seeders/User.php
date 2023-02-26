<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createTasks = new Permission();
        $createTasks->slug = 'access_backoffice';
        $createTasks->title = 'Access Backoffice';
        $createTasks->save();


        $editUsers = new Permission();
        $editUsers->slug = 'access_configuration';
        $editUsers->title = 'Access Configuration';
        $editUsers->save();

        $createT = new Permission();
        $createT->slug = 'accounts_access';
        $createT->title = 'Accounts Access';
        $createT->save();


        $editU = new Permission();
        $editU->slug = 'approve_account';
        $editU->title = 'Approve account';
        $editU->save();

        $createTask = new Permission();
        $createTask->slug = 'confirm_account';
        $createTask->title = 'Confirm account';
        $createTask->save();
        $createTask23 = new Permission();
        $createTask23->slug = 'manage_permissions';
        $createTask23->title = 'Manage Permissions';
        $createTask23->save();


        $dev_permission1 = Permission::where('slug', 'access_backoffice')->first();
        $manager_permission1 = Permission::where('slug', 'access_configuration')->first();
        $dev_permission2 = Permission::where('slug', 'accounts_access')->first();
        $manager_permission2 = Permission::where('slug', 'approve_account')->first();
        $manager_permission3 = Permission::where('slug', 'confirm_account')->first();
        $manager_permission33 = Permission::where('slug', 'manage_permissions')->first();

        $sadmin_role = new Role();
        $sadmin_role->slug = 'super_admin';
        $sadmin_role->title = 'Super Admin';
        $sadmin_role->save();
        $sadmin_role->permissions()->attach($dev_permission1);
        $sadmin_role->permissions()->attach($manager_permission1);
        $sadmin_role->permissions()->attach($dev_permission2);
        $sadmin_role->permissions()->attach($manager_permission2);
        $sadmin_role->permissions()->attach($manager_permission3);
        $sadmin_role->permissions()->attach($manager_permission33);


        $sadmin_role1 = Role::where('slug', 'super_admin')->first();
        $user = new ModelsUser();
        $user->email = "admin@mail.com";
        $user->phone = "254724000000";
        $user->firstname = "admin";
        $user->username = "admin";
        $user->lastname = "admin";
        $user->save();
        $user->roles()->attach($sadmin_role1);
    }
}
