<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiwayatPenyakit>
 */
class RiwayatPenyakitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $id_pasien = Pasien::pluck('nomor_pasien')->toArray();

        return [
            'id_pasien' => fake()->randomElement($id_pasien),
            'nama_penyakit' => fake()->name()
        ];
    }
}
