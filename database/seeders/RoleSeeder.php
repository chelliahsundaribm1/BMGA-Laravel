<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Clear cache
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'manage bookings',
            'manage flights',
            'manage stays',
            'manage cars',
            'manage attractions',
            'view dashboard',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $user = Role::firstOrCreate(['name' => 'user']);
        $support = Role::firstOrCreate(['name' => 'support']);

        // Assign permissions to roles
        $admin->givePermissionTo(Permission::all());
        $support->givePermissionTo(['manage bookings', 'view dashboard']);
        $user->givePermissionTo([]);
    }
}
