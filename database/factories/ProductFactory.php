<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


use App\Models\ProductCategory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->word();
        $p_category = ProductCategory::factory()->create();
        $title = $this->faker->sentence();
        $short_des = $this->faker->realText($maxNbChars = 200, $indexSize = 2);
        $specification = $this->faker->paragraph();
        $application = $this->faker->sentence(2);
        $packaging = $this->faker->sentence(1);

        return [
            'name' => $name,
            'alternative_name' => $title,
            'product_code' => $p_category->id,
            'short_description' => $short_des,
            'specification' => $specification,
            'application' =>  $application,
            'packaging' => $packaging,
        ];
    }
}
