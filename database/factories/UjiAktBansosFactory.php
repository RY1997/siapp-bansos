<?php

namespace Database\Factories;

use App\Models\UjiAktBansos;
use Illuminate\Database\Eloquent\Factories\Factory;

class UjiAktBansosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UjiAktBansos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kd_pemda' => $this->faker->word,
        'kd_opd' => $this->faker->word,
        'kd_rek' => $this->faker->word,
        'uji_nm_aktivitas' => $this->faker->text,
        'uji_bansos_sejenis' => $this->faker->word,
        'uji_anggaran' => $this->faker->word,
        'uji_realisasi' => $this->faker->word,
        'uji_kpm' => $this->faker->randomDigitNotNull,
        'uji_juknis' => $this->faker->word,
        'uji_basis_salur' => $this->faker->word,
        'uji_monev' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
