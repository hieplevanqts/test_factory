<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();
        $type = ["news", "product", "video", "banner"];

        return [
            'name' => $faker->text(20),
            'slug'=>Str::of($faker->text(20))->slug('-'),
            'type'=>$faker->randomElement($type),
            'parent_id'=> null
        ];
    }


}
