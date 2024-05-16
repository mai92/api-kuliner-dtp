<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Place;

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
