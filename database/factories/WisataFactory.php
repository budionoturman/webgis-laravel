<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(1, 5)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => $this->faker->paragraphs(),
            'body' => collect($this->faker->paragraphs(mt_rand(10, 15)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),

            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 3),
            'kecamatan_id' => mt_rand(1, 5)

        ];
    }
}
