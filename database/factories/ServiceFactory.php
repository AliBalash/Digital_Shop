<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique->words(4, true);
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'slug' => $slug,
            'category_id' => $this->faker->numberBetween(22, 44),
            'tagline'=> $this->faker->text(20),
            'image'=> 'service_'.$this->faker->unique->numberBetween(1,20).'.jpg',
            'price'=> $this->faker->numberBetween(100,800),
            'description'=> $this->faker->text(500),
            'advantage'=> $this->faker->text(20).'|'.$this->faker->text(21).'|'.$this->faker->text(22),
            'defective'=> $this->faker->text(20).'|'.$this->faker->text(21).'|'.$this->faker->text(22),
        ];
    }
}
