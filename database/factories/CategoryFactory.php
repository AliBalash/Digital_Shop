<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word();
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'slug' => $slug,
            'image' => 'cat_'.$this->faker->unique()->numberBetween(1, 22).'.png',

        ];
    }
}
