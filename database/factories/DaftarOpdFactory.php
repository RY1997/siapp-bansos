<?php

namespace Database\Factories;

use App\Models\DaftarOpd;
use Illuminate\Database\Eloquent\Factories\Factory;

class DaftarOpdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DaftarOpd::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kd_column' => $this->faker->word,
        'kd_opd' => $this->faker->word,
        'level' => $this->faker->word,
        'urusan' => $this->faker->word,
        'opd' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
