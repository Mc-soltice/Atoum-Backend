<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Modules\Auth\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Désactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Vider les tables
        User::truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('model_has_permissions')->truncate();

        // Réactiver les contraintes
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Créer les rôles et permissions d'abord
        $this->call(RoleSeeder::class);

        echo "📋 Création de l'utilisateur admin...\n";

        // 1. Créer l'utilisateur d'abord sans assigner de rôle
        $admin = User::create([
            'first_name' => 'Christian',
            'last_name' => 'MPONDO',
            'email' => 'mcsoltice@gmail.com',
            'phone' => '+237696063115',
            'password' => Hash::make('password123'),
            'is_locked' => false,
        ]);

        echo "✅ Utilisateur admin créé avec ID: {$admin->id}\n";

        // 2. Assigner le rôle APRES la création
        $adminRole = Role::where('name', 'christian')->first();
        if ($adminRole) {
            $admin->assignRole($adminRole);
            echo "✅ Rôle admin assigné\n";
        }

        echo "📋 Création de l'utilisateur client...\n";

        // Créer un utilisateur client
        $client = User::create([
            'first_name' => 'Michelle',
            'last_name' => 'ISSEKOU',
            'email' => 'michelle@email.com',
            'phone' => '+237651620497',
            'password' => Hash::make('password123'),
            'is_locked' => false,
        ]);

        echo "✅ Utilisateur client créé avec ID: {$client->id}\n";

        // Assigner le rôle client
        $clientRole = Role::where('name', 'client')->first();
        if ($clientRole) {
            $client->assignRole($clientRole);
            echo "✅ Rôle client assigné\n";
        }

        echo "📋 Création de 5 utilisateurs de test...\n";

        // Créer d'autres utilisateurs de test SANS factory d'abord
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'first_name' => 'User' . $i,
                'last_name' => 'test',
                'email' => 'test' . $i . '@example.com',
                'phone' => '+12345678' . (90 + $i),
                'password' => Hash::make('password123'),
                'is_locked' => false,
            ]);
        }

        echo "✅ 5 utilisateurs de test créés\n";
        echo "🎉 Seeding terminé avec succès!\n";
    }
}