<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Aaron Isaac Giles Cisneros',
            'email' => 'giles@correo.com',
            'password' => Hash::make('giles@correo.com')
        ]);

        User::create([
            'name' => 'Juan Miguel Galvan Gomez',
            'email' => 'miguel@correo.com',
            'password' => Hash::make('miguel@correo.com')
        ]);
    }
}
