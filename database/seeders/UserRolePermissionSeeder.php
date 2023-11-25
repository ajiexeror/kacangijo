<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

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
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
            
        DB::beginTransaction();
        try {
            // create user
            $admin = User::create(array_merge([
                    'email' => 'admin@abcd.com',
                    'name' => 'admin',
                ], $default_user_value
            ));
            $user = User::create(array_merge([
                    'email' => 'user01@abcd.com',
                    'name' => 'user',
                ], $default_user_value
            ));
            
            // create role
            $role_admin = Role::create(['name' => 'admin']);
            $role_user = Role::create(['name' => 'user']);

            // create permission
            Permission::create(['name' => 'role-read']);
            Permission::create(['name' => 'role-create']);
            Permission::create(['name' => 'role-update']);
            Permission::create(['name' => 'role-delete']);
            Permission::create(['name' => 'usermanagement-read']);
            Permission::create(['name' => 'usermanagement-create']);
            Permission::create(['name' => 'usermanagement-update']);
            Permission::create(['name' => 'usermanagement-delete']);

            $role_admin->givePermissionTo([
                'role-read',
                'role-create',
                'role-update',
                'role-delete',
                'usermanagement-read',
                'usermanagement-create',
                'usermanagement-update',
                'usermanagement-delete'
            ]);

            $role_user->givePermissionTo([
                'usermanagement-read'
            ]);

            // assign user to role
            $admin->assignRole('admin');
            $user->assignRole('user');

            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();
        }

    }
}
