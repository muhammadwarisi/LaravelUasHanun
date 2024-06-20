<?php

namespace Database\Seeders;

use App\Models\Cabang;
use App\Models\Kopi;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'hanun',
            'email' => 'Hanun@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now()
        ]);
        Kopi::factory(10)->recycle(Cabang::factory(3)->create())->create();
    }
}
