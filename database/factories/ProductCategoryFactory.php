<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(1);
        $tagLine = $this->faker->sentence(1);
        $description = $this->faker->sentence(2);

        return [
            'name' => $name,
            'tag_line' => $tagLine,
            'description' => $description,
        ];
    }
}
