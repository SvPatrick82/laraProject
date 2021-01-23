<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
		return [
			'name'         => $this->faker->words(2,true),
			'img'          => null,
			'description'  => $this->faker->paragraphs(3,true),
			'slug'         => $this->faker->slug ,
			'price'        => $this->faker->randomFloat(2,50,100),
			'action_price' => $this->faker->randomFloat(2,1,50),
			'recommended'  => $this->faker->numberBetween(0,1),
			'category_id'  => Category::factory(),
		];
	}
}
