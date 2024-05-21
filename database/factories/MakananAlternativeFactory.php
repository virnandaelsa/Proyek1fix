<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MakananAlternativeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $id_kategori = Kategori::pluck('id')->toArray();

        return [
            'kode_makanan' => fake()->regexify('[A-Za-z0-9]{5}'),
            'nama_makanan' => fake()->name(),
            'karbohidrat' => fake()->numberBetween(0, 100),
            'lemak' => fake()->numberBetween(0, 100),
            'protein' => fake()->numberBetween(0, 100),
            'id_kategori' => fake()->randomElement($id_kategori)
        ];
    }
}
