<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
Use DB;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$Bq.WoiIxVZI8ds49YVkSr.XhU8x6vfl5xrRbp8K8pyxNVyXgWWx/u', // password
            'remember_token' => Str::random(10),
        ];
        
        DB::beginTransaction();
        try {
            $admin = User::create(array_merge([
                    'email' => 'admin@abcd.com',
                    'name' => 'admin',
                ], $default_user_value
            ));
            $staff = User::create(array_merge([
                    'email' => 'staff01@abcd.com',
                    'name' => 'staff',
                ], $default_user_value
            ));
            $spv = User::create(array_merge([
                    'email' => 'spv01@abcd.com',
                    'name' => 'supervisor',
                ], $default_user_value
            ));       
            $manager = User::create(array_merge([
                    'email' => 'manager@abcd.com',
                    'name' => 'manager',
                ], $default_user_value
            ));
            
            $role_admin = Role::create(['name' => 'admin']);
            $role_staff = Role::create(['name' => 'staff']);
            $role_supervisor = Role::create(['name' => 'supervisor']);
            $role_manager = Role::create(['name' => 'manager']);

            $permission = Permission::create(['name' => 'read']);
            $permission = Permission::create(['name' => 'create']);
            $permission = Permission::create(['name' => 'update']);
            $permission = Permission::create(['name' => 'delete']);

            $admin->assignRole('admin');
            $staff->assignRole('staff');
            $spv->assignRole('supervisor');
            $manager->assignRole('manager');

            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
        }

    }
}
