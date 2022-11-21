<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = fake('ru_RU');
        $title = $faker->sentence(rand(1,18));
        $txt = $faker->realText(rand(10, 40));
        $created_at = fake()->dateTimeBetween('-3 months','-2 months');

        $data = [
            'user_id'      => (rand(1,9)),
            'title'        => $title,
            'content'      => $txt,
            'created_at'   => $created_at,
            'updated_at'   => $created_at,
        ];

        return $data;
    }
}
