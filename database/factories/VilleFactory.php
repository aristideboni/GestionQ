<?php

namespace Database\Factories;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

class VilleFactory extends Factory
{
    protected $model = Ville::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'LibVille' => $this->faker->word,
            'pays_id' => rand(1,2),
        ];
    }
}
