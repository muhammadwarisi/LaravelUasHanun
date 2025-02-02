<?php

namespace Database\Factories;

use App\Models\Cabang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kopi>
 */
class KopiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kopi' => fake()->word(),
            'jenis_kopi' => fake()->word(),
            'asal_kopi' => fake()->word(),
            'cabang_toko' => fake()->word()
        ];
    }
}
