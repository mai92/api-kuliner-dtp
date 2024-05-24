<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Place::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => Category::factory(),
            'slug' => $this->faker->slug(),
            'photo' => $this->faker->word(),
            'description' => $this->faker->text(),
            'address' => $this->faker->word(),
        ];
    }
}
