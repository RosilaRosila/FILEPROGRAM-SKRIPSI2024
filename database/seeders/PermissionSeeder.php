<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin',
            ],
            ['name' => 'admin']
        );

        $role_ptiket = Role::updateOrCreate(
            [
                'name' => 'ptiket',
            ],
            ['name' => 'ptiket']
        );

        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard',
            ],
            ['name' => 'view_dashboard']
        );

        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'view_home',
            ],
            ['name' => 'view_home']
        );

        $role_admin->givePermissionTo($permission);
        $role_ptiket->givePermissionTo($permission2);

        $user = User::find(1);
        $user2 = User::find(2);

        $user->assignRole('admin');
        $user2->assignRole('ptiket');
    }
}
