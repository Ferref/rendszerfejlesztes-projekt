<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('felhasznalok')->insert([
            'nev' => 'admin',
            'email' => 'admin@example.com',
            'jelszo' => Hash::make('password123'),  // A jelszó hash-elve
            'profil_kep' => null,
            'regisztracios_datum' => now(),
        ]);
    }
}
