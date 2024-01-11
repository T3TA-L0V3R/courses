<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'admin' => 1
        ]);
        Role::create([
            'client' => 2
        ]);
        Role::create([
            'user' => 3
        ]);
    }
}
