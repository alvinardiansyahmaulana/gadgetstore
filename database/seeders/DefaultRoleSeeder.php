<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DefaultRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'merchant'
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
                'description' => $role . ' user'
            ]);
        }
    }
}
