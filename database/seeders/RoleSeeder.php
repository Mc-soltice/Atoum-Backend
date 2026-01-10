<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $permissions = [
            // permission concernqnt les utilisateurs
            'user.view',
            'user.create',
            'user.update',
            'user.delete',
            'user.toggle-lock',
            'user.view-activity',

            // permission concernqnt les produits
            'product.view',
            'product.create',
            'product.update',
            'product.delete',

        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Création des rôles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $client = Role::firstOrCreate(['name' => 'client']);



        // Attribution de permissions
        $admin->givePermissionTo(Permission::all()); // admin a tout
        $client->givePermissionTo(
            [
                'user.view',
                'user.create',
                'user.update',
            ]
        );
    }
}
